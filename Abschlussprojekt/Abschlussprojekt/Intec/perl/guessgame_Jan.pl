#Grundlagen der Internet-Technologien
#guessgame.pl
#Jan Kohstall
$toguess = int(rand()*100);
print("Geben Sie eine Zahl zwischen 0 und 99 ein, ihr Ziel ist es die Zufallszahl\nzu erreichen\n");
$a = <STDIN>, chomp $a;

$n = 0;



if($a>0 && $a<100 && $a == int($a)) { 

		while($a!=$toguess) {
			print("Ihre Zahl: " + $a);
			if($a>$toguess) {
				print(" ist zu gross \n");
				$n++;
				}
				else {
					print(" ist zu klein \n");
					$n++;
				}
			
			#neue Eingabe: 
			$a = <STDIN>, chomp $a;
			while($a<0 || $a>100 || $a != int($a)) {
						$a = <STDIN>, chomp $a;
						$check = rightInput($a);
						print("Geben Sie bitte eine Zahl zwischen 0 und 99 ein \n");
				}		
		}
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
	else 
	{
		print("Falsche Eingabe");
	}
	
	
	
	print <<HERE;
		Test
	HERE
	print("\n");
