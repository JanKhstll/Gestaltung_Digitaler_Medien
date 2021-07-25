<!DOCTYPE html>
<html>
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="0.8.755.98"/>
  <title>ausgefuehrt</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css"/>
  <link rel="stylesheet" type="text/css" href="css/ausgefuehrt.css"/>
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
     <div class="clearfix grpelem" id="n4"><!-- group -->
      <ul class="MenuBar clearfix grpelem" id="menu"><!-- row -->

      </ul>
     </div>
    </div>
    <div class="clearfix colelem" id="n115"><!-- group -->
     <div class="grpelem" id="n116"><!-- custom html -->
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
      mysql_query("INSERT INTO tblbestellung (kunr, liednr)
                                        VALUES ($KuNr,$Lied)");

    echo "Vielen Dank f&uuml;r ihren Einkauf. Der Download beginnt in K&uuml;rze.<br /> Bitte gedulden Sie sich einen Moment."      ;
  mysql_query ("UPDATE tbllied SET Ranking = Ranking + 1 WHERE LiedNr = '$Lied' ") ;
    }
    else
    {
    echo "Sie sind ein Gauner! Sie haben ein falsches Passwort bzw. einen falschen Benutzernamen eingegeben. Sch&auml;men Sie sich!!!!" ;
    }

echo "<br /><br /><br /><a href='home.php'>Hier geht es zurück zu Startseite.</a>"
?>


</div>
    </div>
    <div class="clearfix colelem" id="master-footer"><!-- group -->
     <div class="clearfix grpelem" id="n117"><!-- content -->
      <p>2012 © Jan Kohstall &amp; Julian Kappler </p>
     </div>
  
  <div class="preload_images">
   <img class="preload" src="image/master_u509_r_full.png" alt=""/>
   <img class="preload" src="image/master_u509_m_full.png" alt=""/>
   <img class="preload" src="image/master_u509_a_full.png" alt=""/>
   <img class="preload" src="image/master_u488_r_full.png" alt=""/>
   <img class="preload" src="image/master_u488_m_full.png" alt=""/>
   <img class="preload" src="image/master_u488_a_full.png" alt=""/>
   <img class="preload" src="image/master_u465_r_full.png" alt=""/>
   <img class="preload" src="image/master_u465_m_full.png" alt=""/>
   <img class="preload" src="image/master_u465_a_full.png" alt=""/>
   <img class="preload" src="image/master_u502_r_full.png" alt=""/>
   <img class="preload" src="image/master_u502_m_full.png" alt=""/>
   <img class="preload" src="image/master_u502_a_full.png" alt=""/>
   <img class="preload" src="image/master_u497_r_full.png" alt=""/>
   <img class="preload" src="image/master_u497_m_full.png" alt=""/>
   <img class="preload" src="image/master_u497_a_full.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script src="http://musecdn.businesscatalyst.com/scripts/1.1/jquery-1.7.min.js" type="text/javascript"></script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/1.1/jquery-1.7.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/1.1/sprydomutils.js" type="text/javascript"></script>
  <script src="scripts/1.1/museutils.js" type="text/javascript"></script>
  <script src="scripts/1.1/jquery.musemenu.js" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   Muse.Utils.addSelectorFn('body', Muse.Utils.transformMarkupToFixBrowserProblemsPreInit);/* body */
Muse.Utils.addSelectorFn('a.nonblock', Muse.Utils.addHyperlinkAnchor); /* a.nonblock */
Muse.Utils.addSelectorFn('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.addSelectorFn('body', Muse.Utils.showWidgetsWhenReady);/* body */
Muse.Utils.addSelectorFn('body', Muse.Utils.transformMarkupToFixBrowserProblems);/* body */

</script>
   </body>
</html>