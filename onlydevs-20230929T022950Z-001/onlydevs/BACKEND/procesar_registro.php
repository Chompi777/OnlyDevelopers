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

// Enviar código por correo electrónico
//include 'enviar_codigo.php';

// Conectarse a la base de datos
echo "<p><b>Prueba de Conexión</b></p>";
$db = pg_connect("host=localhost port=5432 dbname=db_prueba user=postgres password=postgres");

if (!$db) {
    echo "<p><b>Ocurrió un error conectando a la base de datos.</b></p>";
} else {
    echo "<p><b>Conexión Exitosa</b></p>";

    // Consulta de inserción
    $query = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$email', '$contraseñaEncriptada')";

    $result = pg_query($db, $query);

    if (!$result) {
        echo "<p><b>Error al ejecutar la consulta de inserción.</b></p>";
    } else {
        echo "<p><b>Registro de usuario exitoso.</b></p>";
    }

    // Cerrar la conexión a la base de datos
    pg_close($db);
}
?>
