<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de OnlyDevs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilo para el texto que se mostrará por 3 segundos */
        .show-text {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo semitransparente */
        }
    </style>

</head>
<body class="bg-gray-100">
<!-- Texto "OnlyDevs" visible por 3 segundos -->
<div class="show-text">
    OnlyDevs
</div>
<!-- Navbar -->
<nav class="bg-blue-700 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-white text-xl font-bold">OnlyDevs</a>
        
        <!-- Menú de navegación -->
        <ul class="flex space-x-4">
            <li><a href="/WEB/servicios.php">Servicios</a></li>
            <li><a href="/WEB/staff.php">Quiénes Somos</a></li>
            <li><a href="/cuenta">Cuenta</a></li>
        </ul>
    </div>
</nav>

<div class="flex">
    <div class="w-1/2 h-screen flex flex-col items-center justify-center bg-blue-500 text-white">
        <h1 class="text-3xl font-bold">OnlyDevs</h1>
        <p class="text-sm mt-2">Mostrando más que código</p>
    </div>
    

    <!-- Mitad derecha con el formulario y botones -->
    <div class="w-1/2 h-screen flex items-center justify-center">
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <!-- Formulario de inicio de sesión -->
            <form action="/BACKEND/autenticar.php" method="POST">
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo electrónico</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Contraseña</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Iniciar sesión</button>
    </form>

             <!-- Botón de Registrarse -->
             <button onclick="window.location.href='/WEB/registro.php'" class="w-full mt-4 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring focus:border-green-300">Registrarse</button>

            <!-- Opciones de inicio de sesión con redes sociales -->
            <div class="mt-4">
                <p class="text-sm">Iniciar sesión con:</p>
                <div class="flex mt-2">
                    <button class="flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 3.5C22 2.67 21.33 2 20.5 2H3.5A1.5 1.5 0 0 0 2 3.5v17A1.5 1.5 0 0 0 3.5 22h8.21v-7.19H9V12h2.71V9.61c0-2.68 1.64-4.14 4.02-4.14 1.15 0 2.14.08 2.43.12v2.82h-1.67c-1.31 0-1.58.62-1.58 1.55V12H16l-.79 3.81h-2.71V22h5.29A1.5 1.5 0 0 0 21 20.5v-17z"/>
                        </svg>
                        Twitter
                    </button>
                    <button class="flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.92 2.75C13.58 2.67 13.29 2.85 13.13 3.18 11.64 6.28 8.09 8.47 4.73 8.47 2.47 8.47 1 6.94 1 4.68 1 3.64 1.91 2.74 3 2.74c1.24 0 2.27.9 2.27 2.01 0 1.56-.97 4.03-2.13 5.88-.19.27-.48.42-.78.42-.15 0-.3-.04-.43-.11-.24-.1-.4-.30-.45-.54-.06-.25.04-.48.19-.71C1.21 9.4 2.56 7.76 4.29 7.31c1.14-.27 2.06-1.18 2.33-2.31.11-.55.63-.94 1.21-.94 1.04 0 1.88 1.11 1.88 2.38 0 .68-.28 1.29-.74 1.74.09.1.17.24.22.39.2.64.78 1.10 1.46 1.10 2.18 0 3.68-2.65 3.68-4.84 0-.08 0-.15 0-.23 0-.39-.3-.70-.7-.70-.31 0-.57.22-.66.52-.09.37-.35.67-.71.76-.64.17-1.17-.42-1.17-.97 0-.08 0-.15.01-.23.01-.56-.39-1.02-.95-1.02-.37 0-.69.20-.88.49-.28.36-.71.59-1.18.59-.97 0-1.74-.99-1.74-2.22 0-1.22.78-2.21 1.74-2.21.43 0 .83.19 1.11.52.16.17.37.28.60.28.35 0 .64-.29.64-.64 0-.21-.06-.39-.18-.56.52-.11.94-.56 1.06-1.12z"/>
                        </svg>
                        Facebook
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Sección de últimos posts destacados -->
<div class="bg-gray-100 py-8">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-center mb-4">Latest Featured Posts</h2>
        
        <!-- Primer post destacado -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-lg mb-4">
            <div class="w-1/4">
                <img src="/IMAGES/fabios.jpeg" alt="Imagen del post" class="w-full rounded-lg">
            </div>
            <div class="w-3/4 px-4">
                <h3 class="text-xl font-semibold">Fabios discutiendo</h3>
                <p class="text-gray-600">Jorge Boolean - Hace 2 horas</p>
                <p class="mt-2">Amigos parecidos discutiendo si eran sucesos excluyentes o incluyentes.</p>
            </div>
        </div>

        <!-- Puedes agregar más posts destacados aquí -->

    </div>
</div>
<!-- Footer -->
<footer class="bg-blue-500 text-white text-center py-4">
    <p>&copy; 2023 OnlyDevs. Todos los derechos reservados.</p>
</footer>
<script>
    // Función para ocultar el texto después de 3 segundos
    setTimeout(function () {
        var showText = document.querySelector('.show-text');
        showText.style.display = 'none';
    }, 2000); // 3000 milisegundos = 3 segundos
</script>
</body>
</html>

