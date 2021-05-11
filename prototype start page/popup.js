document.addEventListener("DOMContentLoaded",ocultar);

function inicio(){
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
}




function ocultar () {
					
					let botones=document.getElementsByClassName('oculta');
					
					botones [0].addEventListener("click", function(){
						  if (botones [0].innerHTML == 'Usuario') {

									botones [0].innerHTML = "Mostrar"; 

									document.getElementById("opcioines").style.display = 'none';
							}
						  else {
						  	botones [0].innerHTML = "Usuario"; 

									document.getElementById("opcioines").style.display = 'block';
						  }
					});

					
				}