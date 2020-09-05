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

    public function addUser($name, $email, $phone, $city){
        $queryAdd = "INSERT INTO `crud`( `name`, `email`,`phone`,`city`)VALUES ('$name','$email','$phone','$city')";
        $this->db->query($queryAdd);
        //return

    }

    public function editUser($id,$name, $email, $phone, $city){
        $queryEdit =  "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city' WHERE id=$id";
        $this->db->query($queryEdit);
        // return
    }

    public function deleteUser($id){
        $queryDelete = "DELETE FROM `crud` WHERE id=$id ";
        $this->db->query($queryDelete);
        // return
    }

    public function deleteUsers($ids){
        $queryDeletes = "DELETE FROM crud WHERE id in ($ids)";
        $this->db->query($queryDeletes);
        //return
    }


}