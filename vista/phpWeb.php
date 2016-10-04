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
    </head>
    <body>

        <table border="1">
            <?php
            $temp = "hola mundo";
            for ($x = 0; $x < 100; $x++) {
                echo "<tr><td>" . $temp . "</td></tr>";
            }
            ?>                                            
        </table>
        
        
        


        <input type="text" value="<?php echo "Ingrese nombre"; ?>" >        

    </body>
</html>
