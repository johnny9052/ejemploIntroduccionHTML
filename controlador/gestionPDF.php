<?php

require_once('../recursos/html2pdf/html2pdf.class.php'); // Se carga la libreria

ob_start(); //Habilita el buffer para la salida de datos 
ob_get_clean(); //Limpia lo que actualmente tenga el buffer
//En la variable content entre las etiquetas <page></page> va todo el contenido del pdf en formato html
$content = "<page>";

$content.="<h1>ESTE ES EL REPORTE</h1>";
$content.='<link href="../recursos/css/estilosPDF.css" type="text/css" rel="stylesheet">';
$content.= "<table border='1'>";

$content .= "<tr>";
$content .= "<th>Codigo</th>";
$content .= "<th>Nombre</th>";
$content .= "<th>Apellido</th>";
$content .= "<th>Cedula</th>";
$content .= "<th>Edad</th>";
$content .= "<th>Semestre</th>";
$content .= "</tr>";

for ($cont = 0; $cont < 20; $cont++) {
    $content.="<tr>";
    $content.="<td>Codigo " . $cont . "</td>";
    $content.="<td>Nombre " . $cont . "</td>";
    $content.="<td>Apellido " . $cont . "</td>";
    $content.="<td>Cedula " . $cont . "</td>";
    $content.="<td>Edad " . $cont . "</td>";
    $content.="<td>Semestre " . $cont . "</td>";
    $content.="</tr>";
}

$content.="</table>";


$content.= "</page>";


$html2pdf = new HTML2PDF('P', 'A4', 'es'); //formato del pdf (posicion (P=vertical L=horizontal), tamaño del pdf, lenguaje)
$html2pdf->WriteHTML($content); //Lo que tenga content lo pasa a pdf
ob_end_clean(); // se limpia nuevamente el buffer
$html2pdf->Output('miPDF.pdf'); //se genera el pdf, generando por defecto el nombre indicado para guardar
