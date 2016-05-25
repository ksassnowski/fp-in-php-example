<?php

namespace Acme;

class Player
{
    /**
     * @var int
     */
    public $points = 0;

    /**
     * @var string
     */
    public $name;

    /**
     * Player constructor.
     *
     * @param string $name
     * @param int    $points
     */
    public function __construct($name, $points)
    {
        $this->name = $name;
        $this->points = $points;
    }
}
