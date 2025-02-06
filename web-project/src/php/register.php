<?php
require_once 'db.php';
session_start(); // Iniciar sesión (puede ser útil más adelante)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connect();

    // Limpiar y validar entradas
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($username) || empty($password) || empty($confirm_password)) {
        die("❌ Por favor, complete todos los campos.");
    }

    if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        die("❌ El nombre de usuario solo puede contener letras, números y guiones bajos.");
    }

    if ($password !== $confirm_password) {
        die("❌ Las contraseñas no coinciden.");
    }

    // Verificar si el usuario ya existe
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        die("❌ El nombre de usuario ya está en uso.");
    }
    $stmt->close();

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insertar usuario en la base de datos
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        echo "✅ Registro exitoso. Puede iniciar sesión.";
        // Redirigir a login después de 3 segundos
        header("refresh:3;url=../public/login.html");
    } else {
        echo "❌ Error en el registro: " . $stmt->error;
    }

    // Cerrar conexiones
    $stmt->close();
    $conn->close();
}
?>
