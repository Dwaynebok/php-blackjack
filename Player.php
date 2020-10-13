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
    public $score = 0;


    public function hit(){

    }

    public function surrender(){
        $this->lost = true;
        echo "you lost";

    }

    public function getScore()
    {
    }
    public function hasLost(){
        $this->lost = true;
        echo "you lost";

    }

    function __construct(Deck $deck)
    {
        $this->cards = [];
        array_push($this->cards, $deck->drawCard());
        array_push($this->cards, $deck->drawCard());

    }


}
