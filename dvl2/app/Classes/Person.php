<?php

namespace App\Classes;

class Person{
    public string $name;
    private int $age;


    public function __construct(string $name,int $age){
        $this->name = $name;
        $this->age = $age;



        $this->log("A new person has been created: Name = {$this->name}, Age = {$this->age}");
    }

    public function getAge(){
        return $this->age;
    }

    public static function averageAge(){
        $asaki = 0;
        foreach ($xalxi as $people) {
            if($people instanceof Person){
                $asaki += $people->getAge();
            }
        }

        return $asaki / count($people);
    }
}