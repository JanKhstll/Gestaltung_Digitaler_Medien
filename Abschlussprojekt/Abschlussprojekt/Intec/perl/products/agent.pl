#!/usr/bin/perl -w

use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
use CGI;
use LWP::Simple;


my $cgi = new CGI;
my $formular = $cgi->Vars();

my $site = $formular->{"site"};
my $value = $formular->{"number"};

my $response = "leer";
my $content;
if ($cgi->param("ausführen")) {
    $response = "ausgeführt";
if(not defined($value) || $value<1){
  $response = "Falsche Anzahl eingegeben!";
}else{
  for(my $i=1; $i<=$value; $i++){
    $response = getUrl($site);
    last if(not $response eq "erfolg");
  }
}
}
if($response eq "erfolg"){
  $content = "Die Webseite $site konnte erfolgreich $value mal aufgerufen werden.";
}
elsif($response eq "leer"){
    $content = "";
    }
else{
  $content = "Beim Aufruf der Webseite $site ist ein Fehler aufgetreten!";
}
     




print <<HERE
Content-type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="http://134.2.2.38/~zxmyn68/css/style.css" type="text/css">      
    
<title>Agent</title>
</head>

<body>
    
    <div>
        <h1>007</h1>
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
        <form name="agent">
            Welche Seite soll aufgerufen werden? <br>
            <input tyep="field" name="site" value="" >
            <br>
            Wie oft? <br>
            <input type="field" name="number" value="" >
            <input type="submit" name="ausführen" value="ausführen">
            
        </form>
        $content

   
       
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

sub getUrl{
  my $doc = get($site);
  if(defined($doc)){
    return "erfolg";
  }
  return "fail";  
}
