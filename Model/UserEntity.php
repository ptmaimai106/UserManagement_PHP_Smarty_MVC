<?php

class User{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $city;

    public function __construct($id, $name, $email, $phone, $city){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone= $phone;
        $this->city= $city;
    }
}