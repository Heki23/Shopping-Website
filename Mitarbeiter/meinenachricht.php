<!DOCTYPE html>
<html>
<head>
    <link href="mstyle.css" type="text/css" rel="stylesheet">
    <title>Meine Nachrichten</title>
    <script src="mycode.js" type="text/javascript"></script>
</head>
<body>
<div class="box">
            <h1>Meine Nachrichten</h1>
        </div>
    <div class="container">
        
      
        <div class="box box3 nachtrichtlesenbox">
            <?php
			  session_start();
            $Absender = $_SESSION['sBenutzer'];
           
            include("../zugriff.inc");
            $connection = mysqli_connect($host, $user, $password, $database) or die("Verbindung fehlgeschlagen");
           
                $empfaengerprufen = "select * from dbnachrichten where Absender = '$Absender' or Empfaeger = '$Absender'";
                $resultpr = mysqli_query($connection, $empfaengerprufen) or die("Abfrage fehlgeschlagen");
                $DBNutzer = "";
                while ($ds = mysqli_fetch_object($resultpr)) {
                    $DBAbsender = $ds->Absender;
					
					$DBEmpfaeger = $ds->Empfaeger;
					
					
					$DBNachricht = $ds->Nachricht;
					echo "
					  <tabel> 
					   <tr>
                         <td><b>Absender:</b></td><td> $DBAbsender</td><br>
					   </tr>
					   <tr>
                         <td><b>Empf&auml;nger:</b></td><td> $DBEmpfaeger </td><br>
                       </tr>
					   <tr>
					     <td><b>Nachricht:</b></td><td> <p>$DBNachricht</p></td>
                       </tr>
					 </tabel>
				       <hr style='width:100%' align='left' color='#D8D8D8' size='2'></hr>
					  ";
					
					
                }
                mysqli_close($connection);  
            ?>
			
        </div>
		 
    </div>
	<div class="loginoutbox">
               <h2><a href="../logout.php">Ausloggen</a></h2>
         </div>
</body>
</html>
