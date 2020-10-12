<?php


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

    public function __construct() // instantiate Instantiate the Player class twice, insert it into the player property and a dealer property.
    {
        $player = new Player();
        $dealer = new Player();
    }

}