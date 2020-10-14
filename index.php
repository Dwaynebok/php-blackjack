<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Blackjack.php';
require 'Card.php';
require 'Player.php';
require 'Suit.php';
require 'Deck.php';


session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}


$blackJack = new Blackjack();
$deck = $blackJack->getDeck();
$player = $blackJack->getPlayer();

//$player = $blackJack->getPlayer();
//$dealer = $blackJack->getDealer();

if (!isset($_SESSION["black"])) {
    $_SESSION["black"] = $blackJack;
} else {
    $blackJack = $_SESSION['black'];
}

if (!isset($_POST['action'])) {
    echo "game has started<br/>";

} elseif ($_POST['action'] == 'hit') {
    $player = $blackJack->getPlayer();
    $player->hit($deck);
 echo "player has hit<br/>";



} elseif ($_POST['action'] == 'stand') {
   echo "player stand<br/>";

}elseif ($_POST['action'] == 'surrender') {
    $player->hasLost();

}

foreach($player->getCard() AS $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
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
    <input type="submit" class="btn btn-danger text-center" value="hit" name="action">
    <input type="submit" class="btn btn-danger text-center" value="stand" name="action">
    <input type="submit" class="btn btn-danger text-center" value="surrender" name="action">
</form>


</body>
</html>

<?php whatIsHappening()?>;