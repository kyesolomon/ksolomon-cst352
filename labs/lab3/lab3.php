<?php
    $deck = range(1,52); // assigns numerical values for each card in the array $deck
    shuffle($deck);
    print_r($deck); // prints the cards
    
function displayHand(){
    global $deck;
    for($i=0; $i<5; $i++){
        $lastCard = array_pop($deck);
        $cardValue = $lastCard % 13;
        $cardSuit;
        if($cardValue<=13){
            $cardSuit = "clubs";
        } else if($cardValue>13 && $cardValue<=26){
            $cardSuit = "diamonds";
        } else if($cardValue>26 && $cardValue<=39){
            $cardSuit = "heart";
        } else {
            $cardSuit = "spades";
        }
        if($cardValue==0){
            $cardValue=13;
        }
        echo $lastCard % 13 ." ";
        echo "<img src='cards/$cardSuit/$cardValue.png' alt='Ace' />";
    }
}
echo "<hr>";
displayHand();
echo "<hr>";
displayHand();
echo "<hr>";

function displayRandomCard(){
    $suits=array("clubs", "diamonds", "hearts", "spades");
    echo "<img src='cards/".$suits[rand(0,3)]."/".rand(1,13).".png' alt='Ace' />";
}
for($i=0; $i<4; $i++){
    displayRandomCard();
}
?>
<html>
    <head>
        <title>Lab3: Ace Poker</title>
        <meta charset="utf-8" />
        <header>
            <h1>Ace Poker</h1>
            <h2>Player with more aces wins all points!</h2>
        </header>
        <style>@import url("lab3.css");</style>
    </head>
    <body>
        
    </body>
    <footer>
        <h6>&copy;2017 Kye Solomon.</h6>
    </footer>
</html>