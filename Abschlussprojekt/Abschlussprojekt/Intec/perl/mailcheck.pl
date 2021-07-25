#!/usr/bin/perl  -w
use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);

print "Content-type: text/html\n\n";

print <<HERE;
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ANSI" >
<link rel="stylesheet" href="http://134.2.2.38/~zxmyn68/css/style.css" type="text/css">    
<title>Mailcheck</title>

<script type="text/javascript">
		
		function mailCheck() {
			var n = document.mailcheck.EMail.value;
			if(validEmail(n)) {
				open('loggingpage.pl?Eingabe='+n);
				}
			else {
				alert("Die E-Mail Adresse ist ung�ltig");
			}	
		}
		function validEmail(email) {
			var strReg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+/;
			var regex = new RegExp(strReg);
			return(regex.test(email)); 
			
		}
		
		function test() {
			alert("test");
		}
		
		
</script>   


		</head>
		<body>
		
	    <div class="container">
        <div class="navigation">
            Hier kommen die <br>
            einzelnen Links 
            rein. <br>
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
            <a href="../rollcalculator.html">Br�tchenrechner</a>
            <br>
            <a href="../colortheme.html">Farb-Thema</a>
            <br>
        </div>

		<div id="content">
		<h1>MailCheck</h1>
		
		
	<form name="mailcheck">

		<p>Im Folgenden wird �berpr�ft, ob die Eingabe eine g�ltige EMail-Adresse ist.</p>
		<input type="text" name="EMail" value="E-Mail" size="20" maxlength="50" >
		<input type="button" value="Pr�fen" onclick="mailCheck()">
	</form>
	</div>
	<div id="footer"><p>Diese Webseite wurde erstellt von: Jan Kohstall</p> </div>

		</body>
		</html>

HERE
;