document.addEventListener("DOMContentLoaded", main);

function main() {


    document.getElementById("formulario").addEventListener("submit", function(e) {
        e.preventDefault()

        let form = new FormData(document.getElementById("formulario"))

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

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
                    window.location.href = "index.html"

                }

            }
        }
        xhttp.open("POST", "regis.php", true);
        xhttp.send(form);

    })




}
