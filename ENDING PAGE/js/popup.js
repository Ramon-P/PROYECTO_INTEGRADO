function ocultar() {
    let botones = document.getElementsByClassName('oculta');

    botones[0].addEventListener("click", function() {

        if (document.getElementById("opcioines").style.visibility !== 'visible') {




            document.getElementById("opcioines").style.visibility = 'visible';
        } else {


            document.getElementById("opcioines").style.visibility = 'hidden';
        }
    });


}