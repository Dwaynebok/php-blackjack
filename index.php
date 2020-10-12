<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once 'Blackjack.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $blackJack  = new Blackjack();
  $blackJack->blackjack();
  exit();
}
?>
<form action="<? echo $_SERVER['']?>" method="post" id="searchMealForm">
  <input type="search" size="35" placeholder="What Food Are you looking for?" id="mealName" class="meal"/>
  <input type="search" placeholder="City Area" id="mealLocation" class="meal">
  <input type="submit" value="Satisfy Me" id="findMeal" />
</form>

