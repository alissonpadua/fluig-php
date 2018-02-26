<?php

namespace AlissonPadua\PhpFluig\Service;

use Symfony\Component\Dotenv\Dotenv;

trait HandlerDotenv
{
    private $env;

    public function parseDotenv(){
        $this->env = new Dotenv;
        $this->env->load(__DIR__. '/../../.env');
    }
}