<?php

use function Sabre\Event\coroutine;
use Sabre\Event\Promise;

require __DIR__ . '/vendor/autoload.php';

function adder(int $a, int $b) : Promise {

    return new Promise(function($resolve) use ($a, $b) {

        $resolve($a + $b);

    });

}


coroutine(function() {

    try {

        $result = (yield adder(1, 2));
        $result = (yield adder($result, 3));
        $result = (yield adder($result, 4));

        echo $result;

    } catch (Exception $e) {

        echo $e->getMessage();

    }

})->wait();

