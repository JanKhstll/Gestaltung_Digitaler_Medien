#!/usr/bin/perl -w
#Jan Kohstall
#guessgame.pl


$toguess = int(rand()*100);

	print("Geben Sie eine Zahl zwischen 0 und 99 ein, ihr Ziel ist es die Zufallszahl\nzu erreichen\n");


#Anzahl der Versuche
$n = 0;
$weiter = 1;


while($weiter == 1) { 
		#neue Eingabe: 
			$a = <STDIN>, chomp $a;
			if($a<0 || $a>100 || $a != int($a)) {
					print("Geben Sie bitte eine Zahl zwischen 0 und 99 ein \n");			
			}

		if($a!=$toguess) {
			print("Ihre Zahl: ");
			print($a);
			if($a>$toguess) {
				print(" ist zu gross \n");
				$n++;
				}
				else {
					print(" ist zu klein \n");
					$n++;
				}
		}	
		
		if($a == $toguess) {
			$weiter = 0;
			print("Sie haben die Zahl in ");
			print($n); 
			print(" Schritten getroffen.\n");
			
			if($n==0) {
				print("Sie sind ein Genie\n");
			}
			elsif($n<10){		
					print("Sie sind Weltmeister\n");
					}
			else {		
					print("Kennen Sie den Unterschied zwischen groesser und kleiner?\n");
			}
		}
}





#here document
print <<HERE;
		Falls Sie es wieder vergessen haben, hier nochmal die Zufallszahl:
		$toguess;
HERE
	
	print("\n");
