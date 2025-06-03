<?php
// Configuración
$host = 'mysql-proyecto.mysql.database.azure.com';
$user = 'adminuser@mysql-proyecto';
$pass = 'Pelusarex777';
$dbname = 'proyecto';

// Ruta al certificado (verifica la ruta exacta)
$ssl_cert = __DIR__ . '/certs/DigiCertGlobalRootCA.crt.pem';

// Verificación del certificado
if (!file_exists($ssl_cert)) {
    die("ERROR: Certificado no encontrado en:<br>" . realpath($ssl_cert));
}

// Conexión con manejo mejorado de errores
$conn = mysqli_init();
mysqli_options($conn, MYSQLI_OPT_CONNECT_TIMEOUT, 5);
mysqli_ssl_set($conn, NULL, NULL, $ssl_cert, NULL, NULL);

if (!mysqli_real_connect($conn, $host, $user, $pass, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    // Detalles extendidos del error
    $error = [
        'message' => mysqli_connect_error(),
        'code' => mysqli_connect_errno(),
        'ssl_cert_path' => realpath($ssl_cert),
        'ssl_cert_exists' => file_exists($ssl_cert) ? 'Sí' : 'No'
    ];
    die(json_encode($error, JSON_PRETTY_PRINT));
}

echo "<!-- Conexión exitosa -->";
?>