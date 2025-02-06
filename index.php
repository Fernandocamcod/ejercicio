<?php
session_start();

// Si el usuario ya inició sesión, redirigir al dashboard (ajusta la ruta según sea necesario)
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Iniciar Sesión</title>
    <style>
        body {
            background: url('https://img.freepik.com/foto-gratis/blur-cafe-cafeteria-restaurante-bokeh-fondo_1421-472.jpg?t=st=1738809615~exp=1738813215~hmac=1190cbc57c2fd8772ca005595819ad7f4f91fe301ea79d4ee732b7fcf5c608a4&w=996') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
        }
        button {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        p a {
            color: #17a2b8;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        
        <?php
        $loginPath = "public/login.html";
        if (is_file($loginPath)) {
            include $loginPath;
        } else {
            echo "<p style='color: red;'>Error: No se encontró el formulario de inicio de sesión.</p>";
        }
        ?>
        
        <form id="loginForm" action="php/login.php" method="POST">
            <div class="form-group">
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
            <p>No tienes una cuenta? 
                <?php
                $registerPath = "public/register.html";
                if (is_file($registerPath)) {
                    echo '<a href="'.$registerPath.'">Regístrate aquí</a>';
                } else {
                    echo '<span style="color: red;">(Registro no disponible)</span>';
                }
                ?>
            </p>
        </form>
    </div>
    <script src="public/js/scripts.js"></script>
</body>
</html>
