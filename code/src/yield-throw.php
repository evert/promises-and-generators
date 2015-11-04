<?php

function generator() {

    try {

        echo (yield 5);
        echo (yield 6);

    } catch (\Exception $e) {

        echo $e->getMessage(), "\n";

    } 


}


$gen = generator();

$current = $gen->current();

while($gen->valid()) {

    $e = new Exception('Some error occured');
    $gen->throw($e);

}
