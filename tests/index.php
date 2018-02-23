<?php

require __DIR__. '/../vendor/autoload.php';

$env = new \Symfony\Component\Dotenv\Dotenv;

/* env test
$env->load(__DIR__. '/../.env');
echo getenv('FLUIG_CONSUMER_KEY');
*/

$dataset = new \AlissonPadua\Model\Dataset;
$c1 = new \AlissonPadua\Model\Constraint;

$c1->setField("nome_colaborador");
$c1->setInitialValue("100");
$c1->setFinalValue("200");
$c1->setType("MUST_NOT");

$dataset->addConstraint($c1);

var_dump($dataset->getListConstraints());