function empleados() {

    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "emp.php", true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            show(JSON.parse(this.responseText))
        }
    }

    function show(resultados) {

        for (let index = 0; index < resultados.length; index++) {

            let slc = document.getElementById("empleado")
            prueba = document.createElement("option")
            prueba.setAttribute("value", resultados[index]["EMPLEADO_NO"])
            prueba.innerHTML = resultados[index]["APELLIDOS"]

            slc.appendChild(prueba)

        }
        sueldo();
    }




}