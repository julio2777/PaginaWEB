<?php
require_once 'db.php';
$result = $conn->query("SHOW STATUS LIKE 'Ssl_cipher'");
print_r($result->fetch_assoc());

$result = $conn->query("SELECT u.id_usuario, u.nombre, u.ap_paterno, u.ap_materno, u.correo, r.rol
                        FROM usuarios u
                        JOIN roles r ON u.id_rol = r.id_rol");

echo "<h2>Lista de Usuarios</h2>";
echo "<table border='1'>
        <tr><th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Correo</th><th>Rol</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id_usuario']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['ap_paterno']}</td>
            <td>{$row['ap_materno']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['rol']}</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>
