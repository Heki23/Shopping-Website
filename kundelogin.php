<?php
session_start();
$Benutzer = $_POST['benutzer'];
$Passwort = $_POST['passwort'];

IF ($Passwort ==""){
	ECHO("Geben Sie ein Passwort ein!");
}

ELSE{
include("zugriff.inc");
$connection=mysqli_connect($host, $user, $password, $database)
or die ("Keine Verbindung zum Server möglich");

$query="SELECT Passwort from logindaten where Name ='$Benutzer'";

 $result = mysqli_query($connection, $query)
or die("Abfrage fehlgeschlagen");
$cPasswort="";
 WHILE($ds = mysqli_fetch_object($result)){
	$cPasswort = $ds-> Passwort;
}

IF($Passwort==$cPasswort){
	$_SESSION["sBenutzer"]=$Benutzer;
	header("Location: ./produkt.html");
}
ELSE{
	ECHO("Der Benutzername oder das Passwort ist falsch!");
}

mysqli_close($connection);
}
?>