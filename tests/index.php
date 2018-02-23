<?php

require __DIR__. '/../vendor/autoload.php';

$api = new \AlissonPadua\Service\ApiAuthService;
echo $api->hello();