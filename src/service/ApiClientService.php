<?php

namespace AlissonPadua\PhpFluig\Service;

use GuzzleHttp\Client;
use AlissonPadua\PhpFluig\Service\OauthService;
use AlissonPadua\PhpFluig\Service\HandlerFluigResponse;

class ApiClientService
{
    use HandlerDotenv;
    
    public function get(String $endpoint){
        $this->parseDotenv();

        $stack = new OauthService;
        $response = new HandlerFluigResponse;

		try{
	    	$client = new Client([
	    		'base_uri' => getenv('FLUIG_URI') . ':' . getenv('FLUIG_PORT'),
	    		'handler' => $stack->getApiAuth()
	    	]);
	 
	    	$res = $client->get($endpoint, ['auth' => 'oauth']);
            return $response->parseResponse($res);

        }catch(Exception $e){
            return $e->getMessage();
        }

    }
}