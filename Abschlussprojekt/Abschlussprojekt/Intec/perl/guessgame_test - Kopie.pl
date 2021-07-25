#!/usr/bin/perl -w

#Zufallszahl zwischen 0 und 99 wird generiert
$toguess=int(rand(100));
#Variable fuer Anzahl der Versuche
$anzahlVersuche=1;

#Schleife wird so oft durchgegangen, bis die beiden Zahlen uebereinstimmen
while(true) {
	# Zur Eingabe auffordern
	print("\nBitte geben Sie eine ganze Zahl zwischen 0 und 99 ein:\n");
	# Zeile einlesen
	$zahl = <STDIN>;
	#Ueberpruefung der Zahl:
	if ($zahl == int($zahl) && $zahl > 0 && $zahl < 99) {
		if($zahl == $toguess) {
			print("Der eingegebene Wert hat den gleichen Wert wie die Zufallszahl\n");
			last;#Abbruch der while-Schleife
		}
		if($zahl > $toguess) {
			print("Der eingegebene Wert ist groesser als die Zufallszahl\n");
		}
		if($zahl < $toguess) {
			print("Der eingegebene Wert ist kleiner als die Zufallszahl\n");
		}
		#Anzahl der Versuche wird hochgezaehlt
		$anzahlVersuche++;
	}
	else {
		
		print("Sie muessen eine ganze Zahl zwischen 0 und 99 eingeben!\n");
		
	}
}
#Benutzung der HERE-Documents:
print <<HERE;
Sie haben $anzahlVersuche Versuche benoetigt.
HERE
print("\n");

