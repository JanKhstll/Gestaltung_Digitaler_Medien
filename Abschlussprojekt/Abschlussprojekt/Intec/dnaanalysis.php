<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="css/style.css" type="text/css">    
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>    
    
<title>DNA</title>
</head>

<body>
    
    <div>
        <h1>DNA</h1>
    </div>
    
    
    
    <div class="container">
        <div class="navigation">
            <?php 
	           include("menu.php");
	       ?>
        </div>

        
        <div class="content">
        
        <?php
        $n = $_POST['Eingabe'];
		
		if(check($n)) {	
			echo "Das ist der DNA Strang";
			for($i = 0; $i < strlen($n); $i++) {
				if($n[$i] =="A") {
					echo "<p><img src='Bilder/Adenin_reverse.png' /><img src='Bilder/Thymin.png' /></p>";
				}
				elseif($n[$i] =="C") {
					echo "<p><img src='Bilder/Cytosin_reverse.png' /><img src='Bilder/Guanin.png' /></p>";
				}
				elseif($n[$i] =="G") {
					echo "<p><img src='Bilder/Guanin_reverse.png' /><img src='Bilder/Cytosin.png' /></p>";
				}
				elseif($n[$i] =="T") {
					echo "<p><img src='Bilder/Thymin_reverse.png' /><img src='Bilder/Adenin.png' /></p>";
				}
			}
		}
		else {
			echo "Falsche Eingabe, beschränken Sie sich bitte auf A,C,G,T";
		}
		function check($n) {
			$boole = true;
			for($i = 0; $i < strlen($n); $i++) {
				if(!(strcmp($n[$i],"A") == 0 || strcmp($n[$i],"C") == 0 || strcmp($n[$i],"G") == 0 || strcmp($n[$i],"T") == 0)) {
					$boole = false;
				}
			}
			return $boole;
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
