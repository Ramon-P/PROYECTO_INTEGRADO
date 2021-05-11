<?php
function cargador($clase){
    $fichero = "clases/{$clase}.php";
    $fichero2 = "interfaces/{$clase}.php";
    if(file_exists($fichero)){                                              //Autoloader para cargar las interfaces y las clases
        require_once($fichero);
    }else{
        if(file_exists($fichero2)){
            require_once($fichero2);
        }else{
            die("el fichero de interfaz {$clase}.php no existe");
        }
    }

    
}

spl_autoload_register("cargador");