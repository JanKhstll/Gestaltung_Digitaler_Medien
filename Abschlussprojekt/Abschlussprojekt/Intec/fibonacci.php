<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="css/style.css" type="text/css">    
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>    
    
<title>Home</title>
</head>

<body>
    
    <div>
        <h1>Fibonacci</h1>
    </div>
    
    
    
    <div class="container">
        <div class="navigation">
            <?php 
	           include("menu.php");
	       ?>
        </div>

       
        <div class="content">
        Das sind die Fibonacci Zahlen bis
        
        <?php 
			
			$n = $_POST['Zahl'];
			
			echo $n;
			echo "<br>";
			
			if($n >= 2 && intval($n) == $n) {
				for($z = 0; $z <= $n; $z++) {
					echo "f";
					echo "<sub>".$z."</sub>";
					echo ": ";
					echo fibonacci($z);
					echo "<br>";
				}
			}
			
			
			function fibonacci($fib) {
				if($fib == 0) {
					return 0;
				}
				elseif($fib == 1) {
					return 1;
				}
				else {
					return (fibonacci($fib-1) + fibonacci($fib-2));
				}
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
