<?php
function cargador($clase){
    $fichero = "clases/{$clase}.php";
    if(file_exists($fichero)){                                              //Autoloader para cargar las interfaces y las clases
        require_once($fichero);
    }
    
}

spl_autoload_register("cargador");