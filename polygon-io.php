<?php
require __DIR__ . '/vendor/autoload.php';
use PolygonIO\Rest\Rest;

$rest = new Rest('your api key');

print_r($rest->forex->realTimeCurrencyConversion->get('USD', 'EUR', 10));
