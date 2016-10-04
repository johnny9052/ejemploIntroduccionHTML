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

        <script type="text/javascript" 
        src="../recursos/js/phpWebServer.js"></script>
    </head>
    <body>
        <!--        onsubmit="return enviarInformacion(formulario);"-->
        <form name="formulario" method="post" 
              action="../controlador/gestionRecepcion.php">
            <table>
                <tr>
                    <td>
                        <h4>Nombre producto</h4>
                    </td>
                    <td>
                        <input type="text" required id="txtNombre" name="nombre">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Cantidad</h4>
                    </td>
                    <td>
                        <input type="number" required id="txtCantidad" name="cantidad">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Valor</h4>
                    </td>
                    <td>
                        <input type="number" required id="txtValor" name="valor">
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
                        <input type="number" required id="txtPorcentajeDescuento" 
                               name="porcentajeDescuento">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>% IVA</h4>
                    </td>
                    <td>
                        <input type="number" required id="txtPorcentajeIVA" name="porcentajeIVA">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>¿Quiere la respuesta en el servidor?</h4>
                    </td>
                    <td>
                        <select id="selTipoRespuesta" name="tipoRespuesta">
                            <option value="-1">-- SELECCIONE --</option>
                            <option value="0">NO</option>
                            <option value="1">SI</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>                  
                        <input type="submit" value="Calcular">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        
        
        if (isset($_REQUEST['respuesta'])) {
            echo $_REQUEST['respuesta'];
        }
        ?>
    </body>
</html>

