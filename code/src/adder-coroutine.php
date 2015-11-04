<?php

coroutine(function() {

    try {

        $result = (yield adder(1, 2));
        $result = (yield adder($result, 3));
        $result = (yield adder($result, 4));

        echo $result;

    } catch (Exception $e) {

        echo $e->getMessage();

    }

});

