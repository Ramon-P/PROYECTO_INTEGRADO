document.addEventListener("DOMContentLoaded", main);

function main() {

    document.getElementById("formulario").addEventListener("submit", function(e) {
        e.preventDefault()

        let form = new FormData(document.getElementById("formulario"))

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                if (this.responseText == "no") {
                    let div = document.getElementById("warning")
                    div.style.display = "block"
                    div.style.position = "absolute"
                    div.innerHTML = "Email o contraseña incorrectos"

                } else {

                    window.alert("Conectado correctamente")
                    window.location.href = "codigobase.php"

                }

            }
        }
        xhttp.open("POST", "login.php", true);
        xhttp.send(form);

    })




}
