
<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
<br>
<a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="profile_user" style="color: black;"> Mi perfil</a> / <a href="" style="color: black;"> Detalles de pedido</a>
  
<br/>
<div class="bg-white">
  <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Detalles de pedido</h1>
    <?php
    $listarPedido = new DetallesPedido();
    $lista = $listarPedido->ctrMostrarDetallesPedido($_SESSION["id"]);

    if (empty($lista)) {
      echo "<p>Esto esta muy vacío.</p>";
    } else {
    foreach ($lista as $producto) {
?>
    <div class="text-sm border-b border-gray-200 mt-2 pb-5 sm:flex sm:justify-between">
      <dl class="flex">
        <dt class="text-gray-500">Número de pedido&nbsp;</dt>
        <dd class="font-medium text-gray-900"><?php echo $producto["ID_PEDIDO"]; ?></dd>
        <dt>
          <span class="sr-only">Date</span>
          <span class="text-gray-400 mx-2" aria-hidden="true">&middot;</span>
        </dt>
        <dd class="font-medium text-gray-900">
          <time datetime="2021-03-22"><?php echo $producto["FECHA"]; ?></time>
        </dd>
      </dl>
      <!-- <div class="mt-4 sm:mt-0">
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
          View invoice<span aria-hidden="true"> &rarr;</span>
        </a>
      </div> -->
    </div>

    <div class="mt-8">
      <!-- <h2 class="sr-only">Products purchased</h2> -->

      <div class="space-y-24">
        <!-- Product Loop -->
        <div class="grid grid-cols-1 text-sm sm:grid-rows-1 sm:grid-cols-12 sm:gap-x-6 md:gap-x-8 lg:gap-x-8">
          <!-- Product Image -->
          <!-- <div class="sm:col-span-4 md:col-span-5 md:row-end-2 md:row-span-2">
            <div class="aspect-w-1 aspect-h-1 bg-gray-50 rounded-lg overflow-hidden">
              <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-04-product-01.jpg" alt="Off-white t-shirt with circular dot illustration on the front of mountain ridges that fade." class="object-center object-cover">
            </div>
          </div> -->
          <!-- Product Details -->
          <div class="mt-6 sm:col-span-7 sm:mt-0 md:row-end-1">
            <h3 class="text-lg font-medium text-gray-900">
              <!-- <a href="#">Distant Mountains Artwork Tee</a> -->
            </h3>
            <p class="font-medium text-gray-900 mt-1">Costo total: $ <?php echo $producto["TOTAL"]; ?></p>
            <!-- <p class="text-gray-500 mt-3">You awake in a new, mysterious land. Mist hangs low along the distant mountains. What does it mean?</p> -->
            <!-- Additional Details -->
            <dl class="grid grid-cols-1 gap-y-8 border-b py-8 border-gray-200 sm:grid-cols-2 sm:gap-x-6 sm:py-6 md:py-10">
              <!-- Delivery Address -->
              <div>
                <dt class="font-medium text-gray-900">Dirección de envío</dt>
                <dd class="mt-3 text-gray-500">
                  <span class="block"><?php echo $producto["DIRECCION_ENVIO"]; ?></span>
                  <!-- <span class="block">7363 Cynthia Pass</span>
                  <span class="block">Toronto, ON N3Y 4H8</span> -->
                </dd>
              </div>
              <!-- Shipping Updates -->
              <div>
                <dt class="font-medium text-gray-900">Datos</dt>
                <dd class="mt-3 text-gray-500 space-y-3">
                  <p><?php echo $_SESSION["nombre"]; ?></p>
                  <p><?php echo $_SESSION["email"]; ?></p>
                  <!-- <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</button> -->
                </dd>
              </div>
            </dl>
            <!-- Order Status -->
            <p class="font-medium text-gray-900 mt-6 md:mt-10">
              En proceso <time datetime="2021-03-24"><?php echo $producto["FECHA"]; ?></time>
            </p>
            <div class="mt-6">
              <div class="bg-gray-200 rounded-full overflow-hidden">
                <div class="h-2 bg-indigo-600 rounded-full" style="width: calc((1 * 2 + 1) / 8 * 100%)"></div>
              </div>
              <div class="hidden sm:grid grid-cols-4 font-medium text-gray-600 mt-6">
                <div class="text-indigo-600">Orden solicitada</div>
                <div class="text-center">En proceso</div>
                <div class="text-center">En camino</div>
                <div class="text-right">Entregado</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
  <div class="row">
  <?php
    $lista1 = $listarPedido->ctrMostrarDetallesPedidoProductos($producto["ID_PEDIDO"]);


    foreach ($lista1 as $productos) {
?>
  
    <!-- Producto 1 -->
    <div class="col-sm-2.5" style="margin: 15px;">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $productos["FOTO"]; ?>" class="card-img-top" alt="Producto 1" style="height: 250px;">
        <div class="card-body">

          <h5 class="card-title"><?php echo $productos["NOMBRE_PRODUCTO"]; ?></h5>
          <p class="card-text">$ <?php echo $productos["PRECIO"]; ?></p>
          <p class="card-text">Cantidad <?php echo $productos["NUMERO_PRODUCTOS"]; ?></p>
        </div>
      </div>
    </div>


<?php }   
        ?>
    <!-- Producto 2 -->
    <!-- <div class="col-sm-2.5" style="margin: 15px;">
      <div class="card" style="width: 18rem;">
        <img src="views/img/about.jpg" class="card-img-top" alt="Producto 2">
        <div class="card-body">
          <h5 class="card-title">Nombre del Producto 2</h5>
          <p class="card-text">$25.00</p>
        </div>
      </div>
    </div>

    <div class="col-sm-2.5" style="margin: 15px;">
      <div class="card" style="width: 18rem;">
        <img src="views/img/about.jpg" class="card-img-top" alt="Producto 2">
        <div class="card-body">
          <h5 class="card-title">Nombre del Producto 2</h5>
          <p class="card-text">$25.00</p>
        </div>
      </div>
    </div>


    <div class="col-sm-2.5" style="margin: 15px;">
      <div class="card" style="width: 18rem;">
        <img src="views/img/about.jpg" class="card-img-top" alt="Producto 2">
        <div class="card-body">
          <h5 class="card-title">Nombre del Producto 2</h5>
          <p class="card-text">$25.00</p>
        </div>
      </div>
    </div> -->

    <!-- Agrega más productos aquí -->
  </div>
</div>

    <div class="border-t border-black mt-8"></div>
        <br><br><br><br>
    <?php }   }
        ?>
    <!-- Billing Summary -->
    <!-- <div class="mt-24">
      <h2 class="sr-only">Billing Summary</h2>

      <div class="bg-gray-50 rounded-lg py-6 px-6 lg:px-0 lg:py-8 lg:grid lg:grid-cols-12 lg:gap-x-8">
        
        <dl class="grid grid-cols-1 gap-6 text-sm sm:grid-cols-2 md:gap-x-8 lg:pl-8 lg:col-span-5">
          <div>
            <dt class="font-medium text-gray-900">Billing address</dt>
            <dd class="mt-3 text-gray-500">
              <span class="block">Floyd Miles</span>
              <span class="block">7363 Cynthia Pass</span>
              <span class="block">Toronto, ON N3Y 4H8</span>
            </dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Payment information</dt>
            <dd class="mt-3 flex">
              <div>
                <svg aria-hidden="true" width="36" height="24" viewBox="0 0 36 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-auto">
                  <rect width="36" height="24" rx="4" fill="#224DBA"></rect>
                  <path d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" fill="#fff"></path>
                </svg>
                <p class="sr-only">Visa</p>
              </div>
              <div class="ml-4">
                <p class="text-gray-900">Ending with 4242</p>
                <p class="text-gray-600">Expires 02 / 24</p>
              </div>
            </dd>
          </div>
        </dl>

        
        <dl class="mt-8 divide-y divide-gray-200 text-sm lg:mt-0 lg:pr-8 lg:col-span-7">
          <div class="pb-4 flex items-center justify-between">
            <dt class="text-gray-600">Subtotal</dt>
            <dd class="font-medium text-gray-900">$72</dd>
          </div>
          <div class="py-4 flex items-center justify-between">
            <dt class="text-gray-600">Shipping</dt>
            <dd class="font-medium text-gray-900">$5</dd>
          </div>
          <div class="py-4 flex items-center justify-between">
            <dt class="text-gray-600">Tax</dt>
            <dd class="font-medium text-gray-900">$6.16</dd>
          </div>
          <div class="pt-4 flex items-center justify-between">
            <dt class="font-medium text-gray-900">Order total</dt>
            <dd class="font-medium text-indigo-600">$83.16</dd>
          </div>
        </dl>
      </div>
    </div> -->
  </div>
</div>
