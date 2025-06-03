<?php
$host = 'mysql-proyecto.mysql.database.azure.com';
$user = 'adminuser@mysql-proyecto'; // Prueba también 'adminuser'
$pass = 'Pelusarex777';
$dbname = 'proyecto';
$ssl_cert = 'certs/DigiCertGlobalRootCA.crt.pem';

// Verifica que el certificado exista
if (!file_exists($ssl_cert)) {
    die("Error: Certificado SSL no encontrado en: $ssl_cert");
}

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $ssl_cert, NULL, NULL);

// Intenta conectar con SSL
if (!mysqli_real_connect($conn, $host, $user, $pass, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Error con SSL: " . mysqli_connect_error());
}

echo "¡Conexión exitosa con SSL!";
$conn->close();
?>