<!DOCTYPE html>
<html>
<head>
    <link href="../style.css" type="text/css" rel="stylesheet">
    <meta http-equiv="refresh" content="5; URL=nachricht.html">
    <title>Nachrichten abschicken</title>
    <script src="mycode.js" type="text/javascript"></script>
</head>
<body>
<div class="box box3">
            <h1>Ihre Nachricht wurde gesendet</h1>
        </div>
    <div class="container">
        
      
        <div class="box box3">
            <?php
            session_start();
            $Absender = $_SESSION['sBenutzer'];
            $Empfaenger = $_POST['nEmpfanger'];
            $Nachricht = $_POST['nNachricht'];

            include("../zugriff.inc");
            $connection = mysqli_connect($host, $user, $password, $database) or die("Verbindung fehlgeschlagen");
            
                $empfaengerprufen = "select name from mitarbeiterlogin where name='$Empfaenger'";
                $resultpr = mysqli_query($connection, $empfaengerprufen) or die("Abfrage fehlgeschlagen");
                $DBNutzer = "";
                while ($ds = mysqli_fetch_object($resultpr)) {
                    $DBNutzer = $ds->name;
                }

                if ($DBNutzer != "") {
                    $query = "INSERT INTO dbnachrichten (Absender, Empfaeger, Nachricht) VALUES ('" . $Absender . "', '" . $Empfaenger . "', '" . $Nachricht . "')";
                    $result = mysqli_query($connection, $query) or die("Eintragen fehlgeschlagen");
                    echo "<tabel> 
					   <tr>
                         <td><b>Absender:</b></td><td> $Absender</td><br>
					   </tr>
					   <tr>
                         <td><b>Empf&auml;nger:</b></td><td> $Empfaenger</td><br>
                       </tr>
					   <tr>
					     <td><b>Nachricht:</b></td><td> <p>$Nachricht</p></td>
                       </tr>
					 </tabel>
					 ";
                } else {
                    echo "  Empfaeger nicht gefunden!<br><br>";
                }
                echo "<br>Sie werden in 5 Sekunden weitergeleitet";
                mysqli_close($connection);
            ?>
        </div>
		
    </div>
</body>
</html>
