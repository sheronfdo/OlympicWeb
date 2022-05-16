<?php
require_once('model/news.php');
require_once('database/dbconnect.php');
class NewsService extends News
{
    private $db;

    public function __construct()
    {
        $this->db = new dbConnect();
    }

    public function insertNews()
    {
        $query = "INSERT INTO `news`(`title`, `discription`, `imageName`) VALUES ('" . $this->getTitle() . "','" . $this->getDescription() . "','" . $this->getImageName() . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateNews()
    {
        $query = "UPDATE `news` SET `title`='" . $this->getTitle() . "',`discription`='" . $this->getDescription() . "',`imageName`='" . $this->getImageName() . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteNews()
    {
        $query = "UPDATE `news` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
