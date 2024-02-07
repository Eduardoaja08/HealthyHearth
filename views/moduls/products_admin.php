<main class="flex-1">
        <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-900">Productos</h1>
        <a href="?page=new_product"><button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
        </button></a>
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
                        <th class="py-2 px-4 border-b">Productos</th>
                        <th class="py-2 px-4 border-b">Descripción</th>
                        <th class="py-2 px-4 border-b">Precio</th>
                        <th class="py-2 px-4 border-b">Stock</th>
                        <th class="py-2 px-4 border-b">Imagen</th>
                        <th class="py-2 px-4 border-b">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Fila de ejemplo - Repite esto para cada producto -->
                    <tr>
                        <td class="py-2 px-4 border-b">Suplemento sabor fresa</td>
                        <td class="py-2 px-4 border-b">Fresa Liofilizada/Paquete con 8 pzas/Snack Saludable...</td>
                        <td class="py-2 px-4 border-b">$200.00</td>
                        <td class="py-2 px-4 border-b">45</td>
                        <td class="py-2 px-4 border-b">
                        <img src="views/img/product-1.jpg" alt="Producto 1" class="w-10 h-10 object-cover rounded-full">
                        </td>
                        <td class="py-2 px-4 border-b">
                        <button class="btn btn-edit"><i class="fas fa-edit"></i> Editar</button>
                        <button class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Suplemento sabor fresa</td>
                        <td class="py-2 px-4 border-b">Fresa Liofilizada/Paquete con 8 pzas/Snack Saludable...</td>
                        <td class="py-2 px-4 border-b">$200.00</td>
                        <td class="py-2 px-4 border-b">45</td>
                        <td class="py-2 px-4 border-b">
                        <img src="views/img/product-1.jpg" alt="Producto 1" class="w-10 h-10 object-cover rounded-full">
                        </td>
                        <td class="py-2 px-4 border-b">
                        <button class="btn btn-edit"><i class="fas fa-edit"></i> Editar</button>
                        <button class="btn btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</button>
                        </td>
                    </tr>
          <!-- Repite para otros productos -->
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
