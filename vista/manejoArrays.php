<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="../recursos/js/manejoArrays.js"></script>
        <link rel="StyleSheet" href="../recursos/css/miPrimerEstilo.css" type="text/css"> 
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Ingresa numero
                </td>
                <td>
                    <input type="text" id="txtValor">
                </td>
                <td>
                    <span id="estadoVector"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="añadir" onclick="anadir()">
                </td>

                <td>
                    <input type="button" value="eliminar ultimo" onclick="eliminarUltimo()">
                </td>

                <td>
                    <input type="button" value="eliminar primero" onclick="eliminarPrimero()">
                </td>

            </tr>

            <tr>
                <td>
                    <input type="button" value="invertir" onclick="invertir()">
                </td>
                <td>
                    <input type="button" value="ordenar" onclick="ordenar()">
                </td>

                <td>
                    <input type="button" value="Añadir al inicio" onclick="anadirInicio()">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button" value="buscar" onclick="buscarElemento()">
                </td>

                <td>
                    <input type="button" value="Añadir en posicion" onclick="anadirElementosPosicion()">
                </td>

                <td>
                    <input type="button" value="Tamaño vector" onclick="tamanoVector()">
                </td>
            </tr>
        </table>
    </body>
</html>
