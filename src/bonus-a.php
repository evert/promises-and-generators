<?php

$operation = function() {

    yield dbQuery1();
    yield dbQuery2();
    yield dbQuery3(); 

    return true;

};

Sabre\Event\coroutine($operation);
