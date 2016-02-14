<?php

$content = "<table id='listadoEstudiantes' class='display' cellspacing='0' width='100%'>";
$content.="<thead>";
$content.="<tr>";
$content.="<th>Codigo</th>";
$content.="<th>Nombre</th>";
$content.="<th>Apellido</th>";
$content.="<th>Edad</th>";
$content.="</tr>";
$content.="</thead>";


$content.="<tbody>";
for ($cont = 0; $cont < 200; $cont++) {
    $content.="<tr>";
    $content.="<td>Codigo " . $cont . "</td>";
    $content.="<td>Nombre " . $cont . "</td>";
    $content.="<td>Apellido " . $cont . "</td>";
    $content.="<td>Edad " . $cont . "</td>";
    $content.="</tr>";
}

$content.="</tbody>";
$content.="</table>";


echo $content;
