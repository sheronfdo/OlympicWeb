<?php
require_once('model/broadcast.php');
require_once('database/dbconnect.php');
class BroadcastService extends Broadcast
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

    public function insertBroadcast()
    {
        $query = "INSERT INTO `broadcast`(`Event_id`, `videoSrc`) VALUES ('" . $this->test_input($this->getEventId()) . "','" . $this->test_input($this->getSrcLink()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateBroadcast()
    {
        $query = "UPDATE `broadcast` SET `Event_id`='" . $this->getEventId() . "',`videoSrc`='" . $this->test_input($this->getSrcLink()) . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteBroadcast()
    {
        $query = "UPDATE `broadcast` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
