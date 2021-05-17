document.addEventListener("DOMContentLoaded", main);

function main() {

    //Envío de los datos del formulario a la BBDD
    document.getElementById("prueba").addEventListener("click", function() {
        console.log("nherih")

        var req = new XMLHttpRequest();
        req.open('GET', 'emp.php', false);
        req.send(null);
        if (req.status == 200) {

            array = JSON.parse(req.responseText)
            let div1 = document.getElementsByClassName("posit")

            for (let index = 0; index < div1.length; index++) {

                div1[index].style.display = "block"
                div1[index].style.position = "absolute"
                div1[index].innerHTML = "id Nota" + array[index]['idnota'] + "<br>" + "id Tabla" + array[index]['idtable'] + "<br>" + "Text" + array[index]['text'] + "<br>"



            }



            console.log(JSON.parse(req.responseText));





        }




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