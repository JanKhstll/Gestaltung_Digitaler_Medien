<!DOCTYPE html>
<html>
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="0.8.755.98"/>
  <title>Wahllied</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css"/>
  <link rel="stylesheet" type="text/css" href="css/wahllied.css"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = 'js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="n1"><!-- group -->
     <div class="clearfix grpelem" id="n2"><!-- column -->
      <ul class="MenuBar clearfix colelem" id="menu"><!-- row -->
       <li class="MenuItemContainer clearfix grpelem" id="n3"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="n4" href="home.php"><!-- state-based group --><div class="grpelem" id="n5"><!-- horizontal box --><div class="_n5 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n6"><!-- content --><p>Home</p></div></div></div><div class="grpelem" id="n10"><!-- horizontal box --><div class="_n10 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n11"><!-- content --><p>Home</p></div></div></div><div class="grpelem" id="n15"><!-- horizontal box --><div class="_n15 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n16"><!-- content --><p>Home</p></div></div></div><div class="grpelem" id="n20"><!-- horizontal box --><div class="_n20 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n21"><!-- content --><p>Home</p></div></div></div></a>
       </li>
       <li class="MenuItemContainer clearfix grpelem" id="n25"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="n26" href="interpret.php"><!-- state-based group --><div class="grpelem" id="n27"><!-- horizontal box --><div class="_n27 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n28"><!-- content --><p>Interpret</p></div></div></div><div class="grpelem" id="n32"><!-- horizontal box --><div class="_n32 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n33"><!-- content --><p>Interpret</p></div></div></div><div class="grpelem" id="n37"><!-- horizontal box --><div class="_n37 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n38"><!-- content --><p>Interpret</p></div></div></div><div class="grpelem" id="n42"><!-- horizontal box --><div class="_n42 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n43"><!-- content --><p>Interpret</p></div></div></div></a>
       </li>
       <li class="MenuItemContainer clearfix grpelem" id="n47"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="n48" href="album.php"><!-- state-based group --><div class="grpelem" id="n49"><!-- horizontal box --><div class="_n49 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n50"><!-- content --><p>Album</p></div></div></div><div class="grpelem" id="n54"><!-- horizontal box --><div class="_n54 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n55"><!-- content --><p>Album</p></div></div></div><div class="grpelem" id="n59"><!-- horizontal box --><div class="_n59 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n60"><!-- content --><p>Album</p></div></div></div><div class="grpelem" id="n64"><!-- horizontal box --><div class="_n64 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n65"><!-- content --><p>Album</p></div></div></div></a>
       </li>
       <li class="MenuItemContainer clearfix grpelem" id="n69"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="n70" href="genres.php"><!-- state-based group --><div class="grpelem" id="n71"><!-- horizontal box --><div class="_n71 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n72"><!-- content --><p>Genres</p></div></div></div><div class="grpelem" id="n76"><!-- horizontal box --><div class="_n76 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n77"><!-- content --><p>Genres</p></div></div></div><div class="grpelem" id="n81"><!-- horizontal box --><div class="_n81 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n82"><!-- content --><p>Genres</p></div></div></div><div class="grpelem" id="n86"><!-- horizontal box --><div class="_n86 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n87"><!-- content --><p>Genres</p></div></div></div></a>
       </li>
       <li class="MenuItemContainer clearfix grpelem" id="n91"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="n92" href="charts.php"><!-- state-based group --><div class="grpelem" id="n93"><!-- horizontal box --><div class="_n93 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n94"><!-- content --><p>Charts</p></div></div></div><div class="grpelem" id="n98"><!-- horizontal box --><div class="_n98 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n99"><!-- content --><p>Charts</p></div></div></div><div class="grpelem" id="n103"><!-- horizontal box --><div class="_n103 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n104"><!-- content --><p>Charts</p></div></div></div><div class="grpelem" id="n108"><!-- horizontal box --><div class="_n108 f3s_top clearfix"><div class="MenuItemLabel NoWrap clearfix grpelem" id="n109"><!-- content --><p>Charts</p></div></div></div></a>
       </li>
      </ul>
      <div class="colelem" id="n113"><!-- custom html -->
       <?php

 if (isset($_COOKIE['KuNr'], $_COOKIE['Password'])) {

echo '<br /><br />Sie wollen sich abmelden? <a href="logout.php">HIER AUSLOGGEN</a>';

  }

  else
  {
 echo   ' <br /><br />Noch kein Kunde? <a href="Registrierung.php">HIER REGISTRIEREN</a>
<br /><br />Schon Kunde? <a href="login_neu.php">HIER EINLOGGEN</a>' ;
  }

?>

</div>
     </div>
     <div class="clearfix grpelem" id="n114"><!-- column -->
      <div class="colelem" id="n115"><!-- custom html -->
       <!DOCTYPE html>
