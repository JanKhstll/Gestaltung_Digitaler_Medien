#!/usr/bin/perl  -w
use strict;
use CGI;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
use File::Basename;

#Backend

my @fileliste = <products/*.txt>;



print "Content-type: text/html\n\n";

print <<HERE;
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="http://134.2.2.38/~zxmyn68/css/style.css" type="text/css">    
<title>Home</title>
</head>

<body>
    
    <div>
        <h1>Frontend</h1>
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

        
        
        <p>Diese Seiten sind vorhanden: </p>
        
        
        <table>
            <colgroup>
                 <col width="100">
                  <col width="150">
                 <col width="150">
              </colgroup>
              

HERE
;

foreach my $filename (@fileliste) 
{
	$filename = basename($filename);
	(my $filename)=split (/\?/,$filename);
	$filename=(split(/\./,$filename))[0]; # Dateiname ohne Pfad und Endung
		open(my $file, '<'. 'products/'. $filename. '.txt') || die "Datei nicht gefunden";
		my $line = <$file>;
		close $file;
		
	open(FILE, '<'. 'products/'. $filename. '.txt') || die "Fehler $!";
	my @Zeilen_txt = <FILE>;
	close FILE;
	
	if(@Zeilen_txt[0] eq "Aktiv\n")
	{
        print "<tr>";
        print "<td>";
		print '<li><a href="viewproduct.pl?file=';
		print $filename;
		print '">';
		print $filename;
		print '</a></li>';
        print "</td>";
        print "</tr>";

	}
}

print <<HERE;

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
HERE
;
