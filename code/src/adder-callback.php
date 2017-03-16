<?php

function adder(int $a, int $b, callable $success, callable $error) : int {

    // Magic here

}


adder(
    1, 
    2,
    function($result) {
        echo $result, "\n";
    },
    function($error) {
        echo $error, "\n";
    }
);
