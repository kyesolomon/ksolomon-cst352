<?php
include '../includes/dbConnection.php';
$dbConn = getConnection("project");

echo "Report 1: Towns with population between 50K and 80K: <br/ >";
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
