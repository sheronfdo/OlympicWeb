<?php
class Event
{
    private $id;
    private $overview;
    private $imageName;
    private $date;
    private $time;

    /**
     * @param $id
     * @param $overview
     * @param $imageName
     * @param $date
     * @param $time
     */
    public function __constructWithId($id, $overview, $imageName, $date, $time)
    {
        $this->id = $id;
        $this->overview = $overview;
        $this->imageName = $imageName;
        $this->date = $date;
        $this->time = $time;
    }


    /**
     * @param $overview
     * @param $imageName
     * @param $date
     * @param $time
     */
    public function __constructWithoutId($overview, $imageName, $date, $time)
    {
        $this->overview = $overview;
        $this->imageName = $imageName;
        $this->date = $date;
        $this->time = $time;
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
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param mixed $overview
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
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

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
}
