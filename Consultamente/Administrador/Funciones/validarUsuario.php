<?php
session_start();

$mail = $_REQUEST['usuario'];
$contra = $_REQUEST['password'];

$host = "localhost";
$dbname = "consultamente";
$user = "postgres";
$password = "Carlos18";
$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

$query = "SELECT * FROM administrador WHERE correo = '$mail' AND contraseña = '$contra'";
$statement = $pdo->query($query);

if($statement->rowCount() > 0){
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $nombre_temp= $row["nombre"];
    $_SESSION['nombre_temp'] = $nombre_temp;
    
}

if($statement->rowCount() > 0){
    $res=1;
    echo($res);
} else {
    $res=0;
    echo($res);
}
?>