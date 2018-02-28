<?php

namespace AlissonPadua\PhpFluig\Model;

class Dataset
{
    public $name;
    public $listFields =null;
    public $listConstraints = null;
    public $order = null;

    public function setName(String $n){
        $this->name = $n;
    }

    public function addField($field){
        array_push($this->listFields, $field);
    }

    public function addConstraint(Constraint $constraint){
        array_push($this->listConstraints, $constraint);
    }

    public function addOrder(String $order){
        array_push($this->order, $order);
    }
}