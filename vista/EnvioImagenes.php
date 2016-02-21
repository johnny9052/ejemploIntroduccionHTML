<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <script src="../recursos/js/jquery/jquery-1.9.1.js"></script>
        <script src="../recursos/js/envioImagen.js"></script>
    </head>
    <body>



        <!--el enctype debe soportar subida de archivos con multipart/form-data-->
        <form enctype="multipart/form-data" id="formulario" >

            <table>
                <tr>
                    <td>
                        <label for="id">Nombre carpeta:</label>
                    </td>
                    <td>
                        <input type="text" id="txtNombreCarpeta" name="nombreCarpeta" value="Fotos" />
                    </td>                    
                </tr>
                <tr>
                    <td>
                        <label for="desc">Seleccionar Imagen</label>        
                    </td>
                    <td>
                        <input type="file" id="selFile" name="archivo" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="btnCargar" type="button" value="Subir Archivo" />            
                    </td>
                </tr>
            </table>



        </form>




    </body>
</html>

