<?php

adder(1, 2)
  ->then(function($result) {

      throw Exception('Uh oh');

  })
  ->then(function($result) {

    // Prints result of async operation.
    echo $result, "\n";

  })
  ->otherwise(function($exception) {

    // Handle exception

  });

