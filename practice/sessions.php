<?php

if(!isset($_SESSION['randomNumber'])){
    $_SESSION['randomNumber'] = rand(1,100);
}
$randomNumber = rand(1,100);
echo "Number to guess: $randomNumber";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h1>Guess a number from 1 to 100</h1>
        <form>
            Guess: <input type="text" name="guess" /><br />
            <input type="submit" name="submit" />
        </form>
    </body>
</html>