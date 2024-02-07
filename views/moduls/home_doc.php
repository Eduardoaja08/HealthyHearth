
<main class="flex-1">
        <div class="py-6">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dhasboard</h1>
          </div><br>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8" style="display: flex; flex-wrap: wrap; justify-content: enter;">
           <!-- Contenido va aquí -->
              <div class="max-w-sm rounded overflow-hidden shadow-lg" style="margin: 13px;">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">
                    <i class="fas fa-hourglass-half"></i> Citas pendientes
                  </div>
                  <p class="text-gray-700 text-base">
                  El numero de citas pendientes son de 10 personas.
                  </p>
                </div>
              </div> <br>


              <div class="max-w-sm rounded overflow-hidden shadow-lg" style="margin: 13px;">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">
                  <i class="fas fa-hand-holding-heart"></i> Citas aceptadas
                  </div>
                  <p class="text-gray-700 text-base">
                  Se han aceptado 20 citas.
                  </p>
                </div>
              </div>

              <div class="max-w-sm rounded overflow-hidden shadow-lg" style="margin: 13px;">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">
                  <i class="fas fa-heart"></i> Pacientes
                  </div>
                  <p class="text-gray-700 text-base">
                  El numero de pacientes es de 50 personas.
                  </p>
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
w