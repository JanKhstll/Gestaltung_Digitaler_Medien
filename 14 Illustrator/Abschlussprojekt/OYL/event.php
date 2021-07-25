<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<link rel="icon" href="img/headerFav.png" type="image/png">    
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="css/style_event.css" type="text/css" media="screen" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>

<title>Veranstaltung</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="span3">
                <a href="Home.html" id="logo"></a>
            </div>
            <div class="span5">
            </div> 
            <div class="span3" >
                <nav> <a href="Home.html">Home</a><br />
                    <a href="begin.html">Starten</a><br />
                    <a href="join.html">Beitreten</a><br />
                    <a href="sonstiges.html">About</a>
                </nav>
            </div>
         </div>   
    </header>
    
    <?php 
    
		 include("db.php");
		$code = $_POST["code"]  ;
		$person = $_POST["person"];
		$number = $_POST["number"]; 
		$menge_neu = $_POST["menge_neu"];
		$gegenstand_neu = $_POST["gegenstand_neu"];
		$ID = $_POST["ID"];
		$action = $_POST["action"];
		$new_name = $_POST["new_name"];
		
		//Zum Überprüfen welche Aktion durchgeführt werden soll: <br />
			//Einführung der Variablen action:<br />
				//1	= Löschen
				//2 = hinzufügen
				//3 = Name eintragen
                //4 = neue Veranstaltung
		
		//setcookie('KuNr', $KuNr, strtotime("+1 month"));
    	//setcookie('Password', $Passw, strtotime("+1 month"));
		
		
		
		//Namen eintragen
		if($action == 3) {

				
			
			mysql_query("UPDATE `things` SET `person` = '$person' WHERE `things`.`primary_key` = '$number';");
			//mysql_query("INSERT INTO things (kunr, liednr)
                         //           VALUES ($KuNr,$Lied)");
			
		}
		
		
		//Neuer Gegenstand
		if($action == 2 ) {
				
			      mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                        VALUES ('$ID','$gegenstand_neu','$menge_neu')");
										
										
		}
		
		
		//Löschen
		
		if($action == 1) {
			 mysql_query("DELETE FROM `things` WHERE `things`.`primary_key` = '$number';");
			//mysql_query("UPDATE `things` SET `ID` = '0' WHERE `things`.`primary_key` = '$number';");
		}
		
        
        //Neue Veranstaltung
			
			
	
		if($action == 4) {
			//echo "$new_name  Zahl: <br />";
			$zufallszahlmt = mt_rand(1000000, 10000000);
			//echo "$zufallszahlmt";
				//     $res_random = mysql_query("SELECT primary_key,name FROM event
                //                   WHERE code =\"$zufallszahlmt\"");
		//	while($res_random != 0) {
		//		$zufallszahlmt = mt_rand(1, 4);
		//		     $res_random = mysql_query("SELECT primary_key,name FROM event
         //                          WHERE code =\"$zufallszahlmt\"");
		//	}
		
			mysql_query("INSERT INTO `event` ( `name`, `code`)
                                     VALUES ('$new_name','$zufallszahlmt')");
									 
			$code = $zufallszahlmt;	
			
			include("eintragen.php");	
			
		}
		

 

            


		
	
								   
	 // $name = mysql_result($res, 0, "name");
	 // $preis = mysql_result($res, 0, "primary_key");
	  
	  
	  
	  	//Abfrage
	     $res = mysql_query("SELECT primary_key,name FROM event
                                   WHERE code =\"$code\"");
								   
		//wenn hier nichts gematch wird, muss es abgefangen werden....						   
								   
	//if(mysql_result($res, 0, "primary_key") != FALSE) {
		if(mysql_num_rows($res) != 0) {
		
		$Key = mysql_result($res, 0, "primary_key");					   
 		$Inter = mysql_result($res, 0, "name");
		
 
		
			//	  $sql = "SELECT * FROM `things` LEFT JOIN (name,number) ON
	//		(event.primary_key=things.ID) WHERE `code` = $Key ";

	  $sql = "SELECT * FROM `things`  WHERE `ID` = $Key ";


//$liste = mysql_query ( "SELECT * FROM `event` ");
		$liste= mysql_query ($sql)   ;
	}	
	else {	
		
		
					
		echo"
			<div class='container'>
                    <legend></legend>
				<h1>Der Code ist falsch</h1>
				<h2><a href='join.html'>Zurück</a></h2>
				</div>";
				
				die();		
	}
	

		 
		 
		 


	  
	
    	
    ?>
    
    <div class="container">
            <legend></legend>
        <h1><?php echo "$Inter";?></h1>
        <hr />
        <table>
            <tr>
                <th id="gegenstand">Gegenstand</th>
                <th id="menge">Menge</th>
                <th colspan="3" id="mitbringer">Mitbringer</th>
                <th></th>
                
            </tr>
            
           <?php 
		   while  ($zeile = mysql_fetch_array ($liste))
				{ ?>
            <tr>
                <td class="colum1"><?php echo "$zeile[name]" ?></td>
<!--                <td><input class="btn btn-small btn-info" type="submit" value="Änderung" /></td>-->
                <td><?php echo "$zeile[number]" ?></td>
             <!--   <td><input class="btn btn-small btn-info" type="submit" value="Änderung" /></td>-->
                
              <!--  Mitbringer -->
                <?php if($zeile[person] == NULL) { 
				echo "<form name='insert_name' action='event.php' method='post' enctype='text/html'>" ;               

               echo '<td>';
	 
					echo "<input type='hidden' name='number' value='$zeile[primary_key]' />";
					echo" <input type='text' name='person' />";
                  	echo"<input type='hidden' name='code' value='$code' />";				
            		echo "<input type='hidden' name='action' value='3' />";			
                    echo '<td><input class="btn btn-small btn-success" type="submit" value="Eintragen" /></td>'; 
                    echo "</form>";
					
				}
				else {
                    //<td><input class="btn btn-small btn-info" type="submit" value="Änderung" /></td>
				
               					
				echo "<td> $zeile[person] </td>"; 
                echo ' <td></td>';     
                } ?>
                
          			<form name="Formular" action="event.php" method="post" enctype="text/html">
                 
                                            
   						<?php echo "<input type='hidden' name='number' value='$zeile[primary_key]' />"; ?>                                         
                    	<?php echo "<input type='hidden' name='code' value='$code' />"; ?>
               			<?php echo "<input type='hidden' name='ID' value='$Key' />"; ?> 
               			<?php echo "<input type='hidden' name='action' value='1' />"; ?>                                           
                
                <td><input class="btn btn-small btn-danger" type="submit" value="Löschen" /></td>
                
                </form>
            </tr>
            
            <?php } ?>
            

        
<!--        gewisser Abstand-->
            
 

  
            <tr><td id="non-visible">dslafj</td></tr>
            
          <form name="Formular" action="event.php" method="post" enctype="text/html">   
            <tr> 
                <td >Neuer Gegenstand:</td>
                <td ><input class="name_input" type="text" name="gegenstand_neu" value="" required="required"/></td>
                <td>Menge:</td>
                <td><input class="menge_input" type="text" name="menge_neu" value="" /></td>
                <?php echo "<input type='hidden' name='code' value='$code' />"; ?>
                <?php echo "<input type='hidden' name='ID' value='$Key' />"; ?>
				<?php echo "<input type='hidden' name='action' value='2' />"; ?>                
                <td><input class="btn btn-small btn-success" type="submit" value="Eintragen" /></td>                  
            </tr>
        </form>
        
        </table>
    
    </div>
    <div class="container text-left" id="arial_font"><h2><?php echo "$code" ?></h2>
    	<p id="arial_font">Dies ist der Veranstaltungscode mit ihm können Sie Ihre Freunde einladen.</p>
        </div>
    
    
    
    </body>
</html>
