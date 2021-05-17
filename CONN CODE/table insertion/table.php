<?php


include "autoloader.php";
require_once "clases/empleados.php";


$a= new bbdd;
echo $a->insertTableName($_GET["nombre"]);



?>