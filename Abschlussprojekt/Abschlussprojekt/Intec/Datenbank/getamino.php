<?php 
	include("db.php");
	?>
    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="css/style.css" type="text/css">    
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>    
    
<title>List</title>
</head>

<body>
    
    <div>
        <h1>ListDB</h1>
    </div>
    
    
    <div class="container">
        <div class="navigation">
            <?php 
	           include("menu.php");
	       ?>
        </div>
		
       
        <div class="content">
        Wählen sie das aus was Sie möchten:<br>
		<form name="amino" action="getamino.php" method="post">
        
   
       
           <select name='select1'>
                      <option value='A'>Adenenin</option>
                      <option value='C'>Cytosin</option>
                      <option value='G'>Guanin</option>   
                      <option value='U'>Uracil</option>        
           </select>    
           <select name='select2'>
                      <option value='A'>Adenenin</option>
                      <option value='C'>Cytosin</option>
                      <option value='G'>Guanin</option>   
                      <option value='U'>Uracil</option>        
           </select>    
           <select name='select3'>
                      <option value='A'>Adenenin</option>
                      <option value='C'>Cytosin</option>
                      <option value='G'>Guanin</option>   
                      <option value='U'>Uracil</option>        
           </select>        
       <input type="submit" name="" value="Prüfen" />     
       </form>
        
        
        
  
			
			
		<?php	
			if(isset($_POST['select1']) && isset($_POST['select2']) && isset($_POST['select3'])) {
				$first = $_POST['select1'];
				$second = $_POST['select2'];
				$third = $_POST['select3'];
				echo "
				
				
				
				      So sieht die Tabelle aus:<br>
        
        
  
			<table>
            <tr>
                <th>Nummer</th>
                <th>First</th>
                <th>Second</th>
                <th>Third</th>
                <th>Name</th>
            </tr> ";
			
			
			$sql = "SELECT * FROM codesun WHERE first = '$first' && second = '$second' && third = '$third'";
			$liste = mysql_query($sql);
			
			
		   while (($zeile = mysql_fetch_array ($liste)))
				{ 
		
				echo "
				<tr>
                <td>$zeile[id]</td>
				<td>$zeile[first]</td>
				<td>$zeile[second]</td>
				<td>$zeile[third]</td>
				<td>$zeile[name]</td>
                </tr>";
		 	
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
