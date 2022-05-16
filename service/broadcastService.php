<?php
require_once('model/broadcast.php');
require_once('database/dbconnect.php');
class BroadcastService extends Broadcast
{
    private $db;

    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertBroadcast()
    {
        $query = "INSERT INTO `broadcast`(`Event_id`, `videoSrc`) VALUES ('" . $this->getEventId() . "','" . $this->getSrcLink() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateBroadcast()
    {
        $query = "UPDATE `broadcast` SET `Event_id`='" . $this->getEventId() . "',`videoSrc`='" . $this->getSrcLink() . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteBroadcast()
    {
        $query = "UPDATE `broadcast` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
