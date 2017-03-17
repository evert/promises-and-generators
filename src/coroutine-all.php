<?php

$func = function() {

    yield Promise\all (
        $promise1,
        $promise2
    );

};

coroutine($func);
