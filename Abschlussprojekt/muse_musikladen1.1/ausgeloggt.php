<?php

    setcookie('KuNr', '', strtotime('-1 day'));
    setcookie('Password', '', strtotime('-1 day'));
    unset($_COOKIE['KuNr']);
    unset($_COOKIE['Password']);
    echo'Sie sind nun ausgeloggt.';
    
echo "<br /><br /><br /><a href='home.php'>Hier geht es zur&uuml;ck zu Startseite.</a>" ;


?>

