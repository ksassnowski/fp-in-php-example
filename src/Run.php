<?php

require __DIR__.'/../vendor/autoload.php';

use Acme\Player;
use Acme\Game;

$player1 = new Player('Kai', 10);
$player2 = new Player('Philip', 25);

(new Game())->printWinner($player1, $player2);
