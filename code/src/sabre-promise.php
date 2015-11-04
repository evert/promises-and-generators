<?php

namespace Sabre\Event;

class Promise {

    function __construct(callable $executor = null);

    function then(callable $onFulfilled = null, callable $onRejected = null);

    function otherwise(callable $onRejected);

    function fulfill($value = null);

    function reject($reason = null);

    function wait();

}
