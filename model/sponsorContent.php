<?php
class SponsorContent
{
    private $id;
    private $description;
    private $sourceLink;
    private $imageName;
    private $shownLocation;

    /**
     * @param $id
     * @param $description
     * @param $sourceLink
     * @param $imageName
     * @param $shownLocation
     */
    public function __constructWithId($id, $description, $sourceLink, $imageName, $shownLocation)
    {
        $this->id = $id;
        $this->description = $description;
        $this->sourceLink = $sourceLink;
        $this->imageName = $imageName;
        $this->shownLocation = $shownLocation;
    }

    /**
     * @param $description
     * @param $sourceLink
     * @param $imageName
     * @param $shownLocation
     */
    public function __constructWithoutId($description, $sourceLink, $imageName, $shownLocation)
    {
        $this->description = $description;
        $this->sourceLink = $sourceLink;
        $this->imageName = $imageName;
        $this->shownLocation = $shownLocation;
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
    public function getSourceLink()
    {
        return $this->sourceLink;
    }

    /**
     * @param mixed $sourceLink
     */
    public function setSourceLink($sourceLink)
    {
        $this->sourceLink = $sourceLink;
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
    public function getShownLocation()
    {
        return $this->shownLocation;
    }

    /**
     * @param mixed $shownLocation
     */
    public function setShownLocation($shownLocation)
    {
        $this->shownLocation = $shownLocation;
    }
}
