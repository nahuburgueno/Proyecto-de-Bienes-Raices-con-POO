<?php 

// Importar la conexion
require "includes/app.php";
$db = conectarDB();

//Crear un email y password
$email = "correo@correo.com";
$password = 'nacional12';

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash');";

echo $query;

//Agregarlo a la base de datos

mysqli_query($db, $query);

?>