<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
                                                           
        
        <input type="date">
        <br>
        
        
        
        
        
        <input type="datetime-local">
        <br>
        
        
        
        
        
        
        <input type="file">





        <br>
        <label>etiqueta numero</label>
        <input type="number" min="0" max="100" step="10">
        <br>
        
        
        
        
        
        
        
        <label>rango</label>
        <input type="range">
        
        
        
        
        
        
        <br>
        <input type="text" x-webkit-speech />




        <br>
        <label>Medidor</label>
        <meter min="0" max="45" low="5" high="38" optimum="45" value="4"></meter>
        <meter min="0" max="45" low="5" high="38" optimum="45" value="39"></meter>
        <meter min="0" max="45" low="5" high="38" optimum="45" value="10"></meter>





        
        
        
        
        
        <label>Barra de progreso</label>
        <progress max="100"></progress>
        <progress max="100" value="60"></progress>


        <br>




        
        
        
        
        
        
        
        
        DATALIST
        <input type="text" name="diasemana" id="diasemana" 
               list="dias"/>
        <datalist id="dias">
            <option value="Lunes" />
            <option value="Martes" />
            <option value="Miércoles" />
            <option value="Jueves" />
            <option value="Viernes" />
            <option value="Sábado" />
            <option value="Domingo" />
        </datalist>

        
        
        
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <label>Video</label>
        <br>
        
        
        
             
        <br>
        <label>Audio</label>
        <br>
        <audio controls autobuffer> <!-- autoplay loop -->
            <source src="../recursos/audio/cancion.mp3"><!-- .ogg  .wav -->            
        </audio>

        <br>

<!-- autoplay width height -->
        <video poster controls autoplay width="400px" height="400px">
            <source src="../recursos/video/kungFuPanda2.mp4" 
                    type="video/mp4">
            <source src="../recursos/video/kungFuPanda2.webm" 
                    type="video/webm">
        </video>

        
        
        
        
        
        
   
        
        
        
        

        
        
        
        <br>

        <input type="color">

        <input type="time">

        
               
        
        
        
        
        <input type="text" list="listas">
        <datalist id="listas">
            <option value="azul" label="color azul" />
            <option value="rojo" label="color rojo"/>
            <option value="amarillo" label="color amarillo"/>
            <option value="negro" label="color negro"/>
            <option value="verde" label="color verde"/>
        </datalist>       

        
            
                                        
        
        <input type="month" >

        <input type="week">

        
        
    </body>
</html>
