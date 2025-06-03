<?php
require_once 'db.php';

$result = $conn->query("SELECT * FROM roles");

echo "<h2>Lista de Roles</h2>";
echo "<table border='1'>
        <tr><th>ID Rol</th><th>Rol</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id_rol']}</td><td>{$row['rol']}</td></tr>";
}
echo "</table>";

$conn->close();
?>
