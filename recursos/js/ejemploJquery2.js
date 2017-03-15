// Cuando se encuentra listo el doc esto es lo primero que se ejecutara
$(document).ready(function () {
    $("#btnIndentificar").click(identificarCampos);// selector por id   
    $("#btnCalcular").click(enviarDatosAjax);// selector por id   
});

function identificarCampos() {
            
    var campos = 'input,\n\
                  textarea, \n\
                  select';

    $(campos).each(function () {                            
        alert(this.id + "-" + this.value+"-"+this.type);                
    });
}

function enviarDatosAjax() {

    var nombre = $("#txtNombre").val();
    var cantidad = $("#txtCantidad").val();
    var valor = $("#txtValor").val();
    var descuento = $("#selDescuento").val();
    var porcentajeDescuento = $("#txtPorcentajeDescuento").val();
    var porcentajeIVA = $("#txtPorcentajeIVA").val();    

    $.ajax({
        type: 'post',
        url: "../controlador/gestionRecepcion.php",
        beforeSend: function () {
            alert("accion antes de enviar");
        },
        data: {nombre: nombre, cantidad: cantidad, valor: valor,
            descuento: descuento, porcentajeDescuento: porcentajeDescuento,
            porcentajeIVA: porcentajeIVA},
        success: function (data) {
            alert(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado: " + textStatus + "\nExcepcion: " + errorThrown);
            alert("Verifique la ruta del archivo");
        }
    });
}