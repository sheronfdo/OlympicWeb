<?php
require_once('model/user.php');
require_once('database/dbconnect.php');
class UserService extends User
{
    private static $db = new dbConnect();
    public function insertUser(){
        $query = "INSERT INTO `user`(`userName`, `email`, `password`) VALUES ("+$this->getUsername()+","+$this->getEmail()+","+$this->getPassword()+")";
        self::$db->insertIntoDb($query);
    }
}
