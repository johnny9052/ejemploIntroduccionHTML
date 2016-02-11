<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/validacionesHTML5.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="js/validacionJavascriptExpReg.js"></script>
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Nombre: 
                </td>
                <td>
                    <input type="text" id="txtNombre" placeholder="Ingresa tu nombre" required="required" autofocus="autofocus" title="Se necesita un nombre"/> 
                </td>
            </tr>
            <tr>
                <td>
                    Edad:
                </td>
                <td>
                    <input type="number" id="txtEdad" title="Se necesita la edad" required="required" placeholder="Ingresa la edad"/>
                </td>
            </tr>
            <tr>
                <td>
                    Codigo pais
                </td>                            
                <td>
                    <input type="text" id="txtPais" pattern="[A-Za-z]{3}" placeholder="3 primeras letras del pais" title="Se necesita el codigo de tu pais" />
                </td>
            </tr>              
            <tr>
                <td>
                    Telefono
                </td>
                <td>
                    <input id="txtTelefono" type="tel" title="Ingrese el telefono" pattern="^[0-9]{10,12}$" title="Se necesita tu telefono"/>                    
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
    </form>       
</html>
