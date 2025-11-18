<?php 
  include '../src/views/layout/header.php';
  $productos = getProductos();
?>


  <main class="flex-grow">
    <header class="relative bg-gradient-to-t from-[#F9F0BA] to-[#DC9D5A] text-center py-16 px-4">
      <div class="relative z-20 text-center py-16 px-4">
        <h1 class="text-6xl text-shadow-lg shadow-[#906646] font-bold mb-4 text-white">
          RIGBYSALES 10%
        </h1>
      </div>
    </header>

      <section class="bg-[#906646] py-16">
        <div class="max-w-7xl mx-auto px-6">
          <h1 class="text-3xl font-bold text-center mb-12 text-[#DC9D5A]">
          PRODUCTOS
          </h1>

          <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach($productos as $producto) : ?>
              <div class="bg-[#DC9D5A] rounded-xl shadow-md hover:shadow-lg ">
                <img src="<?=ASSETS_PATH?>/img/<?=$producto['imagen']?>" alt="<?=$producto['nombre']?>" class="w-100 h-100 rounded-lg">
                <div class="p-6 text-center">
                  <h3 class="text-2xl font-semibold mb-2 text-white"><?=$producto['nombre']?></h3>
                  <hr class="py-2">
                  <p class="text-white text-lg text-justify text-justify">
                      <?= $producto['descripcion'] ?>
                  </p>
                  <div class="m-4">
                    <a href="<?=SRC_PATH?>/views/producto.php" class="bg-[#906646] font-bold cursor-pointer rounded-lg p-3 hover:text-[#906646] hover:bg-white transition">VER MAS</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
  </main>

<?php include '../src/views/layout/footer.php'; ?>