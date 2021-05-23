<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Note4All</title>

</head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="js/popup.js"></script>
<script src="js/posit.js"></script>
<script src="js/buscador.js"></script>
<script src="js/tablero.js"></script>


<body>

<div id="datos" style="display: none;">
<?php
                            session_start();
                            print_r($_SESSION['id'])

                            ?>


</div>



    <div id="contenedor">


        <header>
            <table id="cabecera">
                <tr>
                    <td><img id="logo" src="img/logo.png"></td>
                    <td id="sep"><img id="titulo" src="img/cartel.png"></td>

                    <td id="sep">
                        <button id="boton" class="oculta"><img src="img/perf.png" id="perfil" style="width:100%;">

                            <?php
                            
                            print_r($_SESSION['username']);
                            
                            ?>

                        </button>
                    </td>

                    <td>
                        <div id="opcioines">


                            <button id="botones" onclick="window.location='editar usuario.php'">Editar Ususario</button>
                            <button id="botones" onclick="window.location='clases/logout.php'">Cerrar Sesión</button>



                        </div>

                    </td>
                </tr>
            </table>
        </header>

        <div id="fondo">

            <table id="menu">
                <tr>

                    <td>
                        <div id="buscador">
                            <button><img src="img/add.png" id="add"> </button>
                            <input type="text" name="buscador" id="content"> <button>
                                <img src="img/lupa.png" id="lupa"></button>

                        </div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="listado">

                        </div>
                    </td>

                </tr>
            </table>



            <div id="mod_text">
                
                <button id="button"><img src="img/boton.png"></button>
               

            </div>
            <div id="corcho">

            </div>
            <div >
				<table id="pie">
					<tr>
						<td><p>Programadores</p>
							<p>Juan Choví  ,Ramon Pradas, Joume Duart</p></td>
					
					
						<td>Entidades que han ayudado en el proyecto : <p>"Grupo Choví" y "Forn de Pradas"</p>
						<p><img  id="logo" src="img/chovi.png">  <img  id="logo" src="img/pradas.png">   </p>
						
					</td>
					<td>
						<p>equipo <span id="omega"> OMEGA</span></p>
						<p><img id="logo" src="img/perf.png"></p>
					</td>
					</tr>
				</table>
			</div>
        </div>
<div id="ocult"></div>

</body>


</html>