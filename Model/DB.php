<?php

class DB{
    private $conn;
    private static $instance;

    public $servername;
    public $username;
    public $password;
    public $dbname;

    private function __construct(){
//        $this->servername = 'mysql-server';
        $this->servername = 'localhost';
        $this->username = 'root';
//        $this->password = 'secret';
        $this->password = '';
        $this->dbname = 'app1';


       $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($this->conn->connect_error){
            die("Connect failed: " .$this->conn->connect_error);
        }
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function query($query){
        return $this->conn->query($query);
        //return mysqli_query($this->conn, $query);
    }

    public function  getConn(){
        return $this->conn;
    }

    public function closeConn(){
        $this->conn->close();
    }

    public function openConn(){
        if($this->conn == null){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if($this->conn->connect_error){
                die("Connect failed: " .$this->conn->connect_error);
            }
        }
    }
}