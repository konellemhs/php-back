<?php
require 'dbc.php';

class User {

    private $pdo;
    public  $name;
    public  $phone;
    public  $email;

    public function __construct()
    {  
        $dbc = new DBC;
        $this->pdo = $dbc->getPDO();   
    }


    public function createUser(){

        $sql = "INSERT INTO users (name,phone,email) VALUES (:name, :phone, :email)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':phone', $this->phone);
        $stmt->bindValue(':email', $this->email);


       if ( $stmt->execute()) {
           return true;
       } else {
           return false;
       }

    }

    public static function deleteUser($id){

        $dbc = new DBC;
        $pdo = $dbc->getPDO();

        $sql = "DELETE FROM users WHERE id =  :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id , PDO::PARAM_INT);   

       if ( $stmt->execute()) {
           return true;
       } else {
           return false;
       }

    }
    public static function getAll(){

        $dbc = new DBC;
        $pdo = $dbc->getPDO();

        $sql ='SELECT * FROM users';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $i = 0;
        while ($row = $stmt->fetch()) {

            $array[$i] =$row;

            $i++;
        }

        return $array;
    }
}

