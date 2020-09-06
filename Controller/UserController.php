<?php

include_once ("../Model/UserEntity.php");
include_once ("../Model/UserModal.php");
include_once ("../smarty/mySmarty.php");
require_once('../smarty/Smarty.class.php');



class UserController{

    public $users;
    public $mySmarty;
    public $userList;
    public $confirmDelete;


    public function __construct(){
        $this->users = new Users();
        $this->mySmarty = new mySmarty();
        $this->userList = array();
        $this->confirmDelete = false;
    }

    public function invoke(){
        $userData = $this->users->getUsers();
        if(is_object($userData)){
            while ($row = $userData->fetch_assoc()){
                $user = new User($row['id'], $row['name'], $row['email'], $row['phone'], $row['city']);
                array_push($this->userList, $user);
            }
            $this->mySmarty->assign('userList', $this->userList);
            $this->mySmarty->assign('confirmDelete', $this->confirmDelete);
            $this->mySmarty->display('Users.tpl');
        }
    }

    public function mvcHandler(){
        if(isset($_POST['addRecord'])){
            $this->addUser();
        }
        else if(isset($_POST['update-btn'])){
            $this->editUser();
        }
        else {
            $act = isset($_GET['act']) ? $_GET['act'] : null;

            switch($act){
                case 'edit':
                    $this->getUser();
                    break;
                case 'delete':
                    $this->deleteUser();
                    break;
                default:
                    $this->invoke();
            }
        }
    }

    public function addUser(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $result = $this->users->addUser($name, $email, $phone, $city);
        if($result){
            $this->invoke();
        }else echo "Add failed";
    }

    public function getUser(){
        $id = $_GET['id'];
        if(isset($id)){
            $userDetail = $this->users->getUser($id);
            if (is_object($userDetail)){
                $row = $userDetail->fetch_assoc();
                $userInfo = new User($row['id'], $row['name'], $row['email'], $row['phone'], $row['city']);
                $this->mySmarty->assign("userInfo", $userInfo);
                $this->mySmarty->display('editUser.tpl');
            }
        }
    }

    public function editUser(){
        if(isset($_POST['update-btn'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $result= $this->users->editUser($id, $name, $email, $phone, $city);
            if($result){
                $this->invoke();
            }
            else {
                echo "Edit failed";
            }
        }
    }

    public function deleteUser(){
        $id = $_GET['id'];
        if(isset($id)){
            $result = $this->users->deleteUser($id);
            if($result){
                $this->invoke();
            }else {
                echo "Delete failed";
            }
        }
    }
}

$UserC = new UserController();
$UserC->mvcHandler();
