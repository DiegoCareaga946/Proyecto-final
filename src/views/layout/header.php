<?php 
require __DIR__.'/../../helpers/functions.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>RigbyStore</title>
  <link rel="icon" href="<?=ASSETS_PATH?>/img/logo.png">
  <link href="<?=BASE_PATH?>/output.css" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">

  <nav class="sticky top-0 bg-[#71513A] z-100">
    <input id="menu-toggle" type="checkbox" class="sr-only peer" />

    <div class="container mx-auto flex items-center justify-between px-3 py-3">
    
    <label for="menu-toggle" class="md:hidden cursor-pointer p-2">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </label>
      
      <h1 class="text-4xl font-semibold">RigbyStore</h1>
      

      <!-- Menú de escritorio -->
      <ul class="hidden md:flex space-x-5">
        <li><a href="<?=BASE_PATH?>" class="text-[#F9F0BA] text-xl font-semibold hover:text-white hover:underline">Lanzamientos</a></li>
        <li><a href="#" class="text-[#F9F0BA] text-xl font-semibold hover:text-white hover:underline">Sobre Nosotros</a></li>
        <li><a href="#" class="text-[#F9F0BA] text-xl font-semibold hover:text-white hover:underline">Lista de correos</a></li>
      </ul>
      <?php
      $imagen = "/img/carrito_compra.png";
      ?> 
      <div class="flex justify-between items-center">
        <a href="#"><img class="h-10" src= "<?=ASSETS_PATH?><?=$imagen?>"></a>
        <a href="#" class="text-center rounded-lg bg-[#DC9D5A] w-20 hover:text-[#DC9D5A] hover:bg-white transition">MXN</a>
      </div>
    </div>

    <!-- Menú móvil -->
    <div class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 md:hidden bg-[#DC9D5A]">
      <ul class="flex flex-col text-center space-y-2 py-3 text-white">
        <li><a href="<?=BASE_PATH?>" class="block py-2 text-xl hover:text-blue-100">Lanzamientos</a></li>
        <li><a href="#" class="block py-2 text-xl hover:text-blue-100">Sobre Nosotros</a></li>
        <li><a href="#" class="block py-2 text-xl hover:text-blue-100">Lista de correos</a></li>
      </ul>
    </div>
  </nav>
</body>