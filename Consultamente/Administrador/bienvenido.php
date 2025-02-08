<?php
require("Funciones/menu.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title id="title">Bienvenido</title>
    <script src='JS/jquery.js'></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif; /* Selecciona una fuente adecuada */
        }
        #fondo {
            background-color: #269AC8;
            min-height: 100vh; /* Asegura que el fondo ocupe al menos toda la altura de la ventana del navegador */
            position: relative;
        }
        #centrar {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white; /* Ajusta el color del texto según el fondo */
        }
        #centrar1 {
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white; /* Ajusta el color del texto según el fondo */
        }
        #centrar2 {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white; /* Ajusta el color del texto según el fondo */
        }
        #image {
            position: absolute;
            top: calc(35% + 100px); 
            left: 48%;
            transform: translateX(-50%);
        }
        #footer {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white; 
            width: 100%;
            padding: 20px 0; 
            background-color: #59B8E3; 
        }
    </style>
</head>
<body id="fondo">
    <div id="centrar">
        <br><br><div id="usuario"><h1>Hola <?php echo $nombre_temp;?>, bienvenid@ a consultamente!</h1></div>
    </div>
    <div id="centrar1">
        <br><br>
        <div id="usuario"><h2>Aquí encontratás información confiable y actualizada sobre diversos transtornos mentales,
            así como recursos para comprender, abordar y promover el bienestar mental.</h2>
        </div>
    </div>
    <div id="centrar2"><h2>Nuestra misión es proporcionar apoyo y educación para desterrar el estigma y promover 
            la salud mental en nuestra comunidad.</h2>
        </div>
    <div id="image"><img src="Imagenes/2.png"></div>
    <div id="footer">Universidad de Guadalajara | Consultamente | Todos los derechos reservados 2024 ©</div>
</body>
</html>


