<?php

include "autoloader.php";
require_once "clases/saveMessage.php";


$a= new mensaje;
echo $a->add($_POST); 