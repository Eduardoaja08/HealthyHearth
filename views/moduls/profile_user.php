
<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
<br>
<a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Mi perfil</a>
     
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-md shadow-md">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-semibold text-gray-900"></h2>
    <a href="?page=edit_profile_user">
      <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-blue-800">
        Editar Perfil
      </button>
    </a>
  </div>

  <div class="flex items-center">
    <!-- Foto de perfil -->
    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
         alt="Foto de perfil" class="w-20 h-20 rounded-full mr-4">

    <!-- Información del perfil -->
    <div>
      <h3 class="text-lg font-semibold text-gray-800">Juan Perez</h3>
      <p class="text-gray-600">Correo Electrónico: admin@example.com</p>
      <p class="text-gray-600">Teléfono: +123 456 789</p>
      <!-- Otras informaciones del perfil -->
    </div>
  </div>

  <!-- Tabla o cualquier otro elemento que desees agregar -->
<div class="mt-6">
  <h3 class="text-xl font-semibold text-gray-800 mb-2">Próximas Citas</h3>
  <!-- Puedes agregar aquí tu tabla u otro contenido -->
  <table class="min-w-full bg-white border border-gray-200">
    <!-- Encabezados de la tabla -->
    <thead>
      <tr>
        <th class="py-2 px-4 border-b">Fecha</th>
        <th class="py-2 px-4 border-b">Hora</th>
        <th class="py-2 px-4 border-b">Tipo de Cita</th>
        <th class="py-2 px-4 border-b">Ubicación</th>
      </tr>
    </thead>
    <!-- Contenido de la tabla -->
    <tbody>
      <!-- Ejemplo de una cita -->
      <tr>
        <td class="py-2 px-4 border-b">12 de agosto de 2022</td>
        <td class="py-2 px-4 border-b">15:30</td>
        <td class="py-2 px-4 border-b">Consulta Médica</td>
        <td class="py-2 px-4 border-b">Clínica XYZ</td>
      </tr>
      <!-- Puedes agregar más filas según sea necesario -->
    </tbody>
  </table>
</div>


  <br>
  <a href="?page=agendar">
    <button type="submit" class="w-auto bg-green-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-green-500">
      Cerrar sesión
    </button>
  </a>
</div>


