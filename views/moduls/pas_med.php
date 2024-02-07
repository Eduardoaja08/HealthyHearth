
<main class="flex-1">
        <div class="py-6">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Pacientes</h1>
          </div>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Contenido va aquí -->
            <div class="blog">
            <div class="container mx-auto">
                <div class="section-header text-center">
                <h2 class="text-3xl font-bold mb-4"></h2>
                </div>

                <!-- Tabla de productos -->
                <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
  <thead>
    <tr>
      <th class="text-center">Nombre</th>
      <th class="text-center">Edad</th>
      <th class="text-center">Fecha de inicio</th>
      <th class="text-center">Proxima cita</th>
      <th class="text-center">Foto</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- Fila de ejemplo - Repite esto para cada producto -->
    <tr>
        <td class="text-center">Luis Lopez</td>
        <td class="text-center">20 años</td>
        <td class="text-center">20/1/24</td>
        <td class="text-center">30/02/2024</td>
      <td class="text-center">
        <button class="btn btn-image-modal" onclick="openModal('imageModal2')">
          <img
            src="views/img/usu1.jpg"
            class="img-cat w-12 h-12 object-cover rounded-full cursor-pointer"
          >
        </button>

        <!-- Modal para la imagen -->
        <div
          id="imageModal1"
          class="modal fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-50"
        >
          <div class="modal-content mx-auto my-12 max-w-sm">
            <button
              class="modal-close absolute top-0 right-0 p-4 text-white"
              onclick="closeModal('imageModal1')"
            >&times;</button>
            <img
              src="views/img/team-1.jpg"
              class="w-full h-auto"
              alt="Imagen"
            >
          </div>
        </div>
      </td>
      <td class="py-2 px-4 border-b text-center">
        <button class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>

                </div>

                <!-- <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
                </div> -->
            </div>
            </div>

            <!-- Fin del contenido -->
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- JavaScript para el menú móvil y menú desplegable de usuario -->
  <script>
  // Funciones para abrir y cerrar el modal
  function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
  }

  function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
  }
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Menú para móviles
    const mobileMenuButton = document.querySelector('.md\\:hidden button');
    const mobileSidebar = document.querySelector('.md\\:hidden div[role="dialog"]');



    if (mobileMenuButton && mobileSidebar) {
      mobileMenuButton.addEventListener('click', function () {
        mobileSidebar.classList.toggle('translate-x-0');
      });
    }

    // Menú desplegable de usuario
    const userMenuButton = document.querySelector('.ml-3 > button');
    const userMenu = document.querySelector('.ml-3 > div');


    if (userMenuButton && userMenu) {
      userMenuButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Evitar que el clic se propague y cierre el menú móvil
        userMenu.classList.toggle('hidden');
      });

      // Cierra el menú desplegable de usuario al hacer clic fuera de él
      document.addEventListener('click', function (event) {
        if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
          userMenu.classList.add('hidden');
        }
      });
    }
  });
</script>

</body>

</html>




