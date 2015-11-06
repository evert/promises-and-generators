<?php

use Sabre\Event\Promise;
use function Sabre\Event\coroutine;

coroutine(function() {

    yield asyncOp();
    yield asyncOp2();

    
});
