<?php
$host = 'mysql-proyecto.mysql.database.azure.com';
$user = 'adminuser'; // Usuario sin @servidor (o con él, según tu configuración)
$pass = 'Pelusarex777';
$dbname = 'proyecto';
$port = 3306;

// Intenta conectar sin SSL
$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// ¡No cierres la conexión aquí! ($conn->close() se hará en usuarios.php)
?>