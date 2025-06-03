<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club América - Azure</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #002D62, #F0F0F0);
            color: #FFF;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        
        header {
            background-color: #002D62;
            padding: 20px 0;
            border-bottom: 5px solid #FFD700;
            margin-bottom: 30px;
        }
        
        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 15px;
        }
        
        h1 {
            color: #FFD700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 2.5em;
        }
        
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #FFD700;
            color: #002D62;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: 2px solid #002D62;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn:hover {
            background-color: #002D62;
            color: #FFD700;
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        
        .stadium {
            margin-top: 40px;
            opacity: 0.7;
        }
        
        footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #002D62;
            color: #FFD700;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Club_America_logo.svg/1200px-Club_America_logo.svg.png" alt="Club América" class="logo">
            <h1>Bienvenido al Sitio Oficial en Azure</h1>
        </div>
    </header>
    
    <div class="container">
        <div class="menu">
            <a href="usuarios.php" class="btn">Ver Usuarios</a>
            <a href="roles.php" class="btn">Ver Roles</a>
        </div>
        
        <div class="stadium">
            <img src="https://estadioazteca.mx/wp-content/uploads/2021/06/estadio-azteca-panoramica.jpg" alt="Estadio Azteca" style="max-width: 100%; border-radius: 10px;">
        </div>
    </div>
    
    <footer>
        <div class="container">
            <p>© 2025 Club América - Todos los derechos reservados</p>
            <p>Desarrollado en Microsoft Azure</p>
        </div>
    </footer>
</body>
</html>