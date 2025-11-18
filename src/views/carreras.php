<?php 
require __DIR__.'/layout/header.php';
$carreras = getCarreras();
?>
  <main class="flex-grow">
    <section class="bg-gray-100 py-16">
      <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-3xl font-bold text-center mb-12 text-blue-800">
        Nuestras Carreras
        </h1>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach($carreras as $carrera) : ?>
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
          <img src="<?=ASSETS_PATH?>/img/<?=$carrera['imagen']?>" alt="<?=$carrera['nombre']?>" class="w-full h-64 object-cover">
          <div class="p-6">
          <h3 class="text-xl font-semibold mb-2"><?=$carrera['nombre']?></h3>
          <p class="text-gray-600 text-sm text-justify text-justify">
              <?= $carrera['descripcion'] ?>
          </p>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </section>
  </main>

  <?php include __DIR__.'/layout/footer.php'; ?>

</body>
</html>