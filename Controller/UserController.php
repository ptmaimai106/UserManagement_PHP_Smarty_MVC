<?php

include_once ("../Model/UserModal.php");
include_once ("../Model/Users.php");
include_once ("../smarty/mySmarty.php");

require_once('../smarty/Smarty.class.php');



class UserController{

    public $users;
    public $mySmarty;

    public function __construct(){
        $this->users = new Users();
        $this->mySmarty = new mySmarty();
    }
    public function invoke(){
        $userData = $this->users->getUsers();
        $userList = array();

        if(is_object($userData)){
            while ($row = $userData->fetch_assoc()){
                $user = new User($row['id'], $row['name'], $row['email'], $row['phone'], $row['city']);
                array_push($userList, $user);
            }


            $this->mySmarty->assign('userList', $userList);
            $this->mySmarty->display('../View/Users.tpl');
        }


    }

    public function updateUser(){
        if(count($_POST) >0){
            $id = $_POST['$id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $type = $_POST['type'];

            if($type == 1){
                $this->users->addUser($name, $email, $phone, $city);
            }
            else if($type == 2){
                $this->users->editUser($id, $name, $email,$phone,$city);
            }
            else if($type == 3){
                $this->users->deleteUser($id);
            }
            else if($type == 4){
                $this->users->deleteUsers($id);
            }
        }
    }


}

$UserC = new UserController();
$UserC->invoke();
