<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['black'])) {
    $_SESSION['black'] = "";
}

require 'Blackjack.php';
require 'Card.php';
require 'Player.php';
require 'Suit.php';
require 'Deck.php';

$blackJack  = new Blackjack();
$player = $blackJack->getPlayer();
$dealer = $blackJack->getDealer();

if (isset($_SESSION["black"])){
    $_SESSION["Blackjack"] = $blackJack;
}

if(isset($_POST['hit'])){
    $player = $blackJack->getPlayer();
    var_dump($player->hit());

    if (isset($_POST['surrender'])){
        $player = $blackJack->getPlayer();
        var_dump($player->hit());
    }

    if (isset($_POST['']))


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="index.php" method="POST" class="mt-5">
    <input type="submit" class="btn btn-danger text-center" value="hit" name="hit">
    <input type="submit" class="btn btn-danger text-center" value="stand" name="stand">
    <input type="submit" class="btn btn-danger text-center" value="surrender" name="surrender">
</form>




</body>
</html>

