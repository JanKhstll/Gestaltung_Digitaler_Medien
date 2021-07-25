//Java Script

//Blatt 4 ÜB 1:
//Preisberechnen
function calculatePrice() 
{
    var n = document.Rechner.Brötchenanzahl.value;
    var erg;
    if (rightInput(n)) 
    {
        if(n < 10) 
        {   
            erg = n*0.55;
            alert(n+ " Brötchen kosten: " + runde(erg,2) + " €.");
        }
        else 
        {
            erg = (n*0.55)*0.90;
            alert(n+ " Brötchen kosten: " + runde(erg,2) + " €.");
        }
    }    
    else     
    {
        alert("Die Eingabe ist falsch."); 
    }
            
}

//HIlsfunktion ob die Eingabe richtig ist.
function rightInput(n) {
    if(n < 0 || (isNaN(n)) || (n-parseInt(n)) != 0) {
        return false;
    }
        else {
            return true;
        }
    
}

//Diese Funktion rundet das Ergebnis.
function runde(x, n) {
  if (n < 1 || n > 14) return false;
  var e = Math.pow(10, n);
  var k = (Math.round(x * e) / e).toString();
  if (k.indexOf('.') == -1) k += '.';
  k += e.toString().substring(1);
  return k.substring(0, k.indexOf('.') + n+1);
}

//Blatt 4: ÜB 2: 

//Farbberechnung:
var Zeile = 0;
function drawmycolor() 
{


    var r = document.Rechner.R.value;
    var g = document.Rechner.G.value;
    var b = document.Rechner.B.value;
    
/*    r = getHexValue(r);
    g = getHexValue(g);
    b = getHexValue(b);*/
    
    //Sind die Werte korrekt: 
    
    
    r = getHexadecimalValue(r);
    g = getHexadecimalValue(g);
    b = getHexadecimalValue(b);
    
    
    var rgb = r+g+b;
    //document.write(rgb);
    
    Zeile += 1;
	var TR = document.getElementById("Tabelle").insertRow(Zeile);
	var TD1 = document.createElement("td");
	var TD1text = document.createTextNode(r);
	TD1.appendChild(TD1text);
	var TD2 = document.createElement("td");
	var TD2text = document.createTextNode(g);
	TD2.appendChild(TD2text);
	var TD3 = document.createElement("td");
	var TD3text = document.createTextNode(b);
	TD3.appendChild(TD3text);
	var TD4 = document.createElement("td");
	var TD4text = document.createTextNode(rgb);
	TD4.appendChild(TD4text);
	var TD5 = document.createElement("td");
	var TD5text = document.createTextNode("");
	TD5.style.backgroundColor = "#" + rgb;
	TD5.appendChild(TD5text);
	TR.appendChild(TD1);
	TR.appendChild(TD2);
	TR.appendChild(TD3);
	TR.appendChild(TD4);
	TR.appendChild(TD5);
	document.Rechner.R.value = "";
	document.Rechner.G.value = "";
	document.Rechner.B.value = "";

}

function getHexadecimalValue(decimal) {
    if(Check(decimal)) {

            return getHexa(decimal);
    }
    else {
        alert("Bitte gültigen Wert, der eingegebene Wert wird als 0 interpretiert.");
        return "00";
    }
}



//Funktion, die die Hexadezimalzahl zurückgibt entspricht zu 90% der Musterlösung CP 3      
function getHexa(n){

                        var stringvalue = "";   // String-Variable als Rückgabewert

                        if(n==0){         // Abfangen das dezimal = 0 ist
                                return "00";
                        }

                        /* Umwandelalgorithmus vgl. http://de.wikipedia.org/wiki/Hexadezimalsystem#Umwandlung_von_Dezimalzahlen_in_Hexadezimalzahlen */
                        while(n > 0){
                                var rest = n % 16;        // Rest berechnen

                                /*
                                   Danach den Rest ueberpruefen und je nach Rest der Rueckgabe
                                   den entsprechenden Wert zuweisen
                                */
                                if(rest < 10){ stringvalue = rest + stringvalue; }
                                else if(rest==10){ stringvalue="A" + stringvalue; }
                                else if(rest==11){ stringvalue="B" + stringvalue; }
                                else if(rest==12){ stringvalue="C" + stringvalue; }
                                else if(rest==13){ stringvalue="D" + stringvalue; }
                                else if(rest==14){ stringvalue="E" + stringvalue; }
                                else if(rest==15){ stringvalue="F" + stringvalue; }
				/* Durch 16 Teilen um die naechste Potenz zu ermitteln */
                                n = Math.floor(n/16);
                        }
                        if(stringvalue.length==1) {
                        	stringvalue="0"+stringvalue;
                        }

                        return stringvalue; /* Rueckgabe der erstellten Hexadezimalzahl */
}

function Check(n) {
    if(n < 0 || n > 255 || (isNaN(n)) || (n-parseInt(n))>0 || (n-parseInt(n))<0)
    {
        return false;
    }
    else 
    {
        return true;
    }
}
