<?php

function adder($a, $b) {

    // Returns Promise

}


adder(1, 2)
    ->then(function($result) {
        echo $result, "\n";
    })
    ->otherwise(function($error) {
        echo $error, "\n";
    });
