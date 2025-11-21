<?php 

require __DIR__.'/../config/database.php';
$config = require __DIR__.'/../config/config.php';

define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getProducts() {
    $pdo = getPDO();

    try{
        $sql = "SELECT * FROM productos";

        $stmt = $pdo->query($sql);

        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $productos;
    }catch(PDOException $e){
        error_log("Error al consultar la base de datos: ". $e->getMessage());
        return[];
    }
}

function getProductDetails($productoId = null) {
    if($productoId == null && isset($_GET['productoId'])){
        $productoId = filter_input(INPUT_GET, 'productoId', FILTER_SANITIZE_STRING);
    }

    //Si no se envió una carrera
    if ($productoId === null) {
        return [];
    }

    $pdo = getPDO();

    try {
        $sql = "SELECT * FROM productos WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $productoId]);
        $productoDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$productoDetails) {
            return []; // producto no encontrada
        }

        return $productoDetails;
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return [];
    }
}