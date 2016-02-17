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
        <script type="text/javascript" src="js/validacionHTML5.js"></script>
        <title></title>
    </head>
    <body>
        <form onsubmit="return enviarDatos()" id="miFormulario" name="miFormulario" 
              method="post" action="pkgControlador/gestionLoguin.php">
            <table>
                <tr>
                    <td>
                        Nombre: 
                    </td>
                    <td>
                        <input type="text" id="txtNombre" 
                               placeholder="Ingresa tu nombre" 
                               required="required" autofocus="autofocus" 
                               title="Se necesita un nombre"/> 
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
                        Correo forma 1
                    </td>
                    <td>
                        <input type="email" id="txtEmail" placeholder="your@email.com" required="required" title="Se necesita tu correo electronico"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Correo forma 2
                    </td>
                    <td>
                        <input type="text" id="correo" placeholder="email" required="required" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Se necesita tu correo"/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        URL
                    </td>
                    <td>
                        <input type="url" id="txtURL" title="Se necesita tu URL"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Descripcion
                    </td>
                    <td>
                        <textarea id="txtDescripcion" placeholder="Escribe tu mensaje aqui" required="required" title="Se necesita la descripcion" title="Se necesita la descripcion"></textarea> 
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
                        Codigo postal
                    </td>
                    <td>
                        <input id="txtPostal" pattern="^[0-9]{4}$" title="Se necesita tu codigo postal" />
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>                                                
                        <button>validar</button>                        
                    </td>
                </tr>
            </table>
        </form>   
    </body>
</html>
