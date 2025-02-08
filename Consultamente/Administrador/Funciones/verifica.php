<?php
$mail=$_REQUEST['correo'];

$host = "localhost";
$dbname = "consultamente";
$user = "postgres";
$password = "Carlos18";
$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);

$query = "SELECT * FROM administrador WHERE correo = '$mail'";
$statement = $pdo->query($query);
if( $statement->rowCount() > 0) {
    $res=1;
    echo($res);
} else {
    $res=0;
    echo($res);
}
?>