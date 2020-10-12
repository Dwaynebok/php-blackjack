<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
class Blackjack
{
    private $player;
    private $dealer;
    private $deck;

    /**
     * @return mixed
     */
    public function getDealer()
    {
        return $this->dealer;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    public function __construct() //  Instantiate the Player class twice, insert it into the player property and a dealer property.
    {
      $player = new Player();
      $dealer = new Player();
      $deck = new Deck(); //Create a new deck object
      $deck->shuffle(); //Shuffle the cards with shuffle method on deck.
    }



}