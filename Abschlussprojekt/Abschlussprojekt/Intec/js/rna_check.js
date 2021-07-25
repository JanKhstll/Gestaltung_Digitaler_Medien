//Java Script

function RNA() {
    var n = document.getElementById("field").value;

    if(Check(n)) {
        return true;
       }
       else {
        alert("Falsche Eingabe");    
           return false;
       }
    
    
}

function Check (n) {
  var erlaubt = "ACGU";
  for (var i = 0; i < n.length; i++)
    if (erlaubt.indexOf(n.charAt(i)) < 0)
      return false;
  return true;
}


