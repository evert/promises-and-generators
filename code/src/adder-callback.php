<?php

function adder($a, $b, $success, $error) {

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
