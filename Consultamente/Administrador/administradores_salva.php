<?php
session_start();
$host = "localhost";
$dbname = "consultamente";
$user = "postgres";
$password = "Carlos18";
$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$pass = $_REQUEST['pass'];

$query = "INSERT INTO administrador
        (nombre, correo, contraseña)
        VALUES ('$nombre', '$correo', '$pass')";

$statement = $pdo->query($query);

$query2 = "SELECT * FROM administrador WHERE correo = '$correo' AND contraseña = '$pass'";
$statement2 = $pdo->query($query2);
$row = $statement2->fetch(PDO::FETCH_ASSOC);
$nombre_temp= $row["nombre"];
$_SESSION['nombre_temp'] = $nombre_temp;

header("Location: bienvenido.php");
?>
