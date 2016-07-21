<?php

// complete all "todo"s to build a blackjack game
// create an array for suits
// create an array for cards
// $cards = [
//   'King' => array('name' => 'King', 'value' => 10),
//   'Queen' => array('name' => 'Queen', 'value' => 10),
//   'Jack' => array('name' => 'Jack', 'value' => 10),
//   '10' => array('name' => 'Ten', 'value' => 10),
//   '9' => array('name' => 'Nine', 'value' => 9),
//   '8' => array('name' => 'Eight', 'value' => 8),
//   '7' => array('name' => 'Seven', 'value' => 7),
//   '6' => array('name' => 'Six', 'value' => 6),
//   '5' => array('name' => 'Five', 'value' => 5),
//   '4' => array('name' => 'Four', 'value' => 4),
//   '3' => array('name' => 'Three', 'value' => 3),
//   '2' => array('name' => 'Two', 'value' => 2),
//   'Ace' => array('name' => 'Ace', 'value' => 11)
// ];

// $suits = ['Clubs'=> $cards, 'Hearts' => $cards, 'Spades' => $cards, 'Diamond' => $cards];
// print_r($suits);
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
// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
  $checkCardValue = substr($card, 0, 1);
    if ($checkCardValue == "A") {
    return TRUE;
  } else {
    return FALSE;
    }
}
  // todo
// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
  // todo
  $checkCardValue = substr($card, 0, 1);
  if($checkCardValue == "A"){
    $cardValue = 11;
  } elseif (is_numeric($checkCardValue)) {
    $cardValue = intval($checkCardValue);
  } else{
    $cardValue = 10;
  }
  return $cardValue;
}
// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
  // $hand = [];
  foreach($hand as $card){
    $cardValue = getCardValue($card);
    array_push($hand, $cardValue);
    $catchAce = cardIsAce($card);
      // not sure what to do here
  }
  $handTotal = array_sum($hand);
  if($catchAce == true && $handTotal > 21){
    $handTotal -= 10;
  }
  return $handTotal;
  // todo
}
// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) {
  // todo
}
// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
  // todo
}
// build the deck of cards
$deck = buildDeck($suits, $cards);
// initialize a dealer and player hand
$dealer = [];
$player = [];
// dealer and player each draw two cards
// todo
// echo the dealer hand, only showing the first card
// todo
// echo the player hand
// todo
// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// while ( todo ) {
//   // todo make live again
// }
// show the dealer's hand (all cards)
// todo
// todo (all comments below)
// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins
// Status API Training Shop Blog About (make live)
