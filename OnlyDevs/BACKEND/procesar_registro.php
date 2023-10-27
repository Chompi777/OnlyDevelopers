<?php
// Activa los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Encriptar la contraseña
$contraseñaEncriptada = password_hash($contraseña, PASSWORD_DEFAULT);

// Conectarse a la base de datos
$db = pg_connect("host=localhost port=5432 dbname=db_prueba user=postgres password=postgres");

if (!$db) {
    echo "<p><b>Ocurrió un error conectando a la base de datos.</b></p>";
} else {
    // Consulta de inserción
    $query = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$email', '$contraseñaEncriptada')";

    $result = pg_query($db, $query);

    if (!$result) {
        echo "<p><b>Error al ejecutar la consulta de inserción.</b></p>";
    } else {
        echo "<p><b>Registro de usuario exitoso.</b></p>";
        
        // Redirigir al usuario a la página de inicio de sesión después de 2 segundos
        header("refresh:2;url=/index.html"); // Cambia "login.php" al nombre de tu página de inicio de sesión.
    }

    // Cerrar la conexión a la base de datos
    pg_close($db);
}
?>
