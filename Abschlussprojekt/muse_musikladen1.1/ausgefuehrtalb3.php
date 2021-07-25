<!DOCTYPE html>
<html>
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="0.8.755.98"/>
  <title>Vielen Dank f&uuml;r Ihren Einkauf</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css"/>
  <link rel="stylesheet" type="text/css" href="css/ausgefuehrtalb.css"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = 'js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="n1"><!-- group -->
     <div class="clearfix grpelem" id="master-header"><!-- group -->
      <div class="grpelem" id="n2" title="home.php"><!-- image -->
       <img id="n2_img" src="image/logo.png" alt="" width="388" height="99"/>
      </div>
     </div>    
      </ul>
     </div>
    </div>
    <div class="clearfix colelem" id="n115"><!-- group -->
     <div class="grpelem" id="n116"><!-- custom html -->


<?php

$PW = $_POST ["Passwort"]   ;
$Benutzer = $_POST["Benutzername"] ;
$Lied = $_POST["Liedkauf2"]  ;

//echo "$PW" ;
//echo "$Benutzer";
//echo "$Lied <br />" ;


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
 // mysql_query ("UPDATE tbllied SET Ranking = Ranking + 1 WHERE LiedNr = '$Lied' ") ;
    }
    else
    {
    echo "Geben Sie bitte nocheinmal Ihr Passwort und Ihren Benutzernamen ein." ;
    }

echo "<br /><br /><br /><a href='home.php'>Hier geht es zur&uuml;ck zu Startseite.</a>"
?>
