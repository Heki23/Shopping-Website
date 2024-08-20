<!DOCTYPE html>
<html>
<head>
    <link href="../style.css" type="text/css" rel="stylesheet">
    <title>Meine Bestellung</title>
    <script src="mycode.js" type="text/javascript"></script>
</head>
<body>
<div class="box">
            <h1>Meine Bestellung</h1>
        </div>
    <div class="container">
        
      
        <div class="box box3">
            <?php
			  session_start();
            $Benutzername = $_SESSION['sBenutzer'];
            $ProduktID = $_POST['ProduktID'];
			$Strasse = $_POST['kstr'];
			$OrtundPLZ = $_POST['kortundplz'];
			$Menge = $_POST['bestellmenge'];
			
            include("../zugriff.inc");
            $connection = mysqli_connect($host, $user, $password, $database) or die("Verbindung fehlgeschlagen");
			
           
                 // Jetzt können Sie die Produkt-ID in die INSERT-Abfrage einfügen
                 $bestellenquery = "INSERT INTO bestellung(Benutzername, Straße, OrtundPLZ, ProduktID, menge) VALUES ('$Benutzername','$Strasse','$OrtundPLZ','$ProduktID','$Menge')";
                 $bestellungresult = mysqli_query($connection, $bestellenquery) or die("Etwas ist schief gelaufen!");
				  // Query, um den Betreuer abzurufen
                 $produktBeteuerquery = "SELECT Betreuer FROM produkt WHERE ProduktID = $ProduktID";
                 $produktBeteuerResult = mysqli_query($connection, $produktBeteuerquery) or die("Etwas ist schief gelaufen!");

                 // Das Ergebnis der Abfrage lesen
                 $row = mysqli_fetch_assoc($produktBeteuerResult);
                 $produktBeteuer = $row['Betreuer'];
				 
				  $nachricht = "$Benutzername hat Produkt $ProduktID bestellt";
				  $nachrichtanbeteuerquery = "INSERT INTO dbnachrichten(Absender, Empfaeger, Nachricht) VALUES ('$Benutzername','$produktBeteuer','$nachricht')";
                 $bestellungresult = mysqli_query($connection, $nachrichtanbeteuerquery) or die("Etwas ist schief gelaufen!");
                 echo "Sie haben die Produkte erfolgreich bestellt!";
               mysqli_close($connection);  
            ?>
			
        </div>
		 
    </div>
	<div class="loginoutbox">
               <h2><a href="../logout.php">Ausloggen</a></h2>
         </div>
</body>
</html>
