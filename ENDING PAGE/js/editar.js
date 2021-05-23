document.addEventListener("DOMContentLoaded", main);

function main() {

   window.onload = function(){


let id = document.getElementById("get")



    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          

            filas(JSON.parse(this.responseText))
            function filas(datos){


                document.getElementById("newname").setAttribute("value", datos[0]["username"])
                document.getElementById("newmail").setAttribute("value", datos[0]["email"])
                document.getElementById("newpass").setAttribute("value", datos[0]["pass"])

            }

        }
    }
    xhttp.open("GET", "edit.php?id="+id.innerText, true);
    xhttp.send()



   }
    
   
         


}
