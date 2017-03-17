<?php

function coroutine(callable $gen) : Promise {

    $generator = $gen();
    if (!$generator instanceof Generator) {
        throw new \InvalidArgumentException('You must pass a generator function');
    }

    $promise = new Promise();

    $advanceGenerator = function() use (&$advanceGenerator, $generator, $promise, &$lastYieldResult) {

        while ($generator->valid()) {

            $yieldedValue = $generator->current();
            if ($yieldedValue instanceof Promise) {
                $yieldedValue->then(
                    function($value) use ($generator, &$advanceGenerator, &$lastYieldResult) {
                        $generator->send($value);
                        $advanceGenerator();
                    },
                    function(Throwable $reason) use ($generator, $advanceGenerator) {
                        $generator->throw($reason);
                        $advanceGenerator();
                    }
                )->otherwise(function(Throwable $reason) use ($promise) {
                    $promise->reject($reason);
                });
                break;
            } else {
                $generator->send($yieldedValue);
            }

        }

         if (!$generator->valid() && $promise->state === Promise::PENDING) {
             $returnValue = $generator->getReturn();

             // The return value is a promise.
             if ($returnValue instanceof Promise) {
                 $returnValue->then(function($value) use ($promise) {
                     $promise->fulfill($value);
                 }, function(Throwable $reason) {
                     $promise->reject($reason);
                 });
             } else {

                 $promise->fulfill($returnValue);

             }


        }

    };

    try {
        $advanceGenerator();
    } catch (Throwable $e) {
        $promise->reject($e);
    }

    return $promise;

}
