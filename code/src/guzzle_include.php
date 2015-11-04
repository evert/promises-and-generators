<?php

include 'vendor/autoload.php';

$client = new GuzzleHttp\Client([

    'base_uri' => 'http://httpbin.org/',

]);

include $argv[1];
