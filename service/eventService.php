<?php
require_once('model/event.php');
require_once('database/dbconnect.php');
class EventService extends Event
{
    private $db;

    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertNews()
    {
        $query = "INSERT INTO `event`(`overview`, `imageName`, `date`, `time`) VALUES ('" . $this->getOverview() . "','" . $this->getImageName() . "','" . $this->getdate() . "','" . $this->getTime() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateNews()
    {
        $query = "UPDATE `event` SET `overview`='" . $this->getOverview() . "',`imageName`='" . $this->getImageName() . "',`date`='" . $this->getDate() . "',`time`='" . $this->getTime() . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteNews()
    {
        $query = "UPDATE `event` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
