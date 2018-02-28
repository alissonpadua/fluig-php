<?php

require __DIR__. '/../vendor/autoload.php';

$dataset = new \AlissonPadua\PhpFluig\Model\Dataset;
$datasetService = new \AlissonPadua\PhpFluig\Service\DatasetService;

$dataset->setName("colleague");

$json = $datasetService->getDataset($dataset);

echo $json;