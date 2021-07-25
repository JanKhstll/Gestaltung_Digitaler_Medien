<?php 
	include("db.php");
	?>
		
		<?php	
			if(!empty($_GET['email'])) {
				//echo "Diese E-Mail Adresse wurde gefunden: <br>";
				
				include("db.php");
				
				$email = $_GET['email'];
				
				//echo $email;
				
				$sql = "SELECT * FROM friends WHERE email LIKE '$email%'";
				//\'a\'
				$liste = mysql_query($sql);
			
			
		   		while (($zeile = mysql_fetch_array ($liste)))
				{ 
	
					echo $zeile['email'];
                    break;
					
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
			
	
       

