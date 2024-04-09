                                                                               

<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Nutriólogos</a>
     

<div class="font-sans bg-white">

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-6 border-b border-gray-200">

    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Productos</h1>

   
    <div class="flex-1 flex">
            <form class="w-full flex md:ml-0" action="#" method="GET">
              <label for="search-field" class="sr-only">Buscar</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                <i class="fas fa-search mr-2"></i>
                </div>
                <input
                  id="search-field"
                  class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm"
                  placeholder="Buscar"
                  type="search"
                  name="search"
                />
              </div>
            </form>
          </div>
    <section aria-labelledby="products-heading" class="pt-6 pb-24">
      <h2 id="products-heading" class="sr-only">Products</h2>

      <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10 mt-6 lg:mt-10">
        <!-- Filtrado (izquierda) -->
        <!-- Filtrado (izquierda) -->
<form class="hidden lg:block">
  <h3 class="text-lg font-medium text-gray-900 mb-2">Categories</h3>

  <!-- Enlaces de subcategorías -->
  <ul role="list" class="text-sm font-medium text-gray-900 space-y-2">
    <li><a href="#" class="hover:text-green-600" style="color: black;">Suplementos</a></li>
    <li><a href="#" class="hover:text-green-600" style="color: black;">Proteinas</a></li>
    <li><a href="#" class="hover:text-green-600" style="color: black;">Recetas saludables</a></li>
    <!-- Agrega más enlaces según sea necesario -->
  </ul>

  <!-- Filtros (color, categoría, tamaño) -->
  <div class="mt-6 border-t border-gray-200 pt-6">
    <h3 class="text-lg font-medium text-gray-900 mb-2">Precio</h3>
    <div class="space-y-2">
      <div class="flex items-center">
        <input id="color-white" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
        <label for="color-white" class="ml-2 text-sm text-gray-600"> menor de $ 100 </label>
      </div>
      <div class="flex items-center">
        <input id="color-beige" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
        <label for="color-beige" class="ml-2 text-sm text-gray-600"> mayor de $ 100</label>
      </div>
      <!-- Agrega más checkboxes según sea necesario -->
    </div>
  </div>

  <div class="mt-6 border-t border-gray-200 pt-6">
    <h3 class="text-lg font-medium text-gray-900 mb-2">Tamaño</h3>
    <div class="space-y-2">
      <div class="flex items-center">
        <input id="size-2l" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
        <label for="size-2l" class="ml-2 text-sm text-gray-600">Chico</label>
      </div>
      <div class="flex items-center">
        <input id="size-6l" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
        <label for="size-6l" class="ml-2 text-sm text-gray-600">Mediano</label>
      </div>
      <div class="flex items-center">
        <input id="size-6l" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
        <label for="size-6l" class="ml-2 text-sm text-gray-600">Grande</label>
      </div>
    </div>
  </div>
</form>


        <!-- Contenido del producto (derecha) -->
        <div class="lg:col-span-3">
          <!-- Contenido de productos, por ejemplo, cuadrícula de productos -->
           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
 
           <?php

          $listarProductos = new ControladorProductos();
          $lista = $listarProductos->ctrMostrarTotalProductos();

          foreach ($lista as $producto) {

          ?>
   


              <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
              <img class="w-auto h-32 object-cover mb-4 rounded-md" src="<?php echo $producto['FOTO']; ?>" alt="Imagen del producto">
              <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo $producto['NOMBRE_PRODUCTO']; ?></h3>
              <p class="text-gray-500 mb-4" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 160px;"><?php echo $producto['DESCRIPCION']; ?></p>
              <p class="text-green-600 font-bold">$<?php echo $producto['PRECIO']; ?></p>
              <form method="post">
                <input type="hidden" name="producto_id" value="<?php echo $producto['ID_PRODUCTO']; ?>">
                <input type="submit" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700" name="agregar" value="Agregar al carrito">
            </form>
  </div>
    <?php
  }
  ?>
</div>
            <?php

            if(isset($_POST['agregar'])) { 
              $agregarProducto = new ControladorCarrito();
              $agregarProducto->ctrAgregarAlCarrito(
                $_SESSION["id"],
                $_POST['producto_id']
              );
            }

            ?>



        </div>
      </div>
    </section>
  </main>
</div>
