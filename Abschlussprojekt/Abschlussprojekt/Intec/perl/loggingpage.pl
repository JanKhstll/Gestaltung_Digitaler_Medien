#!/usr/bin/perl  -w
use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);

print "Content-type: text/html\n\n";
print '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">', "\n";
print '<html><head><meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">', "\n";
print '<title>JavaScript</title><link rel="stylesheet" type="text/css" media="screen" href="http://134.2.2.38/~zxmyn68/css/style.css">', "\n";
print '<style type="text/css">a[href^="http://134.2.2.38/"], a[href^="https://134.2.2.38/"]  {background:none; padding-left: 0;}</style>', "\n";


open(DATEI, ">>logs/maillog.txt") || die "Datei nicht gefunden";
my @Zeilen = <DATEI>;

my @NeueZeilen;
foreach(@Zeilen) {
  $_ =~ s/#.*//;
  push(@NeueZeilen,$_) if $_ !~ /^\s*\n/;
}

my ($Sekunden, $Minuten, $Stunden, $Monatstag, $Monat,
    $Jahr, $Wochentag, $Jahrestag, $Sommerzeit) = localtime(time);
my $CTIME_String = localtime(time);
$Monat+=1;
$Jahrestag+=1;
$Monat = $Monat < 10 ? $Monat = "0".$Monat : $Monat;
$Monatstag = $Monatstag < 10 ? $Monatstag = "0".$Monatstag : $Monatstag;
$Stunden = $Stunden < 10 ? $Stunden = "0".$Stunden : $Stunden;
$Minuten = $Minuten < 10 ? $Minuten = "0".$Minuten : $Minuten;
$Sekunden = $Sekunden < 10 ? $Sekunden = "0".$Sekunden : $Sekunden;
$Jahr+=1900;

my $Mail = param("Eingabe");
my $Datum = $Jahr . "-" . $Monat . "-" . $Monatstag;
my $Uhrzeit = $Stunden . ":" . $Minuten . ":" . $Sekunden;

print DATEI @NeueZeilen;
printf DATEI "$Datum, $Uhrzeit, Zugriff von $Mail \n";

close(DATEI) || die "Fehler beim Speichern";


print <<HERE;
   <title>Loggingpage</title>
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
            <a href="../rollcalculator.html">Brötchenrechner</a>
            <br>
            <a href="../colortheme.html">Farb-Thema</a>
            <br>
        </div>

        
        <div class="content">
		<h1>Loggingpage</h1>
		
		Es wurde folgende E-Mail erfolgreich geloggt:
		$Mail <br>
		
		Vielen Dank
		<br>
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
