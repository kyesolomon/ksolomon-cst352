<!DOCTYPE html>
<html>
    <head>
        <title>Admin Log In</title>
    </head>
    <body>
    <form action = "index.php" method="post" value="adminLogout">
        <input type="submit" value="Logout"/>
    </form>
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

$conn->close();
?>
<h1>Insert additional data into DB</h1><br>
<!-- start of Insert data form -->
<form name = "formInsert" method = "post" action = "insert.php">
    <fieldset>
        First name:
        <input name = "fNametext" type="text" size = "40"><br>
        Last name:
        <input name = "lNametext" type="text" size = "40"><br>
        Age:
        <input name = "ageInt" type="text" size = "10"><br>
        Picture:
        <input name = "pictext" type="text" size = "200"><br>
        <input type="submit" value="Submit">
    </fieldset>
</form> 
<!-- end of Insert form -->

<h1>Update age of data in DB</h1><br>
<!-- start of Update form  -->
<form name = "formUpdate" method = "post" action = "update.php">
    <fieldset>
        First name:
        <input name = "fNametext" type="text" size = "40"><br>
        Last name:
        <input name = "lNametext" type="text" size = "40"><br>
        Age:
        <input name = "ageInt" type="text" size = "10"><br>
        <input type="submit" value="Submit">
    </fieldset>
</form> 
<!-- end of Update form -->

<h1>Delete a name in DB</h1><br>
<!-- start of Delete form  -->
<form name = "formDelete" method = "post" action = "delete.php">
    <fieldset>
        Enter the first name of entry you want deleted from DB:
        <input name = "delfName" type="text" size = "40"><br>
        Enter the last name of entry you want deleted from DB:
        <input name = "dellName" type="text" size = "40"><br>
        <input type="submit" value="Submit">
    </fieldset>
</form> 
<!-- end of Delete form -->
    </body>
</html>