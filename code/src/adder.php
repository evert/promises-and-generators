<?php

function adder($a, $b) {

    if (!is_int($a) || !is_int($b)) {
        throw \InvalidArgumentException('ints only, buddy');
    }
    return $a + $b;

}
