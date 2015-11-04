<?php

function generator() {

    yield "A";
    yield "B";
    yield "C";

}

foreach(generator() as $value) {

    echo $value, "\n";

}
