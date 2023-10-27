<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de OnlyDevs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <!-- //iconos  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-white text-xl font-bold">OnlyDevs</a>
        
        <!-- Menú de navegación -->
        <ul class="flex space-x-4">
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="staff.php">Quiénes Somos</a></li>
            <li><a href="/cuenta">Cuenta</a></li>
        </ul>
    </div>
</nav>
<div class="container mx-auto mt-10" >
    <h2 class="text-2xl font-bold text-center mb-4">Registro de OnlyDevs</h2>
    
    <!-- Formulario de registro -->
    <form class="w-1/2 mx-auto bg-white p-8 rounded-lg shadow-lg" action="/BACKEND/procesar_registro.php" method="post">
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo electrónico</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
    <label for="contraseña" class="block text-sm font-medium">Contraseña</label>
    <div class="relative">
        <input type="password" id="contraseña" name="contraseña" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        <span id="toggle-password" class="absolute top-2 right-2 cursor-pointer">
            <i class="fa fa-eye-slash" aria-hidden="true"></i>
        </span>
    </div>
</div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Registrarse</button>
            <!-- <div class="mb-4">
                <label for="codigo" class="block text-sm font-medium">Código de Verificación</label>
                 <input type="text" id="codigo" name="codigo" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
            </div> -->
    </form>
   

</div>
<!-- procesar_registro.php -->

<script>
    const passwordInput = document.getElementById('contraseña');
    const togglePassword = document.getElementById('toggle-password');

    togglePassword.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        } else {
            passwordInput.type = 'password';
            togglePassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        }
    });
</script>



</body>
</html>