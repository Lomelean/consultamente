<?php
include("Funciones/menu.php");
$host = "localhost";
$dbname = "consultamente";
$user = "postgres";
$password = "Carlos18";
$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
?>
<html>
    <head>
        <title>Ayuda</title>
        <script src='JS/jquery.js'></script>
        <script>
        </script>
        <style>
            #fondo{
                background-color: #269AC8 ;
            }
            #contenedor{
                display: table;
                width: 700px;
                height: 400px;
                margin: 0 auto;
                background-color: #DDEFF7;
            }
            #filas{
                display: table-cell;
                text-align: center;
            }
            #nom_dato{
                display: table-cell;
                background-color: #1291C4;
            }
            #celda{
                display: table-cell;
                width: 10%;
                height: 10%;
                text-align: center;
                background-color: #AAD9EC;
            }
        </style>
    </head>
    <body id="fondo"><br><br><br>
        <table id="contenedor">
            <thead>
                <tr>
                    <td id="filas" colspan="7"><h3><br>Información acerca de las instituciones</h3></td>
                </tr>
                <tr>
                    <th id="nom_dato">Enfermedad</th>
                    <th id="nom_dato">Organización</th>
                    <th id="nom_dato">Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query="SELECT * FROM datos_ayuda";
                $statement = $pdo->query($query);
                while($fila = $statement->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td id="celda"><?php echo $fila['enfermedad'];?></td>
                    <td id="celda"><?php echo $fila['organizacion'];?></td>
                    <td id="celda"><?php echo $fila['telefono'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>    
    </body>
</html>