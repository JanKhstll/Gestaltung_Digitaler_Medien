#eratosthenes.pl
#Jan Kohstall

print("Geben Sie eine Zahl zwischen 1 und 2147483647 \n");

$max = <STDIN>, chomp $max;

if($max > 0 && $max < 2147483647 && $max==int($max)) {


	@primes= ();
	@tested= (1);

	$i = 1;

	while($i<$max) {
	   next if $tested[$i++];
	   push @primes, $i;
	   for ($k= $i; $k <= $max; $k+=$i) {
		  $tested[$k-1]= 1;
	   }
	}
	print "@primes\n";	
}
else {
	print("Falsche Eingabe");
}


print("Meine Matrikelnummer lautet: 3759895, sie ist keine Primzahl.\n");

#Speicherplatz lässt sich sparen, indem man Werte in tested löscht,
#allerdings würde die index Verschiebung bei der aktuellen Version zu Problemen fuehren.