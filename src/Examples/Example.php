<?php

use WrapCurl\Request;

// TODO: register an autoloader.

$url = 'www.google.com';
$request = new Request($url);
$response = $request->exec();
file_put_contents($response);


