<?php
if (php_sapi_name() == "cli") {
    // Simular datos POST en CLI
    $_SERVER["REQUEST_METHOD"] = "POST";
    $_POST['nombre'] = "Ricardo Fuentes";
    $_POST['email'] = "ricardo@example.com";
    $_POST['mensaje'] = "Este es un mensaje de prueba desde CLI.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Mostrar los datos recibidos
    echo "<h2>Datos recibidos:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
} else {
    echo "No se recibieron datos.";
}
