<?php

$promise = $client->requestAsync('GET', '/get');

$promise->then(function($response) {

    echo $response->getStatusCode(), "\n";

});

$promise->wait();

