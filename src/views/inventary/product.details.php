<?php 
require __DIR__.'/../layouts/header.php';
$producto = getProductDetails();
?>

<div class="flex-column p-20 bg-gray-100">
    <h1 class="text-3xl text-center text-blue-800 font-bold mb-6"><?=$producto['nombre']?></h1>
    <br>
    <div class="flex gap-6">
        <img class="max-w-130 align-center" src="data:image/jpeg;base64,<?= base64_encode($producto['imagen'])?>">
        <p class="text-justify"><?=$producto['descripcion']?></p>
        <p class="text-justify"><?=$producto['precio']?></p>
        
    </div>
</div>

<?php include __DIR__.'/../layouts/footer.php';