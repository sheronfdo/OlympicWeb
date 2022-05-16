<?php
class Broadcast
{
    private $id;
    private $eventId;
    private $srcLink;

    /**
     * @param $id
     * @param $eventId
     * @param $srcLink
     */
    public function __constructWithId($id, $eventId, $srcLink)
    {
        $this->id = $id;
        $this->eventId = $eventId;
        $this->srcLink = $srcLink;
    }

    /**
     * @param $eventId
     * @param $srcLink
     */
    public function __constructWithoutId($eventId, $srcLink)
    {
        $this->eventId = $eventId;
        $this->srcLink = $srcLink;
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
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param mixed $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getSrcLink()
    {
        return $this->srcLink;
    }

    /**
     * @param mixed $srcLink
     */
    public function setSrcLink($srcLink)
    {
        $this->srcLink = $srcLink;
    }
}
