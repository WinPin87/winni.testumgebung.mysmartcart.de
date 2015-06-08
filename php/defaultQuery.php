<?php 
	$data = $_POST['test'];
	include 'dbconnect.php';
	$abfrage = "SELECT EMailAdresse FROM Kunde WHERE EMailAdresse LIKE '$data%'";
	$ergebnis = mysql_query($abfrage); 
	while( $row = mysql_fetch_assoc($ergebnis)){
    	$array[] = $row;
	}	
	echo json_encode($array);
?>