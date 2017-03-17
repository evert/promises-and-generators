<?php

function adder(int $a, int $b) : Promise {

}


adder(1, 2)
    ->then(function($result) {
        echo $result, "\n";
    })
    ->otherwise(function($error) {
        echo $error, "\n";
    });
