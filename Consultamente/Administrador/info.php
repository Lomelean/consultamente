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
        <title>Info</title>
        <script src='JS/jquery.js'></script>
        <script>
            function enviar(){
                alert('Gracias! \n Mensaje enviado');
                $('#text').val(' ');
            }
        </script>
        <style>
            #com input[type="text"] {
            font-size: 20px; 
            width: 15%;
            height: 15%; 
            box-sizing: border-box; 
            }
            #comment{
			position: relative;
  			top: 100;
			left: 915;
		    }
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
                    <td id="filas" colspan="7"><h3><br>Información acerca de las enfermedades</h3></td>
                </tr>
                <tr>
                    <th id="nom_dato">Enfermedad mental</th>
                    <th id="nom_dato">Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query="SELECT * FROM informacion";
                $statement = $pdo->query($query);
                while($fila = $statement->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td id="celda"><?php echo $fila['enfermedad_mental'];?></td>
                    <td id="celda"><?php echo $fila['descripcion'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div id="comment">
            <label>
                <h3>¿Te gustaría saber de alguna otra enfermedad?</h3>
                <div id="com"><input type="text" name="text" id="text" placeholder="Compartenos tus sugerencias"></div>
                <button onclick="enviar()">Enviar</button>
            </label>
        </div>
    </body>
</html>