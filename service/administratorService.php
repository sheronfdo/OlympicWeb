<?php
require_once('model/adminstrator.php');
require_once('database/dbconnect.php');
class AdministratorService extends Administrator
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

    public function insertAdministrator()
    {
        $query = "INSERT INTO `administrator`(`userName`, `email`, `password`) VALUES ('" .  $this->test_input($this->getUsername()) . "','" .  $this->test_input($this->getEmail()) . "','" .  $this->test_input($this->getPassword()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateAdministrator()
    {
        $query = "UPDATE `administrator` SET `userName`='" . $this->test_input($this->getUsername()) . "',`email`='" . $this->test_input($this->getEmail()) . "',`password`='" . $this->test_input($this->getPassword()) . "' WHERE `id`= '" . $this->test_input($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteAdministrator()
    {
        $query = "UPDATE `administrator` SET `status`=0 WHERE `id`= '" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