<html>
<head>
	<title>Untitled</title>
<!--Adobe Edge Runtime-->
    <script type="text/javascript" src="edge_includes/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="edge_includes/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="edge_includes/edge.0.1.3.min.js"></script>
    <script type="text/javascript" src="edge_includes/edge.symbol.0.1.3.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="Interpreten_edge.js"></script>
    <script type="text/javascript" charset="utf-8" src="Interpreten_edgeActions.js"></script>
    <link rel="stylesheet" href="Interpreten_edge.css" />
<!--Adobe Edge Runtime End-->

</head><body style="margin:0;padding:0;">
	<div id="stage" class="EDGE-3735892">
	</div>
</body>
</html>

</div>
      <div class="colelem" id="n116"><!-- custom html -->
       <?php

echo "  <title>Suchergebnisse</title>";
   include("db.php");


   $suche = $_POST["Interpretennummer"]  ;

   $res = mysql_query("SELECT InterName FROM tblInterpret
                                   WHERE InterNr =\"$suche\"");
  $Inter = mysql_result($res, 0, "InterName");



  echo "Sie haben nach ";  echo "$Inter"     ;
echo " gesucht. <br /> <br />" ;


 echo '<form name="Auswahl_Lied" action="Kauf.php" method="POST" enctype="text/html">  '   ;


  $sql = "SELECT * FROM `tbllied` LEFT JOIN (tblalbum,tblgenre) ON
(tbllied.AlbNr=tblalbum.AlbNr AND tbllied.GenreNr=tblgenre.GenreNr) WHERE `InterNr` = $suche ";

echo 'W&auml;hlen Sie hier Ihr gew&uuml;nschtes Lied aus: <br />'  ;


  $Result = mysql_query ($sql)   ;



    echo"<td><select name='Liedauswahl'>";
          while ($zeile = mysql_fetch_array($Result))
                  {
                  echo "$zeile[0] $zeile[1] $zeile[2] $zeile[3] $zeile[4] $zeile[5]";
                  echo "<option ";
                     echo " value='$zeile[LiedNr]'>
                      $zeile[LiedName] ,
                      $zeile[albname] ,
                      $zeile[genre]    ,
                      $zeile[LiedPreis]&euro;

                      </option>\n";
                  }


echo '<input type="submit" name="" value="Auswahl best&auml;tigen" />'       ;


echo '</form>'  ;


 echo '<form name="Auswahl_Album" action="Kaufalbum.php" method="POST" enctype="text/html">  '   ;


  $sql = "SELECT * FROM `tblalbum`  WHERE `albinterpret` = $suche ";

echo 'Oder w&auml;hlen Sie hier Ihr gew&uuml;nschtes Album aus: <br />'  ;


  $Result = mysql_query ($sql)   ;



    echo"<td><select name='Albumauswahl'>";
          while ($zeile = mysql_fetch_array($Result))
                  {
                  echo "$zeile[0] $zeile[1] $zeile[2] $zeile[3] $zeile[4] $zeile[5]";
                  echo "<option ";
                     echo " value='$zeile[albnr]'>
                      $zeile[albname],
                      $zeile[albpreis]&euro;
                      </option>\n";
                  }


echo '<input type="submit" name="" value="Auswahl best&auml;tigen" />'       ;


echo '</form>'  ;


?>

</div>
     </div>
    </div>
    <div class="clearfix colelem" id="master-footer"><!-- group -->
     <div class="clearfix grpelem" id="n117"><!-- content -->
      <p>2012 © Jan Kohstall &amp; Julian Kappler </p>
     </div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="image/master_u72_r_full.png" alt=""/>
   <img class="preload" src="image/master_u72_m_full.png" alt=""/>
   <img class="preload" src="image/master_u72_a_full.png" alt=""/>
   <img class="preload" src="image/master_u139_r_full.png" alt=""/>
   <img class="preload" src="image/master_u139_m_full.png" alt=""/>
   <img class="preload" src="image/master_u139_a_full.png" alt=""/>
   <img class="preload" src="image/master_u149_r_full.png" alt=""/>
   <img class="preload" src="image/master_u149_m_full.png" alt=""/>
   <img class="preload" src="image/master_u149_a_full.png" alt=""/>
   <img class="preload" src="image/master_u159_r_full.png" alt=""/>
   <img class="preload" src="image/master_u159_m_full.png" alt=""/>
   <img class="preload" src="image/master_u159_a_full.png" alt=""/>
   <img class="preload" src="image/master_u169_r_full.png" alt=""/>
   <img class="preload" src="image/master_u169_m_full.png" alt=""/>
   <img class="preload" src="image/master_u169_a_full.png" alt=""/>
  </div>
  <!-- JS includes -->
<!--  <script src="http://musecdn.businesscatalyst.com/scripts/1.1/jquery-1.7.min.js" type="text/javascript"></script>   -->
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