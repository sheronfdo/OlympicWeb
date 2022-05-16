<?php
require_once('model/adminstrator.php');
require_once('database/dbconnect.php');
class AdministratorService extends Administrator
{
    private $db;

    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertAdministrator()
    {
        $query = "INSERT INTO `administrator`(`userName`, `email`, `password`) VALUES ('" . $this->getUsername() . "','" . $this->getEmail() . "','" . $this->getPassword() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateAdministrator()
    {
        $query = "UPDATE `administrator` SET `userName`='" . $this->getUsername() . "',`email`='" . $this->getEmail() . "',`password`='" . $this->getPassword() . "' WHERE `id`= '" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteAdministrator()
    {
        $query = "UPDATE `administrator` SET `status`=0 WHERE `id`= '" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
