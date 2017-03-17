<?php

adder(1, 2)
  ->then(function($result) {

    return asyncOperation();

  })
  ->then(function($result) {

    // Prints result of async operation.
    echo $result, "\n";

  });

