<?php

$func = function() {

    yield coroutine( $coroutine2 );

};

coroutine($func);
