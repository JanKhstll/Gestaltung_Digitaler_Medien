<?php  if (isset($_COOKIE['KuNr'], $_COOKIE['Password'])) {

     $KuNr2 = $_COOKIE['KuNr']  ;

      include("db.php");

mysql_query ("DELETE FROM `tblkunde` WHERE `tblkunde`.`KuNr` = $KuNr2 "  ) ;
    setcookie('KuNr', '', strtotime('-1 day'));
    setcookie('Password', '', strtotime('-1 day'));
    unset($_COOKIE['KuNr']);
    unset($_COOKIE['Password']);
    echo'Sie existieren nun nicht mehr.';
    
    echo' <a href="home.php">Zur&uuml;ck zur Startseite.</a> ' ;
  }
  else
  {
      echo'Sie k&ouml;nnen diesen Premiumdienst leider nicht verwenden.';
  }

?>