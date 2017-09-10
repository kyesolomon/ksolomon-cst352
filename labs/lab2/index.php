<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
        
    <?php
    
    function displaySymbol($randomNumber){
    
    // $randomNumber = rand(0,2); // Generates random # from 0-5.
    
    if ($randomNumber==0) {
        $symbol = "seven";
    } else if ($randomNumber==1) {
        $symbol = "cherry";
    } else {
        $symbol = "lemon";
    }
    
    echo "<img src='img/$symbol.png' alt=\"$symbol\" title=\"$symbol\" width=\"70\" />";
    
    }
    
    function displayPoints(){ // displays # of pts player has won
        // check if the symbols are the same
        if($randomNumber1 = $randomNumber2 = $randomNumber3){
            echo "You won";
        } else {
            echo "Try again";
        }
        
    }
    
    $randomNumber1 = rand(0,2); // generates random # from 0-2
    displaySymbol($randomNumber1); // calls function displaySymbol while passing new var $randomNumber1
    
    $randomNumber2 = rand(0,2);
    displaySymbol($randomNumber2);
    
    $randomNumber3 = rand(0,2);
    displaySymbol($randomNumber3);
    
    echo "<br>";
    echo "The random values are: <br> ";
    echo $randomNumber1 . " " . $randomNumber2 . " " . $randomNumber3;
    
    displayPoints($randomNumber1, $randomNumber2, $randomNumber3);
    
    ?>

    </body>
</html>