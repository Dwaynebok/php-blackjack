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



    public function hit(Deck $deck)
    {
        $nextCard = $deck->drawCard();
        array_push($this->cards, $nextCard);


    }

    public function surrender()
    {
        $this->lost = true;
        echo "You lost!<br/>";

    }

    public function getScore()
    {
        $score = 0;
        foreach ($this->cards as $value){
            $score += $value->getValue();

    }
        return $score;

    }

    public function hasLost()
    {
        $this->lost = true;
        echo "You lost!<br/>";

    }

    function __construct(Deck $deck)
    {

        array_push($this->cards, $deck->drawCard());
        array_push($this->cards, $deck->drawCard());

    }

    public function getCard()
    {
        return $this->cards;
    }

}