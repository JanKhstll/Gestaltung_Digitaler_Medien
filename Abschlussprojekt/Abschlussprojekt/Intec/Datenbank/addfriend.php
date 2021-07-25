<?php 
	include("db.php");
	?>
    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="css/style.css" type="text/css">
<script type="text/javascript" src="js/check.js"></script>    
    
    
<title>ADD</title>
</head>

<body>
    
    <div>
        <h1>Freunde hinzufügen</h1>
    </div>
    
    
    <div class="container">
        <div class="navigation">
            <?php 
	           include("menu.php");
	       ?>
        </div>
		
       
        <div class="content">
        Wählen sie das aus was Sie möchten:<br>
		<fieldset>
        <form name="amino" action="addfriend.php" method="post">
        
   			<input type="text" name="vname" id="vname" placeholder="Vorname"><br>
            <input type="text" name="nname" id="nname" placeholder="Nachname"><br>
            <input type="text" name="email" id="email" placeholder="EMail">
       		<input type="submit" name="" value="Prüfen" onclick="return check()">     
       </form>
       </fieldset>
        
        
        
  
			
			
		<?php	
			if(isset($_POST['vname']) && isset($_POST['nname']) && isset($_POST['email'])) {
				$first = $_POST['vname'];
				$second = $_POST['nname'];
				$third = $_POST['email'];
				
				echo "Ihre Eingabe sind: $first, $second, $third ";
				echo "Dies wurde korrekt eingegeben.";
				
				include("db.php");

			
				
				mysql_query("INSERT INTO friends (firstname, lastname, email)
                                    VALUES ('$first','$second','$third')");
								
			
			
				
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
