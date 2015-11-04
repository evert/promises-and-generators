<?php

$client->requestAsync('GET', '/status/201')
    ->then(function($response) {

        echo "success!\n";

    })
    ->otherwise(function($response) {

        echo "error :(\n";

    })
    ->wait();
