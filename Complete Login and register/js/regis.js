document.addEventListener("DOMContentLoaded", main);

function main() {

    //Envío de los datos del formulario a la BBDD
    document.getElementById("formulario").addEventListener("submit", function(e) {
        e.preventDefault()

        let form = new FormData(document.getElementById("formulario"))

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("me cago en la puta")
                console.log(this.responseText)

                if (this.responseText == 5) {
                    let div = document.getElementById("warning")
                    div.style.display = "block"
                    div.style.position = "absolute"
                    div.innerHTML = "Usuario ya registrado"

                } else {
                    let div = document.getElementById("warning")
                    div.style.display = "block"
                    div.style.position = "absolute"
                    div.innerHTML = "Registrado correctamente"
                }

            }
        }
        xhttp.open("POST", "regis.php", true);
        xhttp.send(form);



        /* location.reload() */
    })




}



/* function show(resultados) {

    let registros = [];
    if (resultados.length === undefined) {
        registros[0] = resultados;
    } else {
        registros = resultados;
    }


    for (let index = 0; index < registros.length; index++) {

        prueba = document.createElement("option")
        prueba.setAttribute("value", registros[index][prueba])
        prueba.innerHTML = registros[index]["nombrePoblacion"]
        slc.appendChild(prueba)
    }


} */