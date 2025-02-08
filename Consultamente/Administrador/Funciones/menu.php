<?php
session_start();
$host = "localhost";
$dbname = "consultamente";
$user = "postgres";
$password = "Carlos18";
$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
$nombre_temp=$_SESSION['nombre_temp'];
?>  
<html>
    <head>
        <title>Menu</title>
    <style>
    #fondo{
        background-color: #DDEFF7 ;
    }
    #menu{
        display: table;
        width: 700px;
        height: 100px;
        margin: 0 auto;
        background-color: #269AC8;
    }
    #celdas{
        display: table-cell;
        width: 10%;
        height: 10%;
        text-align: center;
        background-color: #DDEFF7;
    }
    </style>
    </head>
    <body id="fondo">
    <table id="menu">
        <tr>
        <td id="celdas"><a href="bienvenido.php">Inicio</a></td>
        <td id="celdas"><a href="./casos.php">Datos</a></td>
        <td id="celdas"><a href="./ayuda.php">Ayuda</a></td>
        <td id="celdas"><a href="./info.php">Información</a></td>   
        <td id="celdas">Bienvenido <?php echo $nombre_temp;?></td>
        <td id="celdas"><a href="Funciones/cerrar_sesion.php">Cerrar sesión</a></td>  
        </tr>
    </table>
    </body>
</html>