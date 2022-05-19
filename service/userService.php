<?php
require_once('model/user.php');
require_once('database/dbconnect.php');
class UserService extends User
{
    private $db;

    public function test_input($data)
    {
        $data1 = trim($data);
        $data2 = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }


    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertUser()
    {
        $query = "INSERT INTO `user`(`userName`, `email`, `password`) VALUES ('" . $this->test_input($this->getUsername()) . "','" . $this->test_input($this->getEmail()) . "','" . $this->test_input($this->getPassword()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateUser()
    {
        $query = "UPDATE `user` SET `userName`='" . $this->test_input($this->getUsername()) . "',`email`='" . $this->test_input($this->getEmail()) . "',`password`='" . $this->test_input($this->getPassword()) . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteUser()
    {
        $query = "UPDATE `user` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
