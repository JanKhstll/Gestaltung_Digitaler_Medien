// JavaScript Document

function table() {

   for (var i = 0; i<1024; i++) {
        var a,b;
        document.write("<tr>");
        document.write("<td>" + i+ "</td>");
        document.write("<td>"+getBinaryValue(i)+"</td>");
        document.write("<td>"+getHexadecimalValue(i)+"</td>");
        document.write("</tr>");
        
   }
}
    
function getBinaryValue(decimal) {
    return decimal.toString(2).toUpperCase();
}

function getHexadecimalValue(decimal) {
    return decimal.toString(16).toUpperCase();
}    
    