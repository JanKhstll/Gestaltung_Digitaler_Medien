<?php 
include("constants.php");
//include("login.tpl");

$Username =  $_POST['Username'] ;
$Password =  $_POST['Password'] ;

   include("db.php");


  if (('' == $Username ) OR
            ('' == $Password )) 
            die('Bitte bef&uuml;llen Sie alle Felder.')      ;

    


$sql = 'SELECT
                KuNr
            FROM
                tblkunde
            WHERE
                KuEmail = ?';
                
    $stmt = $db->prepare($sql);
    if (!$stmt) die('Bitte bef&uuml;llen Sie alle Felder2.')      ;
    
    $stmt->bind_param('s', $Username);
    if (!$stmt->execute()) 
    die('Bitte bef&uuml;llen Sie alle Felder3.')      ;
    $stmt->bind_result($KuNr);
    if (!$stmt->fetch()) {
        die('Es wurde kein Benutzer mit den angegebenen Namen gefunden.');
    }
      $res = mysql_query("SELECT KuNr, KuEmail ,KuPasswort FROM tblkunde
                                   WHERE KuEmail =\"$Username\"");

$KuNr2 = mysql_result($res, 0, "KuNr");
$Email = mysql_result($res, 0, "KuEmail");
$Passw    = mysql_result($res, 0, "KuPasswort");
    
    if ($Password == $Passw )
    {
    $stmt->close();
    setcookie('KuNr', $KuNr, strtotime("+1 month"));
    setcookie('Password', $Passw, strtotime("+1 month")); 
    
    
$sql = "SELECT * FROM `tblkunde` WHERE `KuNr` LIKE '$KuNr'";
  $Result = mysql_query ($sql)   ;

  while ($line = mysql_fetch_array ($Result))
   {     ?>
 Willkommen <?PHP echo $line['KuVorname'];?> <?PHP echo $line['KuNachname'];?> in unserem Musikladen.
 
<?php    }

 echo "<br /><br /><br /><a href='home.php'>Hier geht es zur&uuml;ck zu Startseite.</a>" ;


   
    } 
    else 
    {
      echo  "<a href='login_neu.php'> Ihr Passwort ist nicht korrekt, bitte geben Sie es nochmal ein. </a>" ;
    }       
?>   
     

       
