<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configura tus metadatos y enlaces CSS si es necesario -->
    <title>Consulta de Pokémon e Ítems - OnlyDevs</title>
    <!-- Enlace al archivo de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
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
    <h1 class="text-3xl font-bold">Consulta de Pokémon e Ítems</h1>
    <div class="mt-4">
        <!-- Formulario para consultar Pokémon -->
        <form id="pokemonForm" class="mb-4">
            <div class="flex items-center">
                <label for="pokemonName" class="mr-2">Nombre del Pokémon:</label>
                <input type="text" id="pokemonName" name="pokemonName" required class="px-2 py-1 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300">
                <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Consultar Pokémon</button>
            </div>
        </form>
        <div id="pokemonData">
            <!-- Aquí se mostrarán los datos del Pokémon -->
        </div>
    </div>

    <div class="mt-8">
        <!-- Formulario para consultar Ítems -->
        <h2 class="text-2xl font-bold">Consulta de Ítems</h2>
        <form id="itemForm" class="mb-4">
            <div class="flex items-center">
                <label for="itemName" class="mr-2">Nombre del Ítem:</label>
                <input type="text" id="itemName" name="itemName" required class="px-2 py-1 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:border-blue-300">
                <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Consultar Ítem</button>
            </div>
        </form>
        <div id="itemData">
            <!-- Aquí se mostrarán los datos del Ítem -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Función para consultar datos del Pokémon
            $("#pokemonForm").submit(function (event) {
                event.preventDefault();

                var pokemonName = $("#pokemonName").val();

                $.ajax({
                    url: "https://pokeapi.co/api/v2/pokemon/" + pokemonName + "/",
                    dataType: "json",
                    success: function (data) {
                        var pokemonData = data;
                        var output = "<h2>Datos de " + pokemonName + "</h2>";
                        output += "Nombre: " + pokemonData.name + "<br>";
                        output += "Altura: " + pokemonData.height + "<br>";
                        output += "Peso: " + pokemonData.weight + "<br>";

                        if (pokemonData.sprites && pokemonData.sprites.front_default) {
                            output += "<img src='" + pokemonData.sprites.front_default + "' alt='Imagen de " + pokemonData.name + "'>";
                        }

                        $("#pokemonData").html(output);
                    },
                    error: function () {
                        $("#pokemonData").html("El Pokémon ingresado no se encontró en la base de datos.");
                    }
                });
            });

            // Función para consultar datos del Ítem
            $("#itemForm").submit(function (event) {
                event.preventDefault();

                var itemName = $("#itemName").val();

                $.ajax({
                    url: "https://pokeapi.co/api/v2/item/" + itemName + "/",
                    dataType: "json",
                    success: function (data) {
                        var itemData = data;
                        var output = "<h2>Datos del Ítem " + itemName + "</h2>";
                        output += "Nombre: " + itemData.name + "<br>";

                        // Agregar más detalles de ítem si es necesario

                        $("#itemData").html(output);
                    },
                    error: function () {
                        $("#itemData").html("El ítem ingresado no se encontró en la base de datos.");
                    }
                });
            });
        });
    </script>
</body>
</html>
