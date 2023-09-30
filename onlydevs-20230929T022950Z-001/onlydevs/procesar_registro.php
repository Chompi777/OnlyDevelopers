<?php
// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Conectar a la base de datos MariaDB
$conexion = new mysqli('localhost', 'root', 'contraseña_db', 'USERS');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Insertar datos del usuario en la tabla
$sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
