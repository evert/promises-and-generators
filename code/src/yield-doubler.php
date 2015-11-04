<?php

function generator() {

    echo (yield 5);
    echo (yield 6);

}


$gen = generator();

$current = $gen->current();

while($gen->valid()) {

    $current = $gen->send($current * 2);

}
