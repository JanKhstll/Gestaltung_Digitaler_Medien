<!doctype html> 

<html>
    <head>
        <title>Das ist hier zum Ausprobieren</title>
        <link type="text/css" href="css/style.css">
        <meta charset="utf-8" content="text/html">
    </head>
    <script type="text/javascript">
        function check(input) {
            //alert(input);
            var vname = document.getElementById("vorname").value;
						//document.form_name.field_name.value;
            var nname = document.getElementById("nachname").value;
            var email2 = document.getElementById("email").value;
            var output =""; 
            
            switch(input) {
                    case vname: 
                        output = "Vorname"; 
                        break;
                    case nname:
                        output = "Nachname";
                        break;
                    case email2:
                        output = "email";
                        break; 
                    default: 
                        alert("Irgendwas klappt nciht");
                        break;
            }
            
            
            if(output == "Vorname" || output == "Nachname") {
                var not_allowed = "0123456789$%&§!%&(/)";
                var first = false;
                var second = true; 
                if(input.length > 10) {
                    document.getElementById("output").innerHTML="Der ist zu lang";
                    document.getElementById("check2").value="falsch";
                    }
                else {
                    first = true;
                }
                                  
                for(var i = 0; i<input.length; i++) {
                     if(not_allowed.indexOf(input.charAt(i)) > 0) {
                        document.getElementById("output").innerHTML="Der enthält falsche Zeichen";
                         document.getElementById("check2").value="falsch";
                         second = false;
                    }

                }
                
                if(first && second) {
                    document.getElementById("output").innerHTML="";
                    document.getElementById("check2").value="";
                }
            } 
        }
        
        function pruefen() {
            var into = document.getElementById("check2").value;
            //alert(in);
            /*
                        var vname = document.getElementById("vorname").value;
            var nname = document.getElementById("nachname").value;
            var email2 = document.getElementById("email").value;
            */
            if(into=="" && document.getElementById("vorname").value != "" && document.getElementById("nachname").value != "" && document.getElementById("email").value != "")
            {
                alert ("trued");
                return true;
            }
            else 
            {
                alert("falses");
                return false;
            } 
        }
    
    
    </script>
    
    <body>
        <header>
            <h1 id="headline" style="text-align=center">Das ist die Überschrift</h1>
        </header>
        <div id="menu">
            Hier kommen die einzelnen Menüpunkte hin.
            <br>
        
        
        </div>
        <div>
            Hier können Sie einen neuen Freund eintragen. 
            <form action="test.php" method="post">
                <input type="text" id="vorname" name="vorname" placeholder="Vorname" onkeyup="check(this.value)">
                <input type="text" id="nachname" name="nachname" placeholder="Nachname" onkeyup="check(this.value)">
                <input type="text" id="email" name="email" placeholder="E-Mail" onkeyup="check(this.value)">
                <input type="hidden" id="check2" value="">
                <input type="submit" name="button" value="Eintragen" onclick="return pruefen()">
            </form>
            <p id="output"> </p>

            
            <?php

                if(isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['email'])) {
                    $first = $_POST['vorname'];
                    $second = $_POST['nachname'];
                    $third = $_POST['email'];
                
                    $dbname="zxmyn68_db";
                    $dbhost="localhost";
                    $dbuser="zxmyn68";
                    $dbpw="0TaMp5R2U3Nv";
    
                    mysql_connect($dbhost, $dbuser, $dbpw);
                    mysql_select_db($dbname);
                    $sql = "Insert into friends (firstname, lastname, email)
                                VALUES('$first', '$second', '$third')";
                    mysql_query($sql);
                    
                    $res = mysql_query("Select * from friends where email = '$third'");
                
                    while($zeile = mysql_fetch_array($res)) {
                        echo "$zeile[firstname] $zeile[lastname] $zeile[email] <br>";
                    }
                    
                    mysql_free_result($zeile);
                    mysql_close();
                    
                    
                }
            ?>
            
        
        </div>
    
    
    
    
    </body>





</html>