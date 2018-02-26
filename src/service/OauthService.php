<?php

namespace AlissonPadua\PhpFluig\Service;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use AlissonPadua\PhpFluig\Service\HandlerDotenv;

class OauthService
{
    private $stack = null;
    use HandlerDotenv;
    
    public function getApiAuth(){
        
        $this->parseDotenv();

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

}