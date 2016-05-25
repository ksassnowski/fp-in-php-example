<?php

namespace Acme;

class Game
{
    /**
     * @var Player
     */
    public $player1;

    /**
     * @var Player
     */
    public $player2;

    /**
     * Game constructor.
     *
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * Determines the winner and echoes it.
     *
     * @param Player $player1
     * @param Player $player2
     */
    public function printWinner()
    {
        $winner = $this->player1->points > $this->player2->points 
            ? $this->player1 
            : $this->player2;

        echo "And the winner is {$winner->name}";
    }
}
