<?php
require_once "../../controladores/comercial.controlador.php";
require_once "../../modelo/comercial.modelo.php";
const RUTA = 'http://localhost/ing-enuarlara.co/jsamyc/';
const RUTA_ADMIN = 'http://localhost/ing-enuarlara.co/admin/';

$search = $_REQUEST["search"];
$filtro = " AND (cprod_nombre LIKE '%" . $search . "%' OR cprod_detalles LIKE '%" . $search . "%' OR cprod_palabras_claves LIKE '%" . $search . "%')";

// Obtener los siguientes 30 productos de la base de datos
$consultaProductos = ControladorComercial::ctrProductos($filtro);

$resultados = array();

while ($datosProductos = mysqli_fetch_array($consultaProductos, MYSQLI_BOTH)) {
    $filtroFotos = ' AND cpf_principal=1';
    $consultaFotosProductos = ControladorComercial::ctrFotosProductos($datosProductos['cprod_id'], $filtroFotos);
    $datosFotosProductos = mysqli_fetch_array($consultaFotosProductos, MYSQLI_BOTH);
    $numFotosProductos = mysqli_num_rows($consultaFotosProductos);
    $rutaImg = 'https://via.placeholder.com/550';
    if ($numFotosProductos > 0) {
        $rutaImg = RUTA_ADMIN . 'files/productos/' . $datosFotosProductos['cpf_fotos'];
    }

    $resultados[] = array(
        'datosProductos' => $datosProductos,
        'datosFotosProductos' => $datosFotosProductos,
        'numFotosProductos' => $numFotosProductos,
        'rutaImg' => $rutaImg
    );
}

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($resultados);
exit();