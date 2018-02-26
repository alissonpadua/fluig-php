<?php

namespace AlissonPadua\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Symfony\Component\Dotenv\Dotenv;

class OauthService
{
    private $stack = null;
    private $env;

    public function __constructor(){
        $this->parseDotenv();
    }

    public function getApiAuth(){
        try{
			$this->stack = HandlerStack::create();
	   		$middleware = new Oauth1([
	    		'consumer_key'    => getenv('FLUIG_CONSUMER_KEY'),
	    		'consumer_secret' => getenv('FLUIG_CONSUMER_SECRET'),
	    		'token'           => getenv('FLUIG_ACCESS_TOKEN'),
	    		'token_secret'    => getenv('FLUIG_TOKEN_SECRET')
	    	]);

	    	$this->stack->push($middleware);

		}catch(Exception $e){
			return $e->getMessage();
		}

		return $this->stack;
    }

    public function parseDotenv(){
        $this->env = new Dotenv;
        $this->env->load(__DIR__. '/../../.env');
    }
}