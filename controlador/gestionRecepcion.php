<?php

isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['cantidad']) ? $cantidad = $_REQUEST['cantidad'] : $cantidad = "";
isset($_REQUEST['valor']) ? $valor = $_REQUEST['valor'] : $valor = "";
isset($_REQUEST['descuento']) ? $descuento = $_REQUEST['descuento'] : $descuento = "";
isset($_REQUEST['porcentajeDescuento']) ? $porcentajeDescuento = $_REQUEST['porcentajeDescuento'] : $porcentajeDescuento = "";
isset($_REQUEST['porcentajeIVA']) ? $porcentajeIVA = $_REQUEST['porcentajeIVA'] : $porcentajeIVA = "";
isset($_REQUEST['tipoRespuesta']) ? $tipoRespuesta = $_REQUEST['tipoRespuesta'] : $tipoRespuesta = "";


$total = ($valor * $cantidad) + ((($valor * $cantidad) * $porcentajeIVA) / 100);


/* Con descuento */
if ($descuento == 1) {
    $total = $total - ((($valor * $cantidad) * $porcentajeDescuento) / 100);
}

$respuesta = "El producto " . $nombre . " tiene un valor todal de " . $total;

if ($tipoRespuesta == 1) {
    echo $respuesta;
} else {
    header('location: ../vista/phpWebServer.php?respuesta=' . $respuesta);
}

