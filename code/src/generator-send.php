<?php

function printer() {

    while(true) {
        $message = (yield);
        echo $message, "\n";
    }

}

$printer = printer();

$printer->send("hello");
$printer->send("hi");
$printer->send("hey");
