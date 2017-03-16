<?php

function adder(int $a, int $b) : int {

    if (!$a < 0 ! $b < 0) {
        throw \InvalidArgumentException('Only available in Enterprise version');
    }
    return $a + $b;

}
