<?php
require_once('model/sponsorContent.php');
require_once('database/dbconnect.php');
class SponsorContentService extends SponsorContent
{
    private $db;

    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertContent()
    {
        $query = "INSERT INTO `sponsoredcontent`(`description`, `srcLink`, `imageName`, `shownLocation`) VALUES ('" . $this->getDescription() . "','" . $this->getSourceLink() . "','" . $this->getImageName() . "','" . $this->getShownLocation() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateContent()
    {
        $query = "UPDATE `sponsoredcontent` SET `description`='" . $this->getDescription() . "',`srcLink`='" . $this->getSourceLink() . "',`imageName`='" . $this->getImageName() . "',`shownLocation`='" . $this->getShownLocation() . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteContent()
    {
        $query = "UPDATE `sponsoredcontent` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
