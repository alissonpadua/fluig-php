<?php

require __DIR__. '/../vendor/autoload.php';

/*$env = new \Symfony\Component\Dotenv\Dotenv;
$env->load(__DIR__. '/../.env');
echo getenv('FLUIG_CONSUMER_KEY');
*/

/*
$dataset = new \AlissonPadua\Model\Dataset;
$c1 = new \AlissonPadua\Model\Constraint('nome_colaborador', '100', '200', 'MUST');
$dataset->addConstraint($c1);
var_dump($dataset->getListConstraints());*/

$dataset = new \AlissonPadua\PhpFluig\Model\Dataset;
$datasetService = new \AlissonPadua\PhpFluig\Service\DatasetService;

$dataset->setName("buscarTodosCooperados");

$json = $datasetService->getDataset($dataset);

echo $json;