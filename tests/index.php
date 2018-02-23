<?php

require __DIR__. '/../vendor/autoload.php';

$env = new \Symfony\Component\Dotenv\Dotenv;

/* env test
$env->load(__DIR__. '/../.env');
echo getenv('FLUIG_CONSUMER_KEY');
*/

$cons = new \AlissonPadua\Model\Constraint;
$cons->setType('MUST');