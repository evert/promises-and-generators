<?php

namespace Sabre\Event;

class Promise {

    function then(callable $onFulfilled = null, callable $onRejected = null) : Promise;

    function otherwise(callable $onRejected) : Promise;

    function wait();

}
