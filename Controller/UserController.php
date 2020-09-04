<?php

include_once ("../Model/UserModal.php");
include_once ("../Model/Users.php");

class UserController{
    public function invoke(){
        $users = new Users();
        $userData = $users->getUsers();
        $userList = array();

        if(is_object($userData)){
            while ($row = $userData->fetch_assoc()){
                $user = new User($row['id'], $row['name'], $row['email'], $row['phone'], $row['city']);
                array_push($userList, $user);
            }
        }

        include_once ("../View/Users.php");

    }
}

$UserC = new UserController();
$UserC->invoke();
