<?php

use Cp\Crypt\App;

include_once __DIR__ . '/vendor/autoload.php';

$apKey = '';
$apiSecret = '';

$app = new App();

echo $app->encrypt($apKey, $apiSecret).PHP_EOL;


