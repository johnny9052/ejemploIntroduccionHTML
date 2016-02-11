<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="../recursos/js/eventos.js"></script>
        <link rel="StyleSheet" href="../recursos/css/miPrimerEstilo.css" type="text/css"> 
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <h1>
                        1. Evento onclick
                    </h1>
                </td>

                <td>
                    <input type="button" value="presioname" onclick="mostrarMensajeEjer1();"
                </td>
            </tr>

            <tr>
                <td>
                    <h1>
                        2. Evento ondblclick
                    </h1>
                </td>

                <td>
                    <input type="button" value="presioname" ondblclick="mostrarMensaje()" >                    
                </td>
            </tr>


            <tr>
                <td>
                    <h1>
                        3. Evento onchange
                    </h1>
                </td>

                <td>
                    <input type="text" value="cambia mi texto!!" onchange="mostrarMensaje()" >
                </td>
            </tr>

            <tr>
                <td>
                    <h1>
                        4. Evento onfocus
                    </h1>
                </td>

                <td>
                    <input type="text" value="Seleccioname!!"  onfocus="mostrarMensaje()">
                </td>
            </tr>


            <tr>
                <td>
                    <h1>
                        5. Evento onmouseout
                    </h1>
                </td>

                <td>
                    <input type="button" value="Pasa por mi!!" onmouseout="mostrarMensaje()">
                </td>               
            </tr>

        </table>
    </body>
</html>
