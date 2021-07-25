#!/usr/bin/perl -w

use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
print <<HERE
Content-type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="http://134.2.2.38/~zxmyn68/css/style.css" type="text/css">      
    
<title>Home</title>
</head>

<body>
    
    <div>
        <h1>Createproduct</h1>
    </div>
    
    
    
    <div class="container">
        <div class="navigation">
            <a href="../index.html">Home</a>
            <br> 
            <a href="../tennis.html">Tennis</a>
            <br>
            <a href="../cocktail.html">Cocktail</a>
            <br>
            <a href="../input.html">Input</a>
            <br>
            <a href="../numbertraining.html">Numbertraining</a>
            <br>
            <a href="../rollcalculator.html">Brötchenrechner</a>
            <br>
            <a href="../colortheme.html">Farb-Thema</a>
            <br>
            <a href="mailcheck.pl">Mail Check</a>
            <br>
            <a href="createproduct.pl">Produkt erstellen</a>
            <br>
            <a href="backend.pl">Backend</a>
            <br>
            <a href="frontend.pl">Frontend</a>
            <br>
             <a href="viewproduct.pl">Produktansicht</a>
            <br>
             <a href="agent.pl">007</a>
            <br>           
            
        </div>

        
        <div class="content">
            <form name="createproduct" action="savechanges.pl" method="get" enctype="text/html">
                <input type="checkbox" name="Aktiv" value="Aktiv" checked="checked">Aktiv? <br>
                <input type="text" name="name" value="" size="20" maxlength="50">
                Produktname <br>
                <textarea name="description" rows="10" cols="10"></textarea>
                <input type="submit" name="" value="Anlegen" />
            </form>
        
        
       
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

HERE
;
