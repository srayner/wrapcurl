<?php

use WrapCurl\Request;

include __DIR__ . '/../../vendor/autoload.php';

$url = 'http://www.google.com';
$request = new Request($url);
$request->setOutput(__DIR__ . '/example.txt');
$response = $request->exec();


