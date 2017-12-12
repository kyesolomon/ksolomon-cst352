<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname= "project";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlCrt = "INSERT INTO bio (fName, lName, age, picture) 
    VALUES ('$_POST[fNametext]', '$_POST[lNametext]', $_POST[ageInt], '$_POST[pictext]')";
    
    if(mysqli_query($conn, $sqlCrt)){
        echo "<a href='adminLogin.php'> Go back to the Admin Log In page</a>";
    } else {
        echo "Error entering data: " . mysqli_error($conn);
    }
    
    $conn->close();
?>