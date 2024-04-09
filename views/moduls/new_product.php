<div class="container mx-auto mt-10">
  <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Agregar Nuevo Producto</h2>
    <form action="#" method="post">
      <!-- Nombre del Producto -->
      <div class="mb-4">
        <label for="nombre" class="block text-gray-700 text-sm font-medium mb-2">Nombre del Producto</label>
        <input type="text" id="nombre" name="nombre" class="w-full p-2 border rounded-md">
      </div>

      <!-- Descripción -->
      <div class="mb-4">
        <label for="descripcion" class="block text-gray-700 text-sm font-medium mb-2">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="3" class="w-full p-2 border rounded-md"></textarea>
      </div>

      <!-- Precio -->
      <div class="mb-4">
        <label for="precio" class="block text-gray-700 text-sm font-medium mb-2">Precio</label>
        <input type="number" id="precio" name="precio" class="w-full p-2 border rounded-md">
      </div>

      <!-- Imagen del Producto -->
      <div class="mb-4">
        <label for="imagen" class="block text-gray-700 text-sm font-medium mb-2">Imagen del Producto</label>
        <input type="file" id="imagen" name="imagen" class="w-full p-2 border rounded-md">
      </div>

      <!-- Stock -->
      <div class="mb-4">
        <label for="stock" class="block text-gray-700 text-sm font-medium mb-2">Cantidad en Stock</label>
        <input type="number" id="stock" name="stock" class="w-full p-2 border rounded-md">
      </div>

      <!-- Botón de Envío -->
      <div class="flex items-center justify-end">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-800">
          Agregar Producto
        </button>
      </div>
    </form>
  </div>
</div>
