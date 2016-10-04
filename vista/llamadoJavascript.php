<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="../recursos/js/miPrimerJavascript.js"></script>
        <link rel="StyleSheet" href="../recursos/css/miPrimerEstilo.css" type="text/css"> 
    </head>
    <body>

        <table>
            <tr>
                <td>
                    <h3>1. Ejercicio: Hola mundo</h3>
                </td>
                <td>
                    <input type="button"  value="Mostrar mensaje" onclick="mostrarMensaje();">
                </td>
            </tr>

            
            
            
            
            
            <tr>
                <td>
                    <h3>2. Ejercicio: Saludador</h3>
                </td>
                <td>
                    <label>Nombre</label> <input type="text" id="txtNombre"/>
                </td>
                <td>
                    <label>Apellido</label> <input type="text" id="txtApellido"/>
                </td>
                <td>
                    <input type="button" value="Saludar" onclick="saludar();"/>
                </td>
            </tr>

            
            
            

            <tr>
                <td>
                    <h3>3. Ejercicio: Factorial</h3>
                </td>
                <td>
                    <label>Numero</label> <input type="number" id="txtNumeroFactorial"/>
                </td>
                <td>
                    <input type="button" value="Calcular" onclick="calcularFactorial();"/>
                </td>
            </tr>

            
            
            
            <tr>
                <td>
                    <h3>4. Ejercicio: Calcular iva producto</h3>
                </td>
                <td>
                    <select id="selProducto">
                        <option value="1800">Litro de leche</option>
                        <option value="1500">5 huevos</option>
                        <option value="3000">Kilo arroz</option>
                        <option value="5000">Tarro aceite</option>
                    </select>
                </td>                                              
                <td>
                    <input type="button" value="Calcular iva" onclick="calcularIVA();"/>
                </td>
                <td>
                    <span>Resultado caja texto</span>
                </td>
                <td>
                    <input type="text" id="txtResultadoIVA" disabled="disabled">
                </td>
                <td>
                    <span>Resultado label</span>
                </td>
                <td>
                    <label id="lblResultadoIVA">??????</label>
                </td>                
            </tr>

            <tr>
                <td>
                    <h3>5. Ejercicio: Ejemplo radiobutton</h3>
                </td>
                <td> 
                    <form name="formu">
                        <label>Motos</label><input id="rb1" type="radio" name="rdEj5" 
                                                   value="Motos">
                        <label>Carros</label><input id="rb2" type="radio" name="rdEj5" 
                                                    value="Carros">
                        <label>Aviones</label><input id="rb3" type="radio" name="rdEj5" 
                                                     value="Aviones">
                    </form>
                </td>
                <td>
                    <input type="button" value="Que te gusta" onclick="queGusta();"/>
                </td>
            </tr>


            <tr>
                <td>
                    <h3>6. Ejercicio: Ejemplo checkbox </h3>
                </td>
                <td> 
                    <form id="formCheckbox">
                        <label>opcion 1</label>
                        <input type="checkbox" id="chk1" name="checkbox" value="1">
                        <label>opcion 2</label>
                        <input type="checkbox" id="chk2" name="checkbox" value="2">
                        <label>opcion 3</label>
                        <input type="checkbox" id="chk3" name="checkbox" value="3">
                        <label>opcion 4</label>
                        <input type="checkbox" id="chk4" name="checkbox" value="4">
                    </form>
                </td>
                <td>
                    <input type="button" value="Opciones seleccionadas" 
                           onclick="opcionesSeleccionadas();"/>
                </td>
            </tr>


            <tr>
                <td>
                    <h3>7. Ejercicio: Mostrar y ocultar elementos </h3>
                </td>
                <td> 
                    <select id="selOcultarMostrar">
                        <option>elemento</option>
                        <option>elemento</option>
                        <option>elemento</option>
                        <option>elemento</option>                       
                    </select>
                </td>
                <td>
                    <input type="button" value="Mostrar ocultar" onclick="mostrarOcultar();"/>
                </td>
            </tr>


            <tr>
                <td>
                    <h3>9. Ejercicio: Cambiar clase de un elemento </h3>
                </td>
                <td class="fondoAzul" id="recuadroColor"> 

                </td>
                <td>
                    <input type="button" value="Cambiar a rojo" onclick="cambiarEstilo('rojo');"/>
                    <input type="button" value="Cambiar a azul" onclick="cambiarEstilo('azul');"/>
                    <input type="button" value="Cambiar a verde" onclick="cambiarEstilo('verde');"/>
                </td>

                <td>
                    <input type="button" value="Cambiar clase a rojo" onclick="cambiarClase('rojo');"/>
                    <input type="button" value="Cambiar clase a azul" onclick="cambiarClase('azul');"/>                                        
                </td>
            </tr>

            <tr>
                <td>
                    <h3>10. Funcion eval</h3>
                </td>
                <td>
                    <input type="text" id="txtExpresion" value="3+1">
                </td>
                <td>
                    <input type="button" value="demostrar eval()" onclick="evaluar();">
                </td>
            </tr>


            <tr>
                <td>
                    <h3>11. Insertar codigo html</h3>
                </td>
                <td>
                    <input type="button" onclick="insertHTML();" 
                           value="Insertar una tabla">
                </td>
                <td>
                    <div id="divTab">

                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <h3>12. Substring</h3>
                </td>
                <td>
                    <input type="text" placeholder="ingrese texto" id="txtPalabra">
                </td>
                <td>
                    <input type="number" placeholder="ingrese posicion" 
                           id="txtPosicion">
                </td>
                <td>
                    <input type="button" onclick="validarCadena();" 
                           value="Mostrar substring">
                </td>
            </tr>
        </table>

    </body>
</html>
