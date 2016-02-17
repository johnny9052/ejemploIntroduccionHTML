<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../recursos/css/validacionesHTML5.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="../recursos/js/validacionJavascript.js"></script>
        <title></title>
    </head>
    <body>        
        <table>
            <tr>
                <td>
                    Nombre: 
                </td>
                <td>
                    <input type="text" id="txtNombre" 
                           placeholder="Ingresa tu nombre" required="required"/> 
                </td>
            </tr>
            <tr>
                <td>
                    Edad:
                </td>
                <td>
                    <input type="number" id="txtEdad" required="required" 
                           placeholder="Ingresa la edad"/>
                </td>
            </tr>
            <tr>
                <td>
                    Codigo pais
                </td>                            
                <td>
                    <input type="text" id="txtPais" placeholder="Ingrese codigo"/>
                </td>
            </tr>              
            <tr>
                <td>
                    Telefono
                </td>
                <td>
                    <input id="txtTelefono" type="tel" placeholder="Ingrese telefono"/>                    
                </td>
            </tr>

            <tr>
                <td>

                </td>
                <td>                                                
                    <input type="button" value="Enviar" onclick="enviarDatos()">
                </td>
            </tr>
        </table>
    </body>
</html>
