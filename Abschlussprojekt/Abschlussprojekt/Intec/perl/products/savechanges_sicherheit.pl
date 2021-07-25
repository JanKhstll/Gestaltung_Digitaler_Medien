#!/usr/bin/perl  -w
use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);

use CGI; # Import des CGI Moduls

my $cgi = new CGI;
my $Save = $cgi->Vars();

#uebertragen der Variablen: 
my $Aktiv = $Save->{"aktiv"};
my $Produktname = $Save->{"name"};
my $Description = $Save->{"description"};
my $accessed = 0;

print $Produktname;

print<<HERE
		open(FILE, '>>'. 'products/'. $Produktname. '.txt') || die "Fehler $!";
		if($Aktiv eq "Aktiv")
		{
			print FILE "Aktiv\n";
			print FILE "Zugriffe: 0\n";
		}
		else
		{
			print FILE "Inaktiv\n";
			print FILE "0";
		}
        print FILE $Description;
        print FILE $accessed;
		close FILE;
		
		open(FILE, '>>'. 'products/'. $Produktname. '.html') || die "Fehler $!";
		print FILE $Description;
        print FILE $accessed;
		close FILE;
        
HERE
;