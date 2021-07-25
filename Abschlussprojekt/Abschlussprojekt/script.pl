#!/usr/bin/perl  -w
use strict;
use CGI::Carp qw(fatalsToBrowser);
use CGI qw(:standard);
use CGI;
use LWP::Simple;




print <<HERE
Content-type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="../css/style.css" type="text/css">      
    
<title>Home</title>
</head>

<body>
    
    <div>
        <h1>Backend</h1>
    </div>
    
    
    
    <div class="container">
        <div class="navigation">
            <a href="../index.html">Home</a>
            <br> 
            <a href="../tennis.html">Tennis</a>
            <br>
        </div>

        
        <div class="content">

HERE
;


my $query = new CGI;
#my $wert = $query->param("feld");
my $form = $query->Vars();

print "Länge ";
#print Vars().length();

open(H, ">logs/test.txt");

for(my $i = 1; $i < 16; $i++) {
    my $wert = $form->{"$i"};
    print $wert;
    print(H $wert);
    print(H " ");
    #print "Test";
    if($i%2==0) {
        print(H "\n");
    }
}

close(H);

my $check = 0;

if($query->param("klick_button")) {
    print "Button klicked \n";
    
    my $site = $query->param("url");
    print $site;
    if(length($site)>4 && defined($site)) {
       print "richtig <br>";
       print length($site);
       
       my @array = $site;
       
        my $counter = 0;
        my @values = split(undef,$site);
        my $newString;
        #my $values_size = @values;
        foreach my $val (@values) {
            print "$val";
            
            if($counter < 4) {
                #print "test";
                $newString = $newString.$val;
                #print $newString;
                }
            $counter++;    
            
            #print length($values_size);
            
            
        }
        
        if($newString eq "http") 
        {
            $check = 1;
        }
    }
    else  
    {
        print "zu kurz";
    }
    my $response = " ";
    my $content = " ";
    if($check == 1) {
        print "<br>Seite aufrufen.<br>";
        for(my $t = 1; $t < 5; $t++) 
        {
            $response = getUrl($site);
            last if(not $response eq "sucess");
        }
        if($response eq "sucess"){
            $content = "Die Webseite $site konnte erfolgreich 5 mal aufgerufen werden.";
        }
        else{
            $content = "Beim Aufruf der Webseite $site ist ein Fehler aufgetreten!";
        } 
        print $content;
    }
}

#auslesen
print "Hier wird ausgelesen <br>";
open(doc, "<logs/test.txt") || die "Datei nicht gefunden";

my  @zeilen = <doc>;
while(<doc>)
{
	print($_);
}
close(doc);

print "<br> Hier gehts weiter:<br> @zeilen[0]";
my $count = 0;
foreach (@zeilen) 
{
	print @zeilen[$count];
	$count++;
}
		


	
    
 #   print"<tr> 
 #          <td>@Zeilen_txt[0]</td>
 #           <td>$filename</td>
 #       </tr> "   

 #   }





    
        
print<<HERE        
    <form action="script.pl" methode="get">
        <input type="text" name="url" value="http://www."> 
        <input type="submit" name="klick_button" value="Klick me">
    </form>
       
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

sub getUrl
{
  my $doc = get(my $site);
  if(defined($doc)){
    return "sucess";
  }
  return "fail";  
}

