<!-- <div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Nutriólogos</a>
     
<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Nutriólogos</h1>
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
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    Product Loop
      <?php
          // $listarNutri = new ControladorNutriologo();
          // $lista = $listarNutri->ctrMostrarTotalNutri();
                               
          // foreach ($lista as $nutri) {
      ?>
      <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="<?php // echo $nutri['FOTO_PERFIL']; ?>" alt="Front of men's Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black-700">
              <a href="profile?medico=<?php // echo $nutri['ID_NUTRIOLOGO']; ?>">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <p class="mt-1 text-sm text-green-500"><?php // echo $nutri['NOMBRE_USUARIO'] . " " . $nutri['APELLIDOS_USUARIO'] ?></p>
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"><?php // echo $nutri['ESPECIALIDAD']; ?></p>
          </div> 
          <p class="text-sm font-medium">
            <div class="star-rating-rec">
                <span class="star-rec">&#9733;</span>
                <span class="star-rec">&#9733;</span>
                <span class="star-rec">&#9733;</span>
                <span class="star-rec">&#9734;</span>
                <span class="star-rec">&#9734;</span>
            </div>
          </p>
        </div>
      </div>

      <?php
  
      // }

      ?>

    </div>
  </div>
</div> -->





<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Nutriólogos</a>
     
<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Nutriólogos</h1><br>

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
                  name="search"/>
              </div>
            </form>
          </div>

          <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

<!--Agrege lis-->
           <?php

          if(isset($_GET['search'])) { 

          $listarNutri = new ControladorNutriologo();
          $lista = $listarNutri->ctrBuscarNutri($_GET['search']);
          
          if (empty($lista)) {
            echo "<p>No hay resultados.</p>";
          } else {
          foreach ($lista as $nutri) {
          ?>
          
      <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="<?php echo $nutri['FOTO_PERFIL']; ?>" alt="Front of men's Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black-700">
              <a href="profile?medico=<?php echo $nutri['ID_USUARIO']; ?>">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <p class="mt-1 text-sm text-green-500"><?php echo $nutri['NOMBRE_USUARIO'] . " " . $nutri['APELLIDOS_USUARIO'] ?></p>
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"><?php echo $nutri['ESPECIALIDAD']; ?></p>
          </div>
          <p class="text-sm font-medium">
            <div class="star-rating-rec">
            <?php
          $listarNutri = new ControladorNutriologo();
          
          $calificacion = $listarNutri->ctrMostrarCalNutr($nutri['ID_NUTRIOLOGO']);
          $calificacion_medico = $calificacion['promedio_calificacion']; // Ejemplo de calificación
      // Mostrar las estrellas según la calificación
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $calificacion_medico) {
                echo '<span class="star">&#9733;</span>'; // Estrella llena
                } else {
                echo '<span>&#x2606;</span>'; // Estrella vacía
                }
            }
      ?>
            </div>
          </p>
        </div>
      </div>

          <?php
            }
          }
          } else {

            $listarNutri = new ControladorNutriologo();
            $lista = $listarNutri->ctrMostrarTotalNutri();
                                 
            foreach ($lista as $nutri) {
        ?>
      <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="<?php echo $nutri['FOTO_PERFIL']; ?>" alt="Front of men's Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black-700">
              <a href="profile?medico=<?php echo $nutri['ID_NUTRIOLOGO']; ?>">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <p class="mt-1 text-sm text-green-500"><?php echo $nutri['NOMBRE_USUARIO'] . " " . $nutri['APELLIDOS_USUARIO'] ?></p>
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"><?php echo $nutri['ESPECIALIDAD']; ?></p>
          </div>
          <p class="text-sm font-medium">
            <div class="star-rating-rec">
            <?php
          $listarNutri = new ControladorNutriologo();
          
          $calificacion = $listarNutri->ctrMostrarCalNutr($nutri['ID_NUTRIOLOGO']);
          $calificacion_medico = $calificacion['promedio_calificacion']; // Ejemplo de calificación
      // Mostrar las estrellas según la calificación
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $calificacion_medico) {
                echo '<span class="star">&#9733;</span>'; // Estrella llena
                } else {
                echo '<span>&#x2606;</span>'; // Estrella vacía
                }
            }
      ?>
            </div>
          </p>
        </div>
      </div>

      <?php
            }
  
      }

      ?>

    </div>
<!-- Agregre liz-->

  </div>
</div>
