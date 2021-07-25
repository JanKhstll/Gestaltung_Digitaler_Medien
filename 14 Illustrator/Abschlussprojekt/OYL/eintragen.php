<?php

		include("db.php");
		
					//Abfrage des Primärschlüssels: 
								 
			$res = mysql_query("SELECT primary_key,name FROM event
                                   WHERE code =\"$code\"");					 
			$Key = mysql_result($res, 0, "primary_key");
			
			$gegenstand1 = $_POST["artikel1"];
			$menge1 = $_POST["menge1"];
			
			$gegenstand2 = $_POST["artikel2"];
			$menge2 = $_POST["menge2"];	

			$gegenstand3 = $_POST["artikel3"];
			$menge3 = $_POST["menge3"];
			
			$gegenstand4 = $_POST["artikel4"];
			$menge4 = $_POST["menge4"];
			
			$gegenstand5 = $_POST["artikel5"];
			$menge5 = $_POST["menge5"];
			
			$gegenstand6 = $_POST["artikel6"];
			$menge6 = $_POST["menge6"];	

			$gegenstand7 = $_POST["artikel7"];
			$menge7 = $_POST["menge7"];
			
			$gegenstand8 = $_POST["artikel8"];
			$menge8 = $_POST["menge8"];			
			
			if($gegenstand1 != NULL) {
						
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand1','$menge1')");						
			}
			
			if($gegenstand2 != NULL) {
			
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand2','$menge2')");	
			}
			
			if($gegenstand3 != NULL) {									
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand3','$menge3')");	
									
			}
			
			if($gegenstand4 != NULL) {
			
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand4','$menge4')");	
									
			}
			
			if($gegenstand5 != NULL) {						
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand5','$menge5')");						
			}
			if($gegenstand6 != NULL) {
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand6','$menge6')");	
			}
			
			if($gegenstand7 != NULL) {
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand7','$menge7')");						
			}
			if($gegenstand8 != NULL) {
			mysql_query("INSERT INTO `things` (`ID`, `name`, `number`)
                                    VALUES ('$Key','$gegenstand8','$menge8')");	
			}
	?>								