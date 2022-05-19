<?php
require_once('model/event.php');
require_once('database/dbconnect.php');
class EventService extends Event
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

    public function insertEvent()
    {
        $query = "INSERT INTO `event`(`overview`, `imageName`, `date`, `time`) VALUES ('" . $this->test_input($this->getOverview()) . "','" . $this->test_input($this->getImageName()) . "','" . $this->test_input($this->getdate()) . "','" . $this->test_input($this->getTime()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateEvent()
    {
        $query = "UPDATE `event` SET `overview`='" . $this->test_input($this->getOverview()) . "',`imageName`='" . $this->test_input($this->getImageName()) . "',`date`='" . $this->test_input($this->getDate()) . "',`time`='" . $this->test_input($this->getTime()) . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteEvent()
    {
        $query = "UPDATE `event` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
