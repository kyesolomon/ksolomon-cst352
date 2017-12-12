<html>
	<head>
        <title>Sexual Misconduct DB</title>
        <h1><a href="index.php">Sexual Misconduct DB</a></h1>
    </head>
<!-- start of form -->
<form name = "formFilter" method = "post" action = "search.php"></form>
            <form>
            	<input type="radio" name="colName" value="age" id="filter_by_age">Filter by Age Range:
                <select name="age">
                	<option value="" checked>Select...</option>
  					<option value="18-34">18-34</option>
  					<option value="35-49">35-49</option>
					<option value="50-69">50-69</option>
					<option value="70+">70+</option><br>
				</select><br>
            
            	<input type="radio" name="colName" value="penalty" id="filter_by_age">Filter by penalty:
            	<select name="penalty">
            		<option value="" checked>Select...</option>
	                <option value="none">None<br>
	  				<option value="fired">Fired<br>
	  				<option value="re-signed">Re-signed<br>
  				</select>
  				<br><br>
  				<input type="submit" value="Search">
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

$sql = "SELECT bio.fname, bio.lName, bio.age, bio.picture
		FROM  bio, common
		WHERE bio.nameId = common.nameId AND professionId = 1
		ORDER BY fName ASC";
		
print_table($conn, $sql);

?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
 </html>