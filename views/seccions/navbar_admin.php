<!DOCTYPE html>
<html class="h-full bg-gray-100">

<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body class="h-full font-sans antialiased">
  <div class="flex h-screen bg-gray-100">
    
    <!-- Sidebar -->
    <!-- Para móviles -->
    <div class="hidden md\\:block md\\:fixed md\\:inset-y-0">
    <!-- Código de la barra lateral para móviles -->
    </div>

<!-- Barra lateral estática para escritorio -->
<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0 border-r border-gray-200 pt-5" style="background: #1ebf60;">
  <!-- Logo o título si lo deseas -->
  <div class="flex items-center justify-center h-16">
    <!-- <img
      class="h-8 w-auto"
      src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
      alt="Workflow"
    /> -->

    <h2 class="text-4xl font-bold text-orange-600 mb-4">
      Healthy<span class="text-white">Heart</span>
    </h2>
  </div>

  <!-- Enlaces de la barra lateral -->
  <nav class="flex-1 flex flex-col overflow-y-auto">
    <a
      href="?page=home_admin"
      class="px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-900"
    >
      <i class="fas fa-home mr-2"></i> Inicio
    </a>
    <a
      href="?page=medicos_admin"
      class="px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-900"
    >
      <i class="fas fa-user-md mr-2"></i> Médicos
    </a>
    <a
      href="?page=user_admin"
      class="px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-900"
    >
      <i class="fas fa-users mr-2"></i> Usuarios
    </a>
    <a
      href="?page=products_admin"
      class="px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-900"
    >
      <i class="fas fa-shopping-cart mr-2"></i> Productos
    </a>
    <!-- Agrega más enlaces según sea necesario -->
</nav>
</div>


    <!-- Contenido -->
    <div class="md:pl-64 flex flex-col flex-1">
      <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
        <!-- En tu botón para el menú móvil -->
        <button
        type="button"
        class="md:hidden block px-4 border- border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
        >
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
        </button>

        <div class="flex-1 px-4 flex justify-between items-center">
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
          <div class="ml-4 flex items-center md:ml-6">
            <!-- <button
              type="button"
              class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              <span class="sr-only">Ver notificaciones</span>
              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-9-9 9-9"></path>
              </svg>
            </button> -->

            <!-- Menú desplegable de perfil -->
            <div class="ml-3 relative">
              <button class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button">
                <span class="sr-only">Abrir menú de usuario</span>
                <img
                  class="h-8 w-8 rounded-full"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt=""
                />
              </button>
              <div
                class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" id="user-menu">
                <!-- Contenido del menú desplegable de usuario -->
                <a href="?page=profile_admin" class="block px-4 py-2 text-sm text-gray-700">Tu Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700">Configuración</a>
                <a href="?page=login" class="block px-4 py-2 text-sm text-gray-700">Cerrar sesión</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      