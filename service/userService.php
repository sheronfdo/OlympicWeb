<?php
require_once('model/user.php');
require_once('database/dbconnect.php');
class UserService extends User
{
    private $db;

    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertUser()
    {
        $query = "INSERT INTO `user`(`userName`, `email`, `password`) VALUES ('" . $this->getUsername() . "','" . $this->getEmail() . "','" . $this->getPassword() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateUser()
    {
        $query = "UPDATE `user` SET `userName`='" . $this->getUsername() . "',`email`='" . $this->getEmail() . "',`password`='" . $this->getPassword() . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteUser()
    {
        $query = "UPDATE `user` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
