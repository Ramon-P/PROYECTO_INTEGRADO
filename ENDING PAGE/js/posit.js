function addElement() {
    var newDiv = document.createElement("div");
    newDiv.setAttribute("id", "nuevo")
    newDiv.setAttribute("class", "posit")

    var newTitle = document.createElement("div")
    newTitle.setAttribute("class", "titulo")
    newDiv.appendChild(newTitle);


    var newtextarea2 = document.createElement("textarea")
    newtextarea2.setAttribute("cols", "60")
    newtextarea2.setAttribute("rows", "1")
    newtextarea2.setAttribute("placeholder", "Título")
    newtextarea2.setAttribute("class", "tittle")
    newTitle.appendChild(newtextarea2)

    var newcontenedor = document.createElement("div");
    newcontenedor.setAttribute("class", "input-contenedor")

    newDiv.appendChild(newcontenedor)

    var newtextarea = document.createElement("textarea")
    newtextarea.setAttribute("cols", "60")
    newtextarea.setAttribute("rows", "5")
    newtextarea.setAttribute("class", "content")
    newtextarea.setAttribute("placeholder", "Contenido")
    newcontenedor.appendChild(newtextarea)

    var currentDiv = document.getElementById("corcho");
    currentDiv.appendChild(newDiv)


    var boton = document.createElement("input")
    boton.setAttribute("type", "submit")
    boton.setAttribute("value", "Guardar")
    boton.onclick = function() {


        let prueba = document.getElementById("nuevo")
        var tittle = prueba.getElementsByClassName("tittle")
        var content = prueba.getElementsByClassName("content")
        var idtabla = document.getElementById("ocult").innerHTML


       
         

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
          
             
            }
        };
        xhttp.open("GET", "insertarn.php?tittle=" + tittle[0].value + "&" + "content=" + content[0].value + "&" + "idtable=" + idtabla, true);
        xhttp.send();

        window.location.reload();
    }
    newcontenedor.appendChild(newtextarea)
    newcontenedor.appendChild(boton)
}