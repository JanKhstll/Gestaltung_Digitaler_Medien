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
        So sieht die Tabelle aus:
        
        
  
			<table>
            <tr>
                <th>Nummer</th>
                <th>First</th>
                <th>Second</th>
                <th>Third</th>
                <th>Name</th>
            </tr>
			
		<?php	
			$sql = "SELECT * FROM codesun";
			$liste = mysql_query($sql);
			
			
		   while ($zeile = mysql_fetch_array ($liste))
				{ 
		?>
				
				<tr>
                <td><?php echo "$zeile[id]" ?></td>
				<td><?php echo "$zeile[first]" ?></td>
				<td><?php echo "$zeile[second]" ?></td>
				<td><?php echo "$zeile[third]" ?></td>
				<td><?php echo "$zeile[name]" ?></td>
                </tr>
		<?php 	
				}
			
		?>	
       </table>
		
		
        
        
       
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
