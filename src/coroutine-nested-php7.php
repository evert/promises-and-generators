<?php

$func = function() {

    yield from $coroutine2;

};

coroutine($func);
