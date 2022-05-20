<?php
require_once('model/sponsorContent.php');
require_once('database/dbconnect.php');
class SponsorContentService extends SponsorContent
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

    public function insertContent()
    {
        $query1 = "UPDATE sponsoredcontent set status='0'";
        $query = "INSERT INTO `sponsoredcontent`(`description`, `srcLink`, `imageName`, `shownLocation`) VALUES ('" . $this->test_input($this->getDescription()) . "','" . $this->test_input($this->getSourceLink()) . "','" . $this->test_input($this->getImageName()) . "','" . $this->test_input($this->getShownLocation()) . "')";
        $this->db->insertIntoDb($query1);
        $this->db->insertIntoDb($query);
    }

    public function updateContent()
    {
        $query = "UPDATE `sponsoredcontent` SET `description`='" . $this->test_input($this->getDescription()) . "',`srcLink`='" . $this->test_input($this->getSourceLink()) . "',`imageName`='" . $this->test_input($this->getImageName()) . "',`shownLocation`='" . $this->test_input($this->getShownLocation()) . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteContent()
    {
        $query = "UPDATE `sponsoredcontent` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
