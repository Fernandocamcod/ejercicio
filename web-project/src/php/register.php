<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validación de campos
    if (empty($username) || empty($password) || empty($confirm_password)) {
        die("Por favor complete todos los campos.");
    }

    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Conexión a la base de datos
    $conn = connect();

    // Inserción del nuevo usuario
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        echo "Registro exitoso. Puede iniciar sesión.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>