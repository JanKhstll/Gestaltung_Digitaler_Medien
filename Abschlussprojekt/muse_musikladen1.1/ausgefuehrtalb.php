<?php

$PW = $_POST ["Passwort"]   ;
$Benutzer = $_POST["Benutzername"] ;
$Lied = $_POST["Liedkauf2"]  ;


$Username =  $_POST['Benutzername'] ;
$Password =  $_POST['Passwort'] ;

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
      mysql_query("INSERT INTO tblbestellung (kunr, albnr)
                                        VALUES ($KuNr,$Lied)");

    echo "Vielen Dank f&uuml;r ihren Einkauf. Der Download beginnt in K&uuml;rze.<br /> Bitte gedulden Sie sich einen Moment."      ;
 echo ' <img src="image/ausgefeuhrteingeloggt_n117.gif" width="400" height="400" style="border: 0px;" />' ;

    }
    else
    {
    echo "<a href='loginalbum.php'>Geben Sie bitte nocheinmal Ihr Passwort und Ihren Benutzernamen ein.</a>" ;
    }

echo "<br /><br /><br /><a href='home.php'>Hier geht es zur&uuml;ck zu Startseite.</a>"
?>
