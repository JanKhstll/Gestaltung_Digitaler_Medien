//Java Script

function check() {
    var n = document.getElementById("vname").value;
    var email = document.getElementById("vname").value;
    var v = document.getElementById("vname").value;
    
    

    if(CheckN(n) && CheckN(v) && checkEmailAdr(email)) {
        return true;
       }
       else 
        alert("Falsche Eingabe");    
           return false;
       }
    
    
}

function CheckN(n) {
    if(n.length > 20|| n.length < 1) {
        return false;
    }
    else {
        return true;
    }
}

function checkEmailAdr(adress) {
    if(!adress.isEmail()) {
        return false;
    }
    else 
        return true;
}

String.prototype.isEmail = function () {
  var validmailregex = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.([a-z][a-z]+)|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i
  return validmailregex.test(this);
}


/*
  function checkEmailAdr( address )
  {
    var status = true;
    var username = "";
    var hostname = "";

    if ( address.length < 8 )
      return false;

    if(address.length > 50) {
        return false;
    }
    var seperate = address.lastIndexOf("@");
    if ( seperate == -1 )
      return false;

    username = address.substring(0, seperate );
    if ( ! checkUsername( username, "<>()[],;:@\" " ) )
      return false;

    hostname = address.substring(seperate+1, address.length );
    if ( ! checkHostname( hostname ) )
      return false;

    return true;
  }


*/