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
<?php


$id_cita = $_GET['idCita'];


$listarProductos = new ControladorCitas();
$lista = $listarProductos->ctrObtenerCita($id_cita);


?>


<?php if ($id_cita) { ?>


<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="shopping" style="color: black;"> Carrito de compras</a> / <a href="" style="color: black;"> Pago</a>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Pago</h1>
      <div class="mt-12 lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">

        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
          <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Resumen</h2>
          <dl class="mt-6 space-y-4">
          <div class="flex items-center justify-between">
          <dt class="text-sm text-gray-600">Subtotal</dt>
            <dd class="text-sm font-medium text-gray-900">$ <?php if ($lista) { echo $lista['COSTO']; }?></dd>
            </div>
            <!-- <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
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
            </div> -->

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
            <dd class="text-sm font-medium text-gray-900"> $ <?php if ($lista) { echo $lista['COSTO'] * 0.16; } ?></dd>
            </div>
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="text-base font-medium text-gray-900">Total</dt>
            <dd class="text-base font-medium text-gray-900">$ <?php if ($lista) { echo $lista['COSTO'] + ($lista['COSTO'] * 0.16); } ?></dd>
            </div>


          </dl>

        </section>


        <section aria-labelledby="cart-heading" class="lg:col-span-7">
          

          <div class="container ">
              <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
                  <div class="md:flex">
                      <div class="w-full p-3 px-6 py-10">
                          <div class="text-center">
                              <!-- <span class="text-xl text-gray-700">Información de pago</span> -->
                              <h1 class="font-bold text-3xl text-gray-900">Información de pago</h1>
                              <!-- <p class="text-gray-600">USD 20.00 al mes</p> -->
                          </div>   
                          <form method="post">
                          <input type="hidden" name="total" value="<?php if ($lista) { echo $lista['COSTO'] + ($lista['COSTO'] * 0.16); } ?>">
                          <input id="email" type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                          <div class="mt-8">
                              <div class="flex flex-col mb-2">
                                  <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Correo eléctronico:</label>
                                  <div class="relative">
                                      <input id="email" type="email" name="email1" class="text-sm sm:text-base placeholder-gray-500 pl-4 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="nombre@ejemplo.com" value="<?php echo $_SESSION['email']; ?>" disabled/>
                                  </div>
                              </div>
                              <div class="flex flex-col mb-2">
                                  <label for="direccion" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Dirección:</label>
                                  <div class="relative">
                                      <input id="direccion" type="text" name="direccion" class="text-sm sm:text-base placeholder-gray-500 pl-4 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Dirección"/>
                                  </div>
                              </div>
                              
                              <div class="flex flex-col mb-6">
                                  <label for="card-number" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Número de Tarjeta:</label>
                                  <div class="relative">
                                      <input id="card-number" type="text" name="card-number" class="text-sm sm:text-base placeholder-gray-500 pl-4 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="•••• •••• •••• ••••"/>
                                  </div>
                              </div>
                              <div class="flex justify-between gap-3">
                                  <span class="w-1/2">
                                      <label for="expiry-date" class="text-xs sm:text-sm tracking-wide text-gray-600">Fecha de Expiración:</label>
                                      <div class="relative">
                                          <input id="expiry-date" type="text" name="expiry-date" class="text-sm sm:text-base placeholder-gray-500 pl-4 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="MM/AA"/>
                                      </div>
                                  </span>
                                  <span class="w-1/2">
                                      <label for="cvc" class="text-xs sm:text-sm tracking-wide text-gray-600">CVC:</label>
                                      <div class="relative">
                                          <input id="cvc" type="text" name="cvc" class="text-sm sm:text-base placeholder-gray-500 pl-4 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="CVC"/>
                                      </div>
                                  </span>
                              </div>
                              <div class="flex w-full">
                                  <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded-lg focus:outline-none focus:shadow-outline" name="payment">Realizar Pago</button>
                              </div>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      
              </section>
</div>
    </div>
  </div>

<?php 
if(isset($_POST['payment'])) { 
    $agregarProducto = new ControladorCitas();
    $agregarProducto->ctrAppointmentPayment(
      $_POST['email'],
      $_POST['direccion'],
      $_POST['card-number'],
      $_POST['expiry-date'],
      $_POST['cvc'],
      $_SESSION["id"],
      $_POST['total'],
      $id_cita,
      3
    );
  }


} 

else {
    // echo '<script>
    //                                 window.location.href = "shopping";
    //                             </script>';
}?>




