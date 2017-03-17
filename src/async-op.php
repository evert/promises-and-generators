<?php

adder(1, 2)
  ->then(function($result) {

    return "hello world";

  })
  ->then(function($result) {

    // Prints "hello world"      
    echo $result, "\n";

  });

