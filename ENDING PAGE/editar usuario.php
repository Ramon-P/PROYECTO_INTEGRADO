<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/master.css">
    <script src="js/editar.js"></script>
    <script src="js/update.js"></script>
</head>

<body>

<div id="get"><?php
                            session_start();
                            print_r($_SESSION['id'])

                            ?></div>


    <div class="login-box">
    <form id="formulario" action="" method="POST">
        <h1>EDICION USUARIO</h1>
        <div class="contenedor">
            <div class="input-contenedor"></div>
            <i class="fas fa-user icon"></i>
            <input name="newname" id="newname" type="text" placeholder="NOMBRE NUEVO">



            <div class="input-contenedor"></div>
            <i class="fas fa-envelope icon"></i>
            <input name="newmail" id="newmail" type="text" placeholder="CORREO NUEVO">



            <div class="input-contenedor"></div>
            <i class="fas fa-key icon"></i>
            <input name="newpass" id="newpass" type="text" placeholder="CONTRASEÑA NUEVA">


<input name="id" id="datos" type="hidden" value="<?php
                            print_r($_SESSION['id'])

                            ?>">
                            
                        
                
           





            <div class="input-contenedor"></div>
            <input type="submit" value="CAMBIAR DATOS" id="button">
           
        </div>
    </form>
    </div>
</body>

</html>