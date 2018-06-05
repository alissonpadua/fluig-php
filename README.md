## LIB para facilitar a integração Fluig-TOTVS em PHP

LIB para integração via REST com FLUIG-TOTVS utilizando PHP.

No momento é possivel apenas conusltar um dataset, seja interno ou customizado. Você pode passar as Constraints, Fields ou order se necessário.

### Como usar

- Primeiro instale a biblioteca

 ```bash
composer require alissonpadua/fluig-php
 ```
- Depois crie o OAuth App e OAth Provider no fluig. Em seguida, clique em usar aplicativo para gerar os tokens de acesso.
- Na LIB, renomeie o arquivo .env-sample para .env e mude os valores de acordo com seu Fluig

### Código básico de exemplo

```php
<?php

require __DIR__. '/../vendor/autoload.php';

$dataset = new \AlissonPadua\PhpFluig\Model\Dataset;
$datasetService = new \AlissonPadua\PhpFluig\Service\DatasetService;


$dataset->setName("colleague");
$json = $datasetService->getDataset($dataset);
print_r($json);
```

### Dependência

 - Fluig 1.5+
 - PHP 7+

### Em desenvolvimento...

- Algoritimo para realizar CRUD em qualquer Dataset
- Upload de arquivos para o GED