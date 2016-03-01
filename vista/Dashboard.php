<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--Load the AJAX API-->
        <script type="text/javascript" src="../recursos/js/google/loader.js"></script>
        <script type="text/javascript" src="../recursos/js/BI.js"></script>
    </head>

    <body>

        <table border="1">
            <tr>
                <td colspan="2">
                    https://developers.google.com/chart/interactive/docs/basic_load_libs
                </td>
            </tr>
            <tr>
                <td>
                    <h1>EJERCICIO INTRODUCTORIO</h1>
                    <div id="grafico1"></div>
                </td>              
            </tr>
            <tr>
                <td>
                    <h1>Ejercicio #2 </h1>
                    <div id="grafico2"></div>
                </td>
                <td>
                    <div id="grafico3"></div>
                </td>
            </tr>

            <tr>
                <td>
                    <h1>Ejercicio #3 Grafico</h1>
                    <div id="grafico4"></div>
                    <input type="button" value="cambiar datos" id="btnGrafico4">
                </td>
                <td>
                    <h1>Ejercicio #4 Grafico</h1>
                    <div id="grafico5"></div>
                </td>
            </tr>

            <tr>
                <td colspan="2">                
                    <h1>Ejercicio #2 Grafico</h1>


                    <!-- DIV CONTENEDOR DEL DASHBOARD -->
                    <div id="dashboard_div" style="border: 1px solid #ccc">
                        <table>
                            <tr>
                                <td>
                                    <!-- DIV PARA EL SLIDER -->
                                    <div id="control_div"></div>
                                </td>
                                <td>
                                    <!-- DIV PARA EL GRAFICO -->
                                    <div id="chart_div"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <button id="btnCambiaRango">
                                            Select range [2, 5]
                                        </button><br />
                                        <button id="btnCambiar3D">
                                            Make the pie chart 3D
                                        </button>
                                    </div>                       
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>                
            </tr>
        </table>

    </body>
</html>

