<html>
	<head>
        <title>Sexual Misconduct DB</title>
        <h1><a href="index.php">Sexual Misconduct DB</a></h1>
    </head>
<!-- start of form -->

            <form id="filter_by_age">
            	<input type="radio" name="filter_by_age" value="age">Filter by Age Range:
                <select name="age">
                	<option value="" checked>Select...</option>
  					<option value="18-34">18-34</option>
  					<option value="35-49">35-49</option>
					<option value="50-69">50-69</option>
					<option value="70+">70+</option>
				</select>
            </form>
            	<input type="radio" name="filter_by_penalty" value="penalty">Filter by penalty:
            	<select name="penalty">
            		<option value="" checked>Select...</option>
	                <option value="none">None<br>
	  				<option value="fired">Fired<br>
	  				<option value="re-signed">Re-signed<br>
  				</select>
  				<br><br>
  				<input type="submit" value="Submit">
            </form><br><br>

<!-- end of form -->
<?php

function getDatabaseConnection()
{
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname= "project";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
}

function print_table($conn, $sql) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $name => $value) {
        echo $name . " ";
    }
    echo "<br/>";
    foreach ($rows as $row) {
        foreach($row as $value) {
            echo $value . " ";
        }
        echo "<br/>";
    }
    echo "<br/>";
}

$conn = getDatabaseConnection();

$sql = "SELECT bio.fname, bio.lName
		FROM  bio, common
		WHERE bio.nameId = common.nameId AND professionId = 3
		ORDER BY fName ASC";
		
print_table($conn, $sql);

?>
 </html>