<?php

include_once  "DB.php";

class Users{
    protected $db;
    public function __construct(){
        $this->db = DB::getInstance();
    }

    public function getUsers()
    {
        $query = "SELECT * FROM crud";
        $result = $this->db->query($query);
        return $result;
    }

    // add, update, delete, getUser


}