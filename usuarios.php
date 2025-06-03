<?php
// ==============================================
// CONEXIÓN A LA BASE DE DATOS
// ==============================================
$host = 'mysql-proyecto.mysql.database.azure.com';
$user = 'adminuser';
$pass = 'Pelusarex777';
$dbname = 'proyecto';
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// ==============================================
// HTML + DATATABLES
// ==============================================
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        .form-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn-action {
            margin: 0 3px;
            padding: 5px 10px;
        }
        .table-responsive {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Gestión de Usuarios</h1>
        

        <!-- Tabla de usuarios con DataTables -->
        <div class="table-responsive">
            <table id="usuariosTable" class="table table-striped table-hover" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("
                        SELECT u.id_usuario, u.nombre, u.ap_paterno, u.ap_materno, u.correo, r.rol, r.id_rol
                        FROM usuarios u
                        JOIN roles r ON u.id_rol = r.id_rol
                        ORDER BY u.id_usuario DESC
                    ");
                    
                    while ($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $row['id_usuario'] ?></td>
                        <td><?= htmlspecialchars($row['nombre']) ?></td>
                        <td><?= htmlspecialchars($row['ap_paterno']) ?></td>
                        <td><?= htmlspecialchars($row['ap_materno']) ?></td>
                        <td><?= htmlspecialchars($row['correo']) ?></td>
                        <td><?= $row['rol'] ?></td>
                        <td>
                            <a href="?editar=<?= $row['id_usuario'] ?>" class="btn btn-sm btn-warning btn-action" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <form method="POST" action="" style="display: inline;">
                                <input type="hidden" name="id_usuario" value="<?= $row['id_usuario'] ?>">
                                <button type="submit" name="eliminar" class="btn btn-sm btn-danger btn-action" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery, Bootstrap JS y DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#usuariosTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
                },
                responsive: true
            });
        });
    </script>
</body>
</html>

<?php
// Cerrar conexión
$conn->close();
?>