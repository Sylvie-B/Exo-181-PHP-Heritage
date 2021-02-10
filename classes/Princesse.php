<?php


class Princesse extends Personnage
{
    private $saved;

    public function __construct()
    {
       parent::__construct();
        $this->x = 450;
        $this->y = 450;

    }

    /**
     * @param mixed $saved
     */
    public function setSaved($saved): void
    {
        $this->saved = 0;
    }

}
