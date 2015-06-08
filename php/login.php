<?php 
	session_start();
	include 'dbconnect.php';

	$username = htmlspecialchars($_POST["user"]); 
	$passwort = htmlspecialchars($_POST["pass"]); 
	//md5

	$abfrage = "SELECT EMailAdresse, Passwort FROM Kunde WHERE EMailAdresse LIKE '$username' LIMIT 1";
	$ergebnis = mysql_query($abfrage); 
	$row = mysql_fetch_object($ergebnis); 

	if($row->EMailAdresse == $username & $row->Passwort == $passwort)
	    { 
		    $_SESSION["username"] = $username;
		    header('Location: http://sibe.mysmartcart.de/');
	    } 
	else 
	    { 
		    echo "Benutzername und/oder Passwort waren falsch."; 
	    } 
?>