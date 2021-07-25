#!/usr/bin/perl  -w
use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);

print "Content-type: text/html\n\n";
print '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">', "\n";
print '<html><head><meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">', "\n";
print '<title>JavaScript</title><link rel="stylesheet" type="text/css" media="screen" href="http://134.2.2.38/~zxmyn68/css/style.css">', "\n";
print '<style type="text/css">a[href^="http://134.2.2.38/"], a[href^="https://134.2.2.38/"]  {background:none; padding-left: 0;}</style>', "\n";


use CGI; # Import des CGI Moduls

my $cgi = new CGI;
my $Save = $cgi->Vars();

#uebertragen der Variablen: 
my $Aktiv = $Save->{"Aktiv"};
my $Productname = $Save->{"name"};
my $Description = $Save->{"description"};
my $accessed = 0;

open(FILE, ">products/$Productname.txt") || die "Datei nicht gefunden";


		if($Aktiv eq "Aktiv")
		{
			print FILE "Aktiv\n";
		}
		else
		{
			print FILE "Inaktiv\n";
		}
        print FILE "0\n";
        print FILE $Description;


close(FILE) || die "Fehler beim Speichern";


print <<HERE;
   <title>Savechanges</title>
		</head>
		<body>
		
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
		<h1>Loggingpage</h1>
		
		Es wurde folgende Seite erstellt:
		$Productname <br>
		
		
		<br>
        
        Wollen Sie nun zum <a href="backend.pl">Backend</a> oder zum <a href="frontend.pl">Frontend</a>.
		<br>
		<br>
		<br>
		<br>
		<br>

		</div>
		</body>
		</html>

HERE
;
