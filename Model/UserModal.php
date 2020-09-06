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

    public function getUser($id){
        $query = "SELECT * FROM crud WHERE id=$id";
        $resultUser = $this->db->query($query);
        return $resultUser;
    }

    public function addUser($name, $email, $phone, $city){
        $queryAdd = "INSERT INTO `crud`( `name`, `email`,`phone`,`city`)VALUES ('$name','$email','$phone','$city')";
        $result = $this->db->query($queryAdd);
        return $result;
    }

    public function editUser($id,$name, $email, $phone, $city){
        $queryEdit =  "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city' WHERE id=$id";
        $result = $this->db->query($queryEdit);
        return $result;
    }

    public function deleteUser($id){
        $queryDelete = "DELETE FROM `crud` WHERE id=$id ";
        $result = $this->db->query($queryDelete);
        return $result;
    }
}