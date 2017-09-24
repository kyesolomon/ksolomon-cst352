<html>
    <head>
        <title>Lab3: Ace Poker</title>
        <meta charset="utf-8" />
        <style>
            .ace{
                border:yellow 2px solid;
            }
        </style>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points!</h2>
        <?php
    $deck = range(1,41); // assigns numerical values for each card in the array $deck
    shuffle($deck);
    $totalPoints = 0;
    
function displayHand(){
    global $deck, $totalPoints;
    $handPoints=0;
    $handAces=0;
    for($i=0; $i<5; $i++){
        $lastCard = array_pop($deck);
        $cardValue = $lastCard % 13;
        $cardSuit;
        if($lastCard<=13){
            $cardSuit = "clubs";
        } else if($lastCard>13 && $lastCard<=26){
            $cardSuit = "diamonds";
        } else if($lastCard>26 && $lastCard<=39){
            $cardSuit = "hearts";
        } else {
            $cardSuit = "spades";
        }
        if($cardValue==0){
            $cardValue=13;
        }
        $handPoints = $handPoints + $cardValue;
        if($cardValue==1){
            echo "<img class='ace' src='cards/$cardSuit/$cardValue.png' alt='Ace' />";
            $handAces++;
        } else {
            echo "<img src='cards/$cardSuit/$cardValue.png' alt='Ace' />";
        }
        
    }
    echo " Points: " . $handPoints;
    echo " Aces: " . $handAces;
    $totalPoints = $totalPoints + $handPoints;
    return $handAces;
}
echo "<hr>";
$player1Aces = displayHand();
echo "<hr>";
$player2Aces = displayHand();
echo "<hr>";

function identifyWinner(){
    global $player1Aces, $player2Aces;
    if($player1Aces>$player2Aces){
        echo "Player 1";
    } else if ($player1Aces<$player2Aces){
        echo "Player 2";
    }else{
        echo "Nobody";
    }
}
?>
    <h2> <?=identifyWinner()?> wins
    <?=$totalPoints?>
    points!</h2>
    </body>
    <footer>
        <hr width="50%" />
        <h6>&copy;2017 Kye Solomon.</h6>
    </footer>
</html>