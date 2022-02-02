<?php
class Princesse extends Personnage
{
    private int $saved = 0;
    protected int $x = 450;
    protected int $y = 450;

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
     * @return int
     */
    public function getSaved()
    {
        return $this->saved;
    }

    /**
     * @param int $saved
     */
    public function setSaved($saved)
    {
        $this->saved = $saved;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
}