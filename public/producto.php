<?php 
    include '../src/views/layout/header.php';
    $productos = getProductos();

    if (!isset($_GET['id'])) {
        echo "Producto no encontrado";
        exit;
    }

    $id = $_GET['id'];
    $producto = null;

    foreach ($productos as $p) {
        if ($p['id'] == $id) {
            $producto = $p;
            break;
        }
    }

    if (!$producto) {
        echo "Producto no encontrado";
        exit;
    }
?>

<main class="flex-grow">
  <section class="bg-[#906646] py-16">
    <div class="max-w-5xl max-h-5xl mx-auto px-6">
      <div class="lg:grid grid-cols-2 md:flex md:flex-col bg-[#DC9D5A] justify-items-center rounded-xl items-center">
        <div class="w-full h-full bg-[#C5B9A0] justify-items-center rounded-xl shadow-md">
          <img src="<?=ASSETS_PATH?>/img/<?=$producto['imagen']?>" class="p-5 rounded-xl">
        </div>
        <div class="flex flex-col justify-items-center items-center w-100 p-8 rounded-xl text-justify">
          <h1 class="text-3xl text-white font-bold mb-6 text-center"><?=$producto['nombre']?></h1>
          <p class="text-white text-xl mb-5"><?=$producto['descripcion']?></p>
          <p class="text-white text-3xl mb-5"><?=$producto['precio']?></p>
          <a href="#" class="bg-[#906646] text-center font-bold cursor-pointer rounded-lg p-3 hover:text-[#906646] hover:bg-white transition w-80">Comprar</a>
          <a href="#" class="bg-[#906646]/60 text-center font-bold cursor-pointer rounded-lg p-3 mt-4 hover:text-[#906646] hover:bg-white transition w-80">Agregar al carrito</a>
        </div>
      </div>
    </div>
  </section>
</main>


  <?php include '../src/views/layout/footer.php'; ?>