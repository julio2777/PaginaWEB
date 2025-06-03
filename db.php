<?php
$host = getenv('DB_HOST') ?: 'mysql-proyecto.mysql.database.azure.com';
$user = getenv('DB_USER') ?: 'adminuser@mysql-proyecto';
$pass = getenv('DB_PASS') ?: 'Pelusarex777';
$dbname = getenv('DB_NAME') ?: 'proyecto';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
