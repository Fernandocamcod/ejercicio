<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Iniciar Sesión</title>
    <style>
        body {
            background: url('https://img.freepik.com/fotos-premium/mesa-madera-desenfoque-fondo-club-o-restaurante_219193-283.jpg?semt=ais_hybrid') no-repeat center center fixed;
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
            if (file_exists('login.html')) {
                include 'login.html';
            } else {
                echo "<p style='color: red;'>Error: El archivo login.html no se encontró.</p>";
            }
        ?>
        <form id="loginForm" action="../src/php/login.php" method="POST">
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
                    if (file_exists('register.html')) {
                        echo '<a href="register.html">Regístrate aquí</a>';
                    } else {
                        echo '<span style="color: red;">(Registro no disponible)</span>';
                    }
                ?>
            </p>
        </form>
    </div>
    <script src="js/scripts.js"></script>
</body>
</html>
