<!DOCTYPE>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="div1">
Gespeicherte Nachrichten
</div>

<div class="div2">

</div>

<div class="div3">
<form name="loginform">
<?php
$Benutzer = $POST['bName'];
$Password = $POST['bPassword'];

include("zugriff.inc");

$connection = mysqli_connect($host, $user, $password, $database) or die
("Die Verbindung konnte nicht hergestellt werden");

$query = "select * from logindaten";

$result = mysqli_query($connection, $query) or die ("Abfrage fehlengeschlangen!");


while($ds = mysqli_fetct($result))
{
	$DBName = $ds -> DBBenutzer;
	$DBPassword = $ds -> DBPassword;
}

if($Benutzer = $DBBenutzer and $Password = $DBPassword){
	header("location = gnanzeigen.php");
}
else{
	echo "Benutzername oder Password falsch!";
}

?>
</form>
</div>
</body>
</html>