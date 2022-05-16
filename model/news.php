<?php
class News
{
    private $id;
    private $title;
    private $description;
    private $imageName;

    /**
     * @param $id
     * @param $title
     * @param $description
     * @param $imageName
     */
    public function __constructWithId($id, $title, $description, $imageName)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->imageName = $imageName;
    }

    /**
     * @param $title
     * @param $description
     * @param $imageName
     */
    public function __constructWithoutId($title, $description, $imageName)
    {
        $this->title = $title;
        $this->description = $description;
        $this->imageName = $imageName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param mixed $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }
}
