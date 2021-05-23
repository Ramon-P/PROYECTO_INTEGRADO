function cosas() {
    let busca = document.getElementById("lupa")
    busca.addEventListener("click", function() {

        let nombre = document.getElementById("content")
        let prueba = nombre.value
        console.log(prueba)

       let lista = document.getElementById("listado")
       let divs = lista.getElementsByTagName("div")




       for (let index = 0; index < divs.length; index++) {
    if ( divs[index].innerHTML.toLowerCase() == prueba) {
        console.log("Tes")
        divs[index].style.backgroundColor="red"
        divs[index].addEventListener("click", function(){

            divs[index].style.backgroundColor="transparent"
        })
    }
    else{
        console.log("No")
    }
    
}
       
    })











}