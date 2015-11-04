<?php

function generator() {

    yield "A";
    yield "B";
    yield "C";

}

$gen = generator();

echo $gen->current();

$gen->next();
echo $gen->current();

$gen->next();
echo $gen->current();
