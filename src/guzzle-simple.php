<?php

$client = new GuzzleHttp\Client([

    'base_uri' => 'http://httpbin.org/',

]);

$response = $client->request('GET', '/status/200');
echo $response->getStatusCode(), "\n";

