<?php
require_once('model/news.php');
require_once('database/dbconnect.php');
class NewsService extends News
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

    public function insertNews()
    {
        $query = "INSERT INTO `news`(`title`, `discription`, `imageName`) VALUES ('" . $this->test_input($this->getTitle()) . "','" . $this->test_input($this->getDescription()) . "','" . $this->test_input($this->getImageName()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateNews()
    {
        $query = "UPDATE `news` SET `title`='" . $this->test_input($this->getTitle()) . "',`discription`='" . $this->test_input($this->getDescription()) . "',`imageName`='" . $this->test_input($this->getImageName()) . "' WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteNews()
    {
        $query = "UPDATE `news` SET `status`=0 WHERE `id`='" . $this->getId() . "'";
        $this->db->insertIntoDb($query);
    }
}
