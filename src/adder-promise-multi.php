<?php

adder(1, 2)
    ->then(function($result) {

        return adder($result, 3);

    })
    ->then(function($result) {

        return adder($result, 4);

    })
    ->then(function($result) {

        echo $result, "\n";

    })
    ->otherwise(function($error) {
        echo $error, "\n";
    });

