<?php

use WrapCurl\Request;

include __DIR__ . '/../../vendor/autoload.php';

$url = 'www.google.com';
$request = new Request($url);
$response = $request->exec();
file_put_contents(__DIR__ . '/example.txt', $response);


