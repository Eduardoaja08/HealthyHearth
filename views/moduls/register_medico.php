<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
    <h2 class="text-2xl font-semibold mb-6">Registro de Médico</h2>

    <!-- Formulario de Registro -->
    <form action="#" method="post" enctype="multipart/form-data">

        <!-- Nombre y Apellido -->
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-medium">Nombre y Apellido</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <!-- Correo Electrónico -->
        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <!-- Contraseña -->
        <div class="mb-4">
            <label for="password" class="block text-gray-600 text-sm font-medium">Contraseña</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <!-- Especialidad -->
        <div class="mb-4">
            <label for="specialty" class="block text-gray-600 text-sm font-medium">Especialidad</label>
            <input type="text" id="specialty" name="specialty" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <!-- Cargar Archivo PDF -->
        <div class="mb-6">
            <label for="pdfFile" class="block text-gray-600 text-sm font-medium">Cargar Curriculum</label>
            <input type="file" id="pdfFile" name="pdfFile" accept=".pdf" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Botón de Registro -->
        <div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                Registrar 
            </button>
        </div>
    </form>
</div>

</body>
</html>
