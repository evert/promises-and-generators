<?php

$client->requestAsync('GET', '/get');
  ->then(function($response) {

      echo $response->getStatusCode(), "\n";

  })
  ->wait();
