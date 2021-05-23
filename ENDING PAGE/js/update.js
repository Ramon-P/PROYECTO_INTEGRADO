document.addEventListener("DOMContentLoaded", main);
function main() {

   let boton = document.getElementById("button")

   boton.addEventListener("click", function(e){
       e.preventDefault()

    let form = new FormData(document.getElementById("formulario"))

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            window.location.href = "index.html"
        }
    }
    xhttp.open("POST", "update.php", true);
    xhttp.send(form);
   })
        

       
   
    


}
