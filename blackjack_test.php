<?php

$suits = ['H', 'C', 'S', 'D' ];
$cards = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];


function buildDeck($suits, $cards) {
  $deck = [];
  foreach ($suits as $suit) {
    foreach ($cards as $card) {
      array_push($deck, "$card $suit");
    }
  }
shuffle($deck);
return $deck;
}
$deck = buildDeck($suits, $cards);
print_r($deck);