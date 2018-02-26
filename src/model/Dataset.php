<?php

namespace AlissonPadua\PhpFluig\Model;

class Dataset
{
    private $name;
    private $listFields = array();
    private $listConstraints = array();
    private $order = array();

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

    public function getListConstraints(){
        return $this->listConstraints;
    }
}