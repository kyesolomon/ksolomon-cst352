<?php
    function displayHouse($house){
        $sort = rand(0,3);
        switch($house){
        case 0: $sort= "gryffindor";
            break;
        case 1: $sort="hufflepuff";
            break;
        case 2: $sort="ravenclaw";
            break;
        case 3: $sort="slytherin";
            break;
        }
        echo "<img src='img/$sort.jpg' alt='$sort' title='". ucfirst($sort) ."' width='500'>";
        echo "<h2>Welcome to $sort!</h2>";
    }
    function displayMembers(){
        $sort = rand(0,3);
        $classmates = array("Harry Potter ", "Hermione Granger ", "Ron Weasley ", "Voldemort ");
        print_r(array_unique($classmates));
    }
    function play(){
        ${"house" . $i } = rand(0,3);
        displayHouse(${"house". $i}, $i);
        echo "Your housemates are $classmates";
        for($i=0; $i<4; $i++){
            displayMembers(${"classmates". $i}, $i);
        }
    }
?>