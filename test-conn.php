<?php
// Mostrar todos los errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'db.php';

// Test 1: Verificar conexión
echo "<pre>";
echo "=== Versión MySQLi: " . mysqli_get_client_info() . "\n";

// Test 2: Consulta simple
$result = $conn->query("SELECT VERSION() AS mysql_version");
print_r($result->fetch_assoc());

// Test 3: Verificar SSL
$result = $conn->query("SHOW STATUS LIKE 'Ssl_cipher'");
print_r($result->fetch_assoc());
?>