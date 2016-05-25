<?php

namespace Acme;

class Game
{
    /**
     * Determines the winner and echoes it.
     *
     * @param Player $player1
     * @param Player $player2
     */
    public function printWinner(Player $player1, Player $player2)
    {
        $winner = $player1->points > $player2->points ? $player1 : $player2;

        echo "And the winner is {$winner->name}";
    }
}
