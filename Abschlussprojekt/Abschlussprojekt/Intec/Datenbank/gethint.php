<?php 
	include("db.php");
	?>
		
		<?php	
		echo "Hier sollte was kommen";
			if(!empty($_GET['tag'])) {
				echo "Diese E-Mail Adresse wurde gefunden: <br>";
				
				
				$tag = $_GET['tag'];
				$monat = $_GET['monat'];				
				
				//echo $email;
				
				$sql = "SELECT * FROM `Database` WHERE `Tag` = '$tag' & `Monat` = '$monat' ";
				//\'a\'
				$liste = mysql_query($sql);
			
			
		   		while (($zeile = mysql_fetch_array ($liste)))
				{ 
	
					echo "$tag und $monat";
					echo $zeile['Vorname'];
					echo " ";
					echo  $zeile['Nachname'];

    
					
                    /*if ($hint == "")
					  {
					  $response="no suggestion";
					  }
					else
					  {
					  $response=$hint;
					  }
                      */
					
				}
					
			
			
				
			}
			
			?>
			
	
       

