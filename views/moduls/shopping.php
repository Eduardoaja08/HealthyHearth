<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body> -->
<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Carrito de compras</a>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Carrito de compras</h1>



      <form class="mt-12 lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">+






        <section aria-labelledby="cart-heading" class="lg:col-span-7">
          <h2 id="cart-heading" class="sr-only">Productos</h2>
          <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">



          <?php
              $listarProductos = new ControladorCarrito();
              $lista = $listarProductos->ctrMostrarTotalCarrito($_SESSION["id"]);

              foreach ($lista as $producto) {

              ?>




          <li class="flex py-6 sm:py-10">
            <div class="flex-shrink-0">
              <img
                src="views/img/product-1.jpg"
                alt="Front of men's Basic Tee in sienna."
                class="w-24 h-24 rounded-md object-center object-cover sm:w-48 sm:h-48"
              />
            </div>





            
            <div class="ml-4 flex-1 flex flex-col justify-between sm:ml-6">
              <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                <div>
                  <div class="flex justify-between">
                    <h3 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800"><?php echo $producto['NOMBRE_PRODUCTO']; ?></a>
                    </h3>
                  </div>
                  <div class="mt-1 flex text-sm">
                    <p class="text-gray-500">240 gr</p>
                    <p class="ml-4 pl-4 border-l border-gray-200 text-gray-500">Grande</p>
                  </div>
                  <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:pr-9">
                  <label for="quantity-0" class="sr-only">Quantity, Basic Tee</label>
                  <select
                    id="quantity-0"
                    name="quantity-0"
                    class="max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                  <div class="absolute top-0 right-0">
                    <button type="button" class="-m-2 p-2 inline-flex text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Eliminar</span>
                      <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <p class="mt-4 flex text-sm text-gray-700 space-x-2">
                <svg class="flex-shrink-0 h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>En stock</span>
              </p>
            </div>
          </li>
         




<?php } 
?>


          </ul>
        </section>











        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
          <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Resumen</h2>
          <dl class="mt-6 space-y-4">
          <div class="flex items-center justify-between">
            <dt class="text-sm text-gray-600">Subtotal</dt>
            <dd class="text-sm font-medium text-gray-900">$99.00</dd>
            </div>
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="flex items-center text-sm text-gray-600">
                <span>Estimación de compra</span>
                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Learn more about how shipping is calculated</span>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                </a>
            </dt>
            <dd class="text-sm font-medium text-gray-900">$5.00</dd>
            </div>
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="flex text-sm text-gray-600">
                <span>IVA</span>
                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Learn more about how tax is calculated</span>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                </a>
            </dt>
            <dd class="text-sm font-medium text-gray-900">$8.32</dd>
            </div>
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="text-base font-medium text-gray-900">Total</dt>
            <dd class="text-base font-medium text-gray-900">$112.32</dd>
            </div>

          </dl>
          <div class="mt-6">
            <button type="submit" class="w-full bg-green-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-green-500">
              Comprar
            </button>
          </div>
        </section>
      </form>





    </div>
  </div>






