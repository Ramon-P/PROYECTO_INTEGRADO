<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Note4All</title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="js/login.js"></script>

<body>

    <table id="cabecera">
        <tr>
            <td><img id="logo" src="img/logo.png"></td>
            <td id="sep">xasdasdads</td>

            <td id="sep">
                <button id="boton" class="oculta">

<?php
session_start();
print_r($_SESSION['username']) 

?>

                    
                </button></td>
            <div id="opcioines">


                <td><button id="opcioines">Usuario</button></td>
                <td><button id="opcioines">Usuario</button></td>
                <td><button id="opcioines">Usuario</button></td>


            </div>
        </tr>
    </table>

    <div id="fondo">

        <table id="menu">
            <tr>

                <td>
                    <div id="buscador">
                        <input type="text" name="buscador"> <button><img src="img/lupa.png" id="lupa"></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="listado">
                        <p>faefa</p>
                    </div>
                </td>

            </tr>
        </table>



        <table id="mod_text">
            <tr>

                <td>
                    <div>
                        <p>letra</p>
                        <select name="letra">
						   <option value="1">normal</option> 
						   <option value="2">cursiva</option> 
						   <option value="3">negrita</option>
 
						</select>
                    </div>
                </td>
                <td>
                    <div>
                        <p>color</p>
                        <select name="color">
						   <option value="1">negro</option> 
						   <option value="2">rojo</option> 
						   <option value="3">verde</option>
 
						</select>


                        <button>nueva nota</button>
                    </div>
                </td>
                <tr>
                    <td>
                        <div>
                            <p>tama??o</p>
                            <select name="tama??o">
						   <option value="1">10px</option> 
						   <option value="2">20px</option> 
						   <option value="3">50px</option>
 
						</select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p>fuente</p>
                            <select name="fuente">
						   <option value="1">Calibri</option> 
						   <option value="2">Arial</option> 
						   <option value="3">Californian FB</option>
 
						</select>
                        </div>
                    </td>
                </tr>


            </tr>
        </table>
        <div id="corcho">
            <p>sdff</p>
        </div>

    </div>





</body>

</html>