<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/validaciones.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="contact-form"> 
            <h1>¡Contáctate con nosotros!</h1>
            <h2>Usa el formulario para acercarnos tu mensaje.</h2> 
            <p id="failure">Oops... Algo anduvo mal.</p> 
            <p id="success">Gracias, tu mensaje ha sido enviado correctamente.</p> 

            <form method="" action=""> 
                <label for="name">Name: <span class="required">*</span></label> 

                <input type="text" id="name" name="name" value="" placeholder="Your name" required="required" autofocus="autofocus" title="Se necesita un nombre"/> 


                <label for="user-age">Edad: </label><input type="number" name="user-age" id="user-age" required="required"/>

                Pais<input type="text" name="country_code" pattern="[A-Za-z]{3}" title="3 primeras letras de tu pais" />

                <label for="email">Email Address: <span class="required">*</span></label> 
                <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" />


                <label for="name">Correo forma 2: <span class="required">*</span></label> 
                <input type="text" id="correo" name="name" value="" placeholder="email" required="required" autofocus="autofocus" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"/> 

                <label for="user-url">URL: (valida si esta bien escrita)</label><input type="url" name="user-url" id="user-url" />

                <label for="website">Website: </label> 
                <input type="web" id="webstie" name="website" value="" /> 

                <label for="subject">Subject: </label> 
                <select id="subject" name="subject">   
                    <option value="hello">I just want to say hello =]</option>
                    <option value="quote">I'd like a quote</option> 
                    <option value="general">General</option>   
                </select> 

                <label for="message">Message: <span class="required">*</span></label> 
                <textarea id="message" name="message" placeholder="Write your message here, please." required="required"></textarea> 

                <label for="telefono">Número de teléfono</label>
                <input id="telefono" name="telefono" type="tel" title="En esta ocasión nuestro navegador los mostrará como campos de texto normal, pero si tienes un smart phone a mano con un navegador que soporte HTML5 carga esta página para ver el resultado. En Safari del iPhone el teclado cambia si el foco está en uno u otro input:"/>

                <label for="cp">Código Postal</label>
                <input id="cp" name="cp" pattern="[\d]{5}(-[\d]{4})" />


                <label for="tdc">Tarjeta de credito(de 13 a 16 numeros): </label><input type="text" id="tdc" name="tdc" required pattern="^[0-9]{13,16}$" >               

                <input type="submit" value="Send away!" id="submit" />
            </form> 
        </div>

    </body>
</html>
