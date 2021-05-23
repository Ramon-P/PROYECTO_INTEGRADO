document.addEventListener("DOMContentLoaded", main);

function main() {

    cosas(); 
    ocultar();

    let nombre = document.getElementById("content")
    let sitio = document.getElementById("listado")

    document.getElementById("add").addEventListener("click", function() {

        let div = document.createElement("div")
        div.innerHTML = nombre.value
        sitio.appendChild(div)
        div.style.backgroundColor=" "


        let uid = document.getElementById("datos").innerText
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               
                console.log("Bien")
                console.log(this.responseText)
            }
        };
        xhttp.open("GET", "add.php?userid=" + uid + "&" + "nombre=" + div.innerHTML, true);
        xhttp.send();

        window.location.reload();

    })


    window.onload = function() {

        let uid = document.getElementById("datos").innerText
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                enseñar(JSON.parse(this.responseText))

            }
        };
        xhttp.open("GET", "load.php?userid=" + uid, true);
        xhttp.send();



        function enseñar(datos) {
          
            for (let index = 0; index < datos.length; index++) {
                let sitio = document.getElementById("listado")
                let div = document.createElement("div")
                div.setAttribute("class", datos[index]["nombre"])
                div.setAttribute("id", datos[index]['idtable']) //ID TABLA
                div.setAttribute("id", "selecti")

                div.innerHTML = datos[index]["nombre"]
                div.onclick = function() {
                    let ocult = document.getElementById("ocult").innerHTML = datos[index]['idtable']
                    document.getElementById("corcho").innerHTML = ' '
                   




                    var xhttp2 = new XMLHttpRequest();
                    xhttp2.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {

                            show(JSON.parse(this.responseText))


                            function show(datos) {
                                for (let index = 0; index < datos.length; index++) {


                                    var newDiv = document.createElement("div");
                                    newDiv.setAttribute("id", datos[index]["idnota"])
                                    newDiv.setAttribute("class", "posit")

                                    var newTitle = document.createElement("div")
                                    newTitle.setAttribute("class", "titulo")
                                    newDiv.appendChild(newTitle);


                                    var newtextarea2 = document.createElement("textarea")
                                    newtextarea2.setAttribute("cols", "60")
                                    newtextarea2.setAttribute("rows", "1")
                                    newtextarea2.setAttribute("placeholder", "Título")
                                    newtextarea2.setAttribute("class", "tittle")
                                    newtextarea2.innerHTML = datos[index]["tittle"]
                                    newTitle.appendChild(newtextarea2)

                                    var newcontenedor = document.createElement("div");
                                    newcontenedor.setAttribute("class", "input-contenedor")

                                    newDiv.appendChild(newcontenedor)

                                    var newtextarea = document.createElement("textarea")

                                    newtextarea.setAttribute("cols", "60")
                                    newtextarea.setAttribute("rows", "5")
                                    newtextarea.setAttribute("class", "content")
                                    newtextarea.innerHTML = datos[index]["content"]

                                    newtextarea.setAttribute("placeholder", "Contenido")
                                    var boton = document.createElement("input")
                                    boton.setAttribute("id", datos[index]['idnota'])
                                    boton.setAttribute("type", "submit")
                                    boton.setAttribute("value", "Guardar")
                                    boton.onclick = function() {

                                        console.log(this.id)



                                        let prueba = document.getElementById(this.id)
                                        var tittle = prueba.getElementsByClassName("tittle")
                                        var content = prueba.getElementsByClassName("content")
                                        var idtabla = document.getElementById("ocult").innerHTML
                                        console.log(idtabla)

                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                console.log("Bien")
                                                console.log(this.responseText)
                                                window.location.reload();
                                                $("listado").trigger("click");
                                            }
                                        };
                                        xhttp.open("GET", "save.php?idnota=" + this.id + "&" + "tittle=" + tittle[0].value + "&" + "content=" + content[0].value + "&" + "idtable=" + idtabla, true);
                                        xhttp.send();

                                        

                                        window.location.reload();






                                    }
                                    var botonb = document.createElement("input")
                                    botonb.setAttribute("id", datos[index]['idnota'])
                                    botonb.setAttribute("type", "submit")
                                    botonb.setAttribute("value", "Borrar")
                                    botonb.onclick = function hola() {

                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                // Typical action to be performed when the document is ready:
                                                console.log("Bien")
                                                console.log(this.responseText)

                                            }
                                        };
                                        xhttp.open("GET", "delete.php?idnota=" + this.id, true);
                                        xhttp.send();

                                        window.location.reload();
                                    }






                                    newcontenedor.appendChild(newtextarea)
                                    newcontenedor.appendChild(boton)
                                    newcontenedor.appendChild(botonb)

                                    var currentDiv = document.getElementById("corcho");
                                    currentDiv.appendChild(newDiv)



                                }



                            }


                        }
                    };
                    xhttp2.open("GET", "posit.php?userid=" + uid + "&" + "nombre=" + div.innerHTML, true);
                    xhttp2.send();
                }
                sitio.appendChild(div)

            }
        }
   

    }

    document.getElementById("button").addEventListener("click", addElement)

}