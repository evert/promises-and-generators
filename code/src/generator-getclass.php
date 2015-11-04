<?php

$gen = function() {

    yield "A";
    yield "B";
    yield "C";

};

echo get_class($gen), "\n";
echo get_class($gen()), "\n";

// Output:
// Closure
// Generator
