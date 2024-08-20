<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
   <meta http-equiv="refresh" content="5; URL=./index.html">
    <title>Nachrichten abschicken</title>
    <script src="mycode.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        
      
        <div class="box box3">
  
<?php
   session_start();
   $Benutzer = $_POST['hBenutzer'];
   $Passwort = $_POST['hPasswort'];
   include("zugriff.inc");
   $connection=mysqli_connect($host, $user, $password, $database)
   or die ("Keine Verbindung zum Server möglich");
try{
   $query="insert into logindaten (Name, Passwort) values ('$Benutzer', '$Passwort')";
   
   $result = mysqli_query($connection, $query) or die("Abfrage fehlgeschlagen");
   echo "Sie haben sich erfolgreich registriert! Sie werden in 5 Sekunden weitergeleitet";
}
catch(Exception $e){
	echo "Benutzer existiert bereits! Bitte geben Sie einen anderen Benutzernamen ein";
}
mysqli_close($connection);

?>
        </div>
		
    </div>
</body>
</html>