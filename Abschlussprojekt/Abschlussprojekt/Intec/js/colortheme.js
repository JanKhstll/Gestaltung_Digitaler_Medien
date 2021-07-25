/* Funktion, die die Hexadezimaldarstellung einer natürlichen Zahl berechnet */
function getHexadecimalValue(decimal)
{/* geht nur für 0 <= decimal <= 255, das ja vorausgesetzt ist */
  var z = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
  var x = "";
  var x1 = Math.floor(decimal / 16);
  var x2 = decimal % 16;
  x = z[x1]+z[x2]
  return x;
}
  
/* Funktion, die die Farbdarstellung berechnet */
var Zeile = 0;
function drawmycolor() {
	var r = document.Rechner.r.value;
	var g = document.Rechner.g.value;
	var b = document.Rechner.b.value;
	r = getHexadecimalValue(r);
	g = getHexadecimalValue(g);
	b = getHexadecimalValue(b);
	var rgb = r+g+b;
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
	document.Rechner.rot.value = "";
	document.Rechner.gruen.value = "";
	document.Rechner.blau.value = "";
}