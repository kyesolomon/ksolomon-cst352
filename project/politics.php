<?php
include '../includes/dbConnection.php';
$dbConn = getConnection("project");


$sql = "SELECT town_name, population
		FROM  mp_town 
		WHERE population
		BETWEEN 50000 
		AND 80000";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['town_name']  . "<br />";
}	 
?>
