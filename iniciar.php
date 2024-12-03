<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        session_regenerate_id(true); 
        $_SESSION['email'] = $email;
        header("Location: Semestral.html");
        exit();
    } else {
        header("Location: Registrate.php?error=Credenciales incorrectas, por favor regístrate");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>