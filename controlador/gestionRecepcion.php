<?php



$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : "";
$cantidad = isset($_REQUEST['cantidad']) ? $_REQUEST['cantidad'] : "";
$valor = isset($_REQUEST['valor']) ? $_REQUEST['valor'] : "";
$descuento = isset($_REQUEST['descuento']) ? $_REQUEST['descuento'] : "";
$porcentajeDescuento = isset($_REQUEST['porcentajeDescuento']) ?
        $_REQUEST['porcentajeDescuento'] : "";
$porcentajeIVA = isset($_REQUEST['porcentajeIVA']) ?
        $_REQUEST['porcentajeIVA'] : "";
//$tipoRespuesta = isset($_REQUEST['tipoRespuesta']) ?  
//        $_REQUEST['tipoRespuesta'] : "";










$total = ($valor * $cantidad) + ((($valor * $cantidad) * $porcentajeIVA) / 100);

/* Con descuento */
if ($descuento == 1) {
    $total = $total - ((($valor * $cantidad) * $porcentajeDescuento) / 100);
}

$respuesta = "El producto " . $nombre . " tiene un valor todal de " . $total;


//if ($tipoRespuesta == 1) {
echo $respuesta;
//} else {
  //  header('location: ../vista/phpWebServer.php?respuesta=' . $respuesta);
//}

