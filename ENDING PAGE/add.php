<?php


include "autoloader.php";

require_once "clases/add.php";

$a= new tablero;
echo $a->insertTableName($_GET["nombre"]);



?>