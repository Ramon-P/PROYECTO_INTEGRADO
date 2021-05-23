<?php

include "autoloader.php";
require_once "clases/editar.php";


$a= new editar;
echo $a->updateUser($_POST); 