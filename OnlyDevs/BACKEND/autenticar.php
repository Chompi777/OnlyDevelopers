<?php
// Activa los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtén los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Conectarse a la base de datos
$db = pg_connect("host=localhost port=5432 dbname=db_prueba user=postgres password=postgres");

if (!$db) {
    echo "<p><b>Ocurrió un error conectando a la base de datos.</b></p>";
} else {
    // Consulta para obtener el registro del usuario por su correo electrónico
    $query = "SELECT id, contraseña FROM usuarios WHERE correo = '$email'";
    $result = pg_query($db, $query);

    if (!$result) {
        echo "<p><b>Error al ejecutar la consulta.</b></p>";
    } else {
        // Verificar si se encontró un registro
        if ($row = pg_fetch_assoc($result)) {
            $hash = $row['contraseña'];

            // Verificar la contraseña
            if (password_verify($password, $hash)) {
                // Contraseña válida, el usuario ha iniciado sesión con éxito

                // Redirige al usuario a post.php en la carpeta API
                header("Location: /API/post.php");
                exit; // Asegúrate de terminar la ejecución del script después de redirigir.

            } else {
                // Contraseña incorrecta
                echo "<p><b>Contraseña incorrecta. Inténtalo de nuevo.</b></p>";
            }
        } else {
            // El correo electrónico no se encuentra en la base de datos
            echo "<p><b>Correo electrónico no registrado.</b></p>";
        }
    }

    // Cerrar la conexión a la base de datos
    pg_close($db);
}
?>
