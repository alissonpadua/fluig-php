<?php

namespace AlissonPadua\PhpFluig\Service;

use AlissonPadua\PhpFluig\Service\ApiClientService;
use AlissonPadua\PhpFluig\Model\Dataset;

class DatasetService
{
    public function getDataset(Dataset $dataset){

        $apiClient = new ApiClientService;
        
        $data = [
            'name' => $dataset->name, 
            'fields' => $dataset->listFields,
            'constraints' => $dataset->listConstraints,
            'order' => $dataset->order
        ];

        $jsonResponse = $apiClient->post('api/public/ecm/dataset/datasets', $data);
        return $jsonResponse;
    }
    
}