<?php
//enlazar base de datos con pagina

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'pipe';

try{
    $conexion = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
}catch(PDOException $error){
    die('No se estableció conexión'." " .$error->getMessage());
}
?>