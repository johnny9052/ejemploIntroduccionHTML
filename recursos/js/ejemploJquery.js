// Cuando se encuentra listo el doc esto es lo primero que se ejecutara
$(document).ready(function () {
    $("#btnSaludar").click(saludar);// selector por id
    $("#btnLlenarCampos").click(llenarCampos);// selector por id
    $("#btnCambiarTexto").click(cambiarTexto);// selector por id    
    $("#btnInsertar").click(insertarHTML);// selector por id  
    $("#btnRemoverClase").click(removerClase);// selector por id      
    $("#btnAgregarClase").click(agregarClase);// selector por id  
    $("#btnMostrar").click(mostrar);// selector por id 
    $("#btnOcultar").click(ocultar);// selector por id 
});

function saludar() {
    alert("Hola que mas!!");
}

function llenarCampos() {
    $(".cajaTexto").val("Ya tengo algo");
}

function cambiarTexto() {
    $("#lblPunto3").text("Este es el nuevo texto!!");
}

function insertarHTML() {
    $("#divFormulario").html('Ingrese nombre:<input type="text" id="nombre"><br>Ingrese clave:<input type="text" id="clave"><br><input type="submit" value="confirmar">');
}

function agregarClase() {
    $("label").addClass("punto");
}

function removerClase() {
    $("label").removeClass();
}

function mostrar() {
$("#textOC").show("slow");
$("#textOC2").fadeIn("slow");
}

function ocultar() {
$("#textOC").hide("slow");
$("#textOC2").fadeOut("slow");
}
