<?php

namespace App\Classes;

class Students extends Person{
    public int $studentid;


    public function __construct(string $name,int $age, int $studentid){
        parent::__construct($name,$age);
        $this->studentid = $studentid;
    }


    public function getAge(){
        return [$this->$age, $this->$studentid];
    }
}