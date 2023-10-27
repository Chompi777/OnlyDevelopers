<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Equipo</title>
    <!-- Agrega los enlaces a los estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
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
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8">Nuestro Equipo</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Tarjeta de Salvador Guerra -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/Images/CHAMBA.jpg" alt="Salvador Guerra" class="w-32 h-32 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-gray-800">Salvador Guerra</h3>
                </div>

                <!-- Tarjeta de David Díaz -->ren
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/Images/DAVIDDIAZ.jpg" alt="David Díaz" class="w-32 h-32 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-gray-800">David Díaz</h3>
                </div>

                <!-- Tarjeta de Melvin Aguilar -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/IMAGES/malvino.jpeg" alt="Melvin Aguilar" class="w-32 h-32 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-gray-800">Melvin Aguilar</h3>
                </div>

                <!-- Tarjeta de Henri Lima -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/IMAGES/henry.jpg" alt="Henry Lima" class="w-32 h-32 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-gray-800">Henry Lima</h3>
                </div>
            </div>
        </div>
    </section>
    <div class="container mx-auto mt-10" >
    <h2 class="text-2xl font-bold text-center mb-4">Quisieras ser developer de OnlyDevs?</h2>
    
    <!-- Formulario de registro -->
    <form class="w-1/2 mx-auto bg-white p-8 rounded-lg shadow-lg" action="procesar_registro.php" method="post">
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Correo electrónico</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="numberP" class="block text-sm font-medium">Numero de telefono</label>
            <input type="tel" id="numberP" name="numberP" class="w-full px-4 py-2 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Enviar</button>
    </form>
</div>
</body>
</html>