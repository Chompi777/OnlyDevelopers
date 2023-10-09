<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyDevs - Servicios</title>
    <!-- Agrega los enlaces a los archivos CSS de Tailwind CSS -->
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
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Servicio 1: Codigos -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105 ">
                    <div class="text-2xl text-indigo-500 mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Códigos</h3>
                    <p class="text-gray-700">Desarrollo de aplicaciones web y móviles.</p>
                </div>

                <!-- Servicio 2: Cursos -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                    <div class="text-2xl text-indigo-500 mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Cursos</h3>
                    <p class="text-gray-700">Aprende tecnologías de vanguardia con nuestros cursos.</p>
                </div>

                <!-- Servicio 3: Diseños fotos y videos -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                    <div class="text-2xl text-indigo-500 mb-4">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Diseños Fotos y Videos</h3>
                    <p class="text-gray-700">Servicios de diseño gráfico y edición de video.</p>
                </div>

               <!-- Servicio 4: Otro servicio -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                    <div class="text-2xl text-indigo-500 mb-4">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Otro Servicio</h3>
                    <p class="text-gray-700">Descripción de otro servicio que ofreces.</p>
                    <div class="mt-4">
                        <div class="bg-red-500 text-white py-2 px-4 rounded-full text-center">Bloqueado</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>