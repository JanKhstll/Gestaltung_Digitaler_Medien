<?php 
	include("db.php");
	?>
    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="css/style.css" type="text/css">    
<script type="text/javascript" src="js/rna_check.js"></script>    
    
<title>mRNA</title>
</head>

<body>
    
    <div>
        <h1>mRNA</h1>
    </div>
    
    
    
    <div class="container">
        <div class="navigation">
            <?php 
	           include("menu.php");
	       ?>
        </div>

		
       
        <div class="content">
		<form name="check" action="checkmrna.php" method="post">
         
            Geben Sie einen mRNA-Ausschnitt ein: <br>
            <input type="text" id="field" name="mRNA-Ausschnitt" class="smallinput" value="">     
       <input type="submit" name="" value="Prüfen" onclick="return RNA()"/>     
       </form>
       

        
   
        
  
			
			
		<?php	
			if(!empty($_POST['mRNA-Ausschnitt'])) {
				echo "Richtige Eingabe ";
				$input = $_POST['mRNA-Ausschnitt'];
				echo "So sah Ihre Eingabe aus: ";
				echo $input;
				echo "<br>";
				
				echo "<h3>Analyse</h3>
				
				<table>
					<tr>
						<th>Info</th>
						<th>Position</th>
						<th>Triplet</th>
						<th>Aminosäure</th>
					</tr> ";
					
				$unvo = "leer";	
				for($s = 0; $s < strlen($input); $s +=3) {
					$first = $input[$s];
					if($s + 1 < strlen($input)) {
                        $second = $input[$s+1];
                        if($s + 2 < strlen($input)) {
                            $third = $input[$s + 2];
                        }
                        else {
                            $unvo = "<tr><td>Unvollständig</td><td> $s</td><td> $first$second </td><td> - </td></tr>";
                        }
                    }
                    else {
				        $unvo = "<tr><td>Unvollständig</td><td> $s</td><td> $first </td><td> - </td></tr>";
					}
					
				
				
					


					
					if($unvo == "leer") {
					$sql = "SELECT * FROM codesun WHERE first = '$first' && second = '$second' && third = '$third'";
					$liste = mysql_query($sql) OR die("Error: $query <br>".mysql_error());
					
					//Schauen ob leer:
					if($first != "" && $second != "" && $third != "") {
						while ($zeile = mysql_fetch_array ($liste)) {
							if($first=="A" && $second=="U" && $third=="G") {
								echo "<tr>
								<td>Start</td>
								<td>$s</td>
								<td>$first$second$third</td>
								<td>$zeile[name]</td>
								</tr>";
							}
							else
							{
								 if(($first=="U" && $second=="A" && $third=="A")||($first=="U" && $second=="A" && $third=="G")||($first=="U" && $second=="G" && $third=="A")){
									echo "<tr>
									<td>Stopp</td>
									<td>$s</td>
									<td>$first$second$third</td>
									<td>$zeile[name]</td>
									</tr>";									 
								 }
								 else {
								echo "
								<tr>
								<td></td>
								<td>$s</td>
								<td>$first$second$third</td>
								<td>$zeile[name]</td>
								</tr>";
                                 }
							}
						}
					}
                    }    
					else {
						echo $unvo;
					}
					
					
					
				}
				
				echo "</table>";
			}
			
			
			?>
			
	
       
		
		
        
        
       
            <br>
            <br>
        </div>
        </div>
    
        <footer>      <p>
        <a href="http://validator.w3.org/check?uri=referer"><img
          src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
      </p>
            <p>© Jan Kohstall</p>
        </footer>
 
</body>
</html>
