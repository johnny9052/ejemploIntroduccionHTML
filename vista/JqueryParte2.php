<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link href="../recursos/css/menu.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="../recursos/js/jquery/jquery-1.9.1.js"></script>    
        <script type="text/javascript" src="../recursos/js/ejemploJquery2.js"></script>                
    </head>
    <body>
        <input type="button" onclick="identificarCampos()" value="Identificar campos">


        <table>
            <tr>
                <td>
                    <h4>Nombre producto</h4>
                </td>
                <td>
                    <input type="text" required id="txtNombre" name="nombre" value="ingrese nombre">
                </td>
            </tr>

            <tr>
                <td>
                    <h4>Cantidad</h4>
                </td>
                <td>
                    <input type="text" required id="txtCantidad" name="cantidad" value="10">
                </td>
            </tr>

            <tr>
                <td>
                    <h4>Valor</h4>
                </td>
                <td>
                    <input type="text" required id="txtValor" name="valor" value="1000">
                </td>
            </tr>

            <tr>
                <td>
                    <h4>Descuento</h4>
                </td>
                <td>
                    <select id="selDescuento" name="descuento">
                        <option value="-1">-- SELECCIONE --</option>
                        <option value="0">NO</option>
                        <option value="1">SI</option>
                    </select>
                </td>
            </tr>


            <tr>
                <td>
                    <h4>% descuento</h4>
                </td>
                <td>
                    <input type="number" required id="txtPorcentajeDescuento" name="porcentajeDecuento" value="3">
                </td>
            </tr>

            <tr>
                <td>
                    <h4>% IVA</h4>
                </td>
                <td>
                    <input type="number" required id="txtPorcentajeIVA" name="porcentajeIVA" value="16">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>¿Quiere la respuesta en el servidor?</h4>
                </td>
                <td>
                    <select id="selTipoRespuesta" name="tipoRespuesta">                                                
                        <option value="1">NO</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>                  
                    <input type="button" value="Calcular" id="btnCalcular">
                </td>
            </tr>
        </table>

    </body>
</html>
