<html>
<head>
    <link href="mstyle.css" type="text/css" rel="stylesheet">
   <meta http-equiv="refresh" content="5; URL= Mitarbeiterlogin.html">
    <title>Mitarbeiter Login</title>
    <script src="mycode.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        
      
        <div class="box box3">
 
<?php
session_start();
$Benutzer = $_POST['benutzer'];
$Passwort = $_POST['passwort'];

IF ($Passwort ==""){
	ECHO("Geben Sie ein Passwort ein!");
}

ELSE{
include("../zugriff.inc");
$connection=mysqli_connect($host, $user, $password, $database)
or die ("Keine Verbindung zum Server möglich");

$query="SELECT Passwort from mitarbeiterlogin where Name ='$Benutzer'";

 $result = mysqli_query($connection, $query)
or die("Abfrage fehlgeschlagen");

$cPasswort="";
 WHILE($ds = mysqli_fetch_object($result)){
	$cPasswort = $ds-> Passwort;
}

IF($Passwort==$cPasswort){
	$_SESSION["sBenutzer"]=$Benutzer;
	header("Location: ./nachricht.html");
}
ELSE{
	ECHO("<b>Falsche Zugangsdaten</b><br>
Benutzername oder Passwort ungültig ");
}

mysqli_close($connection);
}
?>
        </div>
		
    </div>
</body>
</html>