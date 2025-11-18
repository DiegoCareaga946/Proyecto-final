<?php 

$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getProductos() {
    return[
        [
            'nombre' => 'Camisa de Rigby',
            'descripcion' => 'Una forma elegante y comoda de vestir, pide la camisa de Rigby, material duradero, agradable e increible.',
            'imagen' => 'rigby_tshirt.jpeg',
            'precio' => '$300',
            'id' => 1
        ],
        [
            'nombre' => 'Tacita de Rigby',
            'descripcion' => 'Una forma increible para beber tus bebidas favoritas, un diseño unico para ese té o café mañanero.',
            'imagen' => 'cup_rigby.webp',
            'precio' => '$200',
            'id' => 2
        ],
        [
            'nombre' => 'Carcasa de Rigby',
            'descripcion' => 'Una moderna carcasa de material resistente y un diseño inspirado del mejor gato del internet.',
            'imagen' => 'case_rigby.jpg',
            'precio' => '$150',
            'id' => 3
        ]
    ];
}