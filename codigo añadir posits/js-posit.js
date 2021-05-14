document.addEventListener("DOMContentLoaded", main);

function main(){
document.getElementById("boton").addEventListener("click",addElement)

}

function addElement () {
    
    var newDiv = document.createElement("div");
    newDiv.setAttribute("class","posit")
    var newcontenedor = document.createElement("div") ; 
    newcontenedor.setAttribute("class","input-contenedor")
  newDiv.appendChild(newcontenedor)
  var newtextarea = document.createElement("textarea")
  newtextarea.setAttribute("cols","60")
  newtextarea.setAttribute("rows","5")
  newcontenedor.appendChild(newtextarea)
  
    // añade el elemento creado y su contenido al DOM
    var currentDiv = document.getElementById("div1");
    document.body.insertBefore(newDiv, currentDiv);
  }
