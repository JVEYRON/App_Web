<?php
// --- 1. Definir los parámetros de la base de datos ---
// Estos datos deben coincidir con la configuración de tu servidor local
$host = "localhost";
$usuario = "root";
$contrasena = "joshuamanuel"; 
$nombre_bd = "dbo"; // Nombre de la BD confirmado por el usuario
$puerto = 3306; 


$conexion = mysqli_connect($host, $usuario, $contrasena, $nombre_bd, $puerto);


if (mysqli_connect_errno()) {
    // Si la conexión falla, se detiene el script y muestra el error.
    die("Fallo en la conexión a MySQL: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");

// Nota: No se usa la etiqueta de cierre ?> para evitar problemas de headers.