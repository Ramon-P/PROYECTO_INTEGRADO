<?php

include "autoloader.php";
require_once "clases/saveMessage.php";



$mecagoendios = new mensaje;

echo $mecagoendios->add($_POST);
