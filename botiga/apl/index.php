<?php
// Si el usuario ya ha iniciado sesión, redirigir a otra página
session_start();
if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = ""; // Variable para guardar errores de login

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar el login (en este caso, con un nombre de usuario y contraseña estáticos)
    if ($username == "admin" && $password == "1234") {
        // Si es correcto, iniciar sesión y redirigir
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Página a la que se redirige después del login exitoso
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio - Login</title>
    <link rel="stylesheet" href="style.css"> <!-- Archivo CSS para estilos (opcional) -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        
        <?php if ($error): ?>
            <div class="error-message">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
