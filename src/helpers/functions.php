<?php 

$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getCarreras() {
    return [
        [
            'nombre' => 'Ingeniería en Desarrollo de Software',
            'descripcion' => 'Formar profesionales de alto nivel de competencia con los conocimientos, habilidades, actitudes, destrezas y valores, que le permitan dirigir, innovar, competir y emprender en el desarrollo de tecnología de software, con la aplicación responsable de conocimientos en la atención integral a problemas, para solucionar las necesidades y problemáticas de su entorno en beneficio de las organizaciones y con el mayor reconocimiento académico y social.',
            'imagen' => 'ids.png'
        ],
        [
            'nombre' => 'Ingeniería en Tecnología Computacional',
            'descripcion' => 'Formar profesionales competentes con los conocimientos, habilidades, actitudes, destrezas y valores que le permitan resolver de manera creativa problemas que requieran de la integración de software, hardware y redes, con la finalidad de implementar tecnología computacional para el buen funcionamiento de sus procesos, fomentando que desarrollen su capacidad de innovación e investigación para solucionar las necesidades y problemáticas de su entorno para el progreso nacional.',
            'imagen' => 'itc.png'
        ],
        [
            'nombre' => 'Licenciatura en Administración de Tecnologías de la Información',
            'descripcion' => 'Formar líderes profesionales capaces de gestionar eficientemente la información, produciendo y transformando el conocimiento necesario para analizar, diseñar, evaluar e implementar soluciones de Tecnologías de la información acorde a las necesidades de los individuos y organizaciones en un entorno local, regional y nacional, con alto sentido ético y social.',
            'imagen' => 'lati.jpg'
        ],
        [
            'nombre' => 'Licenciatura en Tecnologías de la Información',
            'descripcion' => 'La y el Licenciado en Tecnologías de la Información, es un profesional capaz de dominar y aplicar las tecnologías que permiten realizar la gestión de la información. Es competitivo en el análisis, diseño, desarrollo y aplicación de sistemas informáticos complejos, empleando tecnologías de la información actuales, que le permite dar solución a problemas del área de manera eficiente y eficaz cumpliendo con los estándares de calidad. ',
            'imagen' => 'liti.webp'
        ],
        [
            'nombre' => 'Ingeniería en Ciberseguridad',
            'descripcion' => 'Formar profesionales altamente capacitados y éticos, dotados de conocimientos especializados y habilidades técnicas avanzadas, comprometidos con la protección y preservación de la integridad de la información en un entorno digital en constante evolución, enfrentando los desafíos emergentes en el ámbito de la ciberseguridad, promoviendo la excelencia académica, la responsabilidad social y la innovación, y contribuyendo así al desarrollo seguro y sostenible de la sociedad global.',
            'imagen' => 'ic.jpg'
        ],
        [
            'nombre' => 'Licenciatura en Gestión de Tecnologías de la Información',
            'descripcion' => 'Formar profesionales capaces de gestionar eficientemente la información, produciendo y transformando el conocimiento necesario para analizar, diseñar, evaluar e implementar soluciones de Tecnologías de la Información acorde a las necesidades de los individuos y organizaciones en un entorno local, regional y nacional, con alto sentido ético y social.',
            'imagen' => 'lgti.jpg'
        ]
    ];
}

function getProductos() {
    return[
        [
            'nombre' => 'Camisa de Rigby',
            'descripcion' => 'Una forma elegante y comoda de vestir, pide la camisa de Rigby, material duradero, agradable e increible.',
            'imagen' => 'rigby_tshirt.jpeg',
            'id' => 1
        ],
        [
            'nombre' => 'Tacita de Rigby',
            'descripcion' => 'Una forma increible para beber tus bebidas favoritas, un diseño unico para ese té o café mañanero.',
            'imagen' => 'cup_rigby.webp',
            'id' => 2
        ],
        [
            'nombre' => 'Carcasa de Rigby',
            'descripcion' => 'Una moderna carcasa de material resistente y un diseño inspirado del mejor gato del internet.',
            'imagen' => 'case_rigby.jpg',
            'id' => 3
        ],
    ];
}

function getProducto($id) {
    $productos = getProductos();

    foreach($productos as $producto){
        if($producto['id'] === $id){
            return $producto;
        }
        else{
            return;
        }
    }
}