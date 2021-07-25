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

print "</head>\n<body>\n";
print '<div id="wrapper"><div id="header"><h1>E-Mail</h1></div>', "\n";		
print '<div id="main"><div id="navigation"><h3>Navigation</h3>';
print '<ul><li><a href="../index.html">Hauptseite</a></li>', "\n";
print '<li><a href="../index2.html">Faulenzen</a></li>', "\n";
print '<li><a href="../index3.html">Übungen</a></li>', "\n";
print '<li><a href="../zahlenlehre.html">Zahlenlehre</a></li>', "\n";
print '<li><a href="../broetchenrechner.html">Brötchenrechner</a></li>', "\n";
print '<li><a href="../colortheme.html">Colortheme</a></li>', "\n";
print '<li><a href="dice.pl">Dice</a></li>', "\n";
print '<li><a href="javascript.pl">JavaScript</a></li>', "\n";
print '<li><a href="loggingpage.pl">Loggingpage</a></li>', "\n";
print '<li><a href="gaming.pl">Gaming</a></li>', "\n";
print '<li><a href="backend.pl">Backend</a></li>', "\n";
print '<li><a href="frontend.pl">Frontend</a></li>', "\n";
print '<li><a href="agent.pl">Agent</a></li>', "\n";
print '<li><a href="../fibonacci.html">Fibonacci</a></li>', "\n";
print '<li><a href="../dna_analyse.html">DNA-Analyse</a></li></ul>', "\n";
print '</div>', "\n";
print '<div id="content"><p>Es wurde folgende E-Mail-Adresse gespeichert:</p>', "\n";
print $Mail;
print '<br/><br/>';
print '<p><a href="http://134.2.2.38/~zxmyn68/cgi-bin/mailcheck.pl">Zurück</a></p>', "\n";
print '<div class="clear"></div></div><div class="clear"></div></div>', "\n";	   
print '<div id="footer"><p>Diese Webseite wurde erstellt von: Cornelia Schulz, Matrikelnummer: 3584303</p></div>', "\n";
print "</div></body></html>";