<?php





$user = array ();
$user['Name'] = $_POST["Kundenname"]    ;
$user['Vorname'] = $_POST["Kundenvorname"];
$user['Ort'] = $_POST["Kundenort"]  ;
$user['Email'] = $_POST["EMail"]  ;


$Kundenname = $_POST["Kundenname"]    ;
$Kundenvorname = $_POST["Kundenvorname"];
$Kundenort = $_POST["Kundenort"]  ;
$Kundgeburt = $_POST["Geburtsdatum"];
$KundEMail = $_POST["EMail"]  ;
$KundPasswort = $_POST["Passwort"]  ;
$Landnr = $_POST ["Kundenland"];
$Username =  $_POST['EMail'] ;
$Password =  $_POST['Passwort'] ;
$n = 0;
         include("db.php");
  if (('' == $Kundenname ) OR
            ('' == $Kundenvorname ) OR
            ('' == $Kundenort )    OR
            ('' == $Kundgeburt )   OR
            ('' == $KundEMail )   OR
            ('' == $KundPasswort )   )
            die('Bitte bef&uuml;llen Sie alle Felder.')      ;

    if (!preg_match('~\A\S{3,30}\z~', $Username))
       die('Der Benutzername darf nur aus 3 bis 30 Zeichen bestehen und '.
               'keine Leerzeichen enthalten.') ;


   //  $res = mysql_query("SELECT KuNr FROM tblkunde
           //                        WHERE KuEmail =\"$Username\"");
 // $nr = mysql_result($res, 0, "KuNr");

  //echo $nr;
    $sql = "SELECT * FROM `tblkunde`  WHERE `KuEmail` LIKE '$Username' ";

  $Result = mysql_query ($sql)   ;

  while ($line = mysql_fetch_array ($Result))    {
  // echo   $line['KuNr']  ;
 $n=$n+1  ;

  }
   if ($n!= 0)
     die("Die Email wird schon verwendet. <br /><a href='registrierung.php'>Hier geht es zur&uuml;ck zur Registrierung.</a>");
    else
    {
mysql_query ("INSERT INTO `tblkunde` (`KuVorname`, `KuNachname`, `KuOrt`, `KuGeburtsdatum`, `KuEmail`, `KuPasswort`,`landnr`)
               VALUES('$Kundenvorname','$Kundenname','$Kundenort','$Kundgeburt','$KundEMail','$KundPasswort','$Landnr')");
       
         $res = mysql_query("SELECT KuNr FROM tblkunde
                                   WHERE KuEmail =\"$Username\"");

$KuNr2 = mysql_result($res, 0, "KuNr");

     setcookie('KuNr', $KuNr2, strtotime("+1 month"));
    setcookie('Password', $Password, strtotime("+1 month"));

echo "Vielen Dank ";
echo $user['Vorname'] ;
echo ' ' ;
echo $user['Name'] ;

echo"
Ihre Registrierung war erfolgreich. Wir freuen uns Sie als neuen Kunden begr&uuml;&szlig;en zu d&uuml;rfen!"           ;


echo "<br /><br /><br /><a href='home.php'>Hier geht es zur&uuml;ck zu Startseite.</a>" ;
}

?>

