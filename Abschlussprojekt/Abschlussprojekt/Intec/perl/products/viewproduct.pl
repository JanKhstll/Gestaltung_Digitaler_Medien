#!/usr/bin/perl -w

use strict;
use CGI;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);


my $Dateiname = param("file");


open(FILE, '<'. 'products/'. $Dateiname. '.txt') || die "Fehler $!";
my @Zeilen_txt = <FILE>;
my $Zugriffe = int(@Zeilen_txt[1])+1;
my $Description = @Zeilen_txt[2];
close FILE;


open(FILE, '>'. 'products/'. $Dateiname. '.txt') || die "Fehler $!";
print FILE "Aktiv\n";
print FILE $Zugriffe;
print FILE "\n";
print FILE $Description;
print FILE "\n";

my @Zeilen_html = <FILE>;
close FILE;

open(FILE, '<'. 'products/'. $Dateiname. '.txt') || die "Fehler $!";
my @Zeilen_txt = <FILE>;
my $Zugriffe2 = int(@Zeilen_txt[1]);
close FILE;

print <<HERE
Content-type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="http://134.2.2.38/~zxmyn68/css/style.css" type="text/css">     
    
<title>Viewproduct</title>
</head>

<body>
    
    <div>
        <h1>$Dateiname</h1>
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
HERE
;
print @Zeilen_html;
print <<ENDE
				<div class="clear">
				</div>
			</div>
			<div class="clear">
			</div>
		</div>
		<div id="footer">
		<p>
        Die Seite $Dateiname wurde geöffnet. Anzahl der bisherigen Zugriffe auf diese Seite: 
ENDE
;
print $Zugriffe;
print "<br>";
printf "Der Inhalt lautet: ";
print $Description;
print <<ENDE
		</p>
		</div>
	</div>
</body>
</html>
ENDE
;
