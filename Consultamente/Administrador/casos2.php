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
        <title>Tablas</title>
        <script src='JS/jquery.js'></script>
        <script>
            var rol=document.forma01.rol.value;
            function cambio(){
                var select = document.getElementById("rol");
                var selectedOption = select.options[select.selectedIndex];
                var url = selectedOption.value;
                if (url) {
                    window.location.href = url;
                }
            }
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
                    <td>
                        <form action="" name="forma01"></form>
                        <label for="rol">Selecciona la tabla</label>
			            <select name="rol" id="rol" onchange="cambio()">
                        <option value="0" selected>Selecciona</option>
                        <option value="casos.php">Casos en México</option>
                        <option value="casos2.php">Niños con signos de preocupación</option>
                        <option value="casos3.php">Casos de suicidios</option>			
                        </select>
                    </td>
                </tr>
                <tr>
                    <td id="filas" colspan="7"><h3><br>Casos en la república mexicana</h3></td>
                </tr>
                <tr>
                    <?php ?>
                    <th id="nom_dato">Estado</th>
                    <th id="nom_dato">Porcentaje de niños con signos de preocupación (% basado en cada 100 niños)</th>
                    <?php ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query="SELECT * FROM datos_prevencion_niños";
                $statement = $pdo->query($query);
                while($fila = $statement->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td id="celda"><?php echo $fila['estado'];?></td>
                    <td id="celda"><?php echo $fila['sentimientos_preocupacion'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>    
    </body>
</html>