<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//created a class for player and a list of functions for the player as well
class player
{
    private array $cards = [];
    private bool $lost = false;

    private function hit(){

    }

    private function surrender(){

    }

    private function getScore(){

    }
    private function hasLost(){

    }

    function __construct($deck)
    {
        $deck->drawCard();
        $deck->drawCard();

    }


}
