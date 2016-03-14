// Cuando se encuentra listo el doc esto es lo primero que se ejecutara
$(document).ready(function () {
    $("#btnSaludar").click(identificarCampos);// selector por id   
    $("#btnCalcular").click(enviarDatosAjax);// selector por id   
});

function identificarCampos() {
    var campos = 'input:text,\n\
                  input:password, \n\
                  textarea, \n\
                  select';

    $(campos).each(function () {
        var elemento = this;
        alert(elemento.id + "-" + elemento.value);

    });
}


function enviarDatosAjax() {

    var nombre = $("#txtNombre").val();
    var cantidad = $("#txtCantidad").val();
    var valor = $("#txtValor").val();
    var descuento = $("#selDescuento").val();
    var porcentajeDescuento = $("#txtPorcentajeDescuento").val();
    var porcentajeIVA = $("#txtPorcentajeIVA").val();
    var tipoRespuesta = $("#selTipoRespuesta").val();


    $.ajax({
        type: 'post',
        url: "../controlador/gestionRecepcion.php",
        beforeSend: function () {
            alert("accion antes de enviar");
        },
        data: {nombre: nombre, cantidad: cantidad, valor: valor,
            descuento: descuento, porcentajeDescuento: porcentajeDescuento,
            porcentajeIVA: porcentajeIVA, tipoRespuesta: tipoRespuesta},
        success: function (data) {
            alert(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado: " + textStatus + "\nExcepcion: " + errorThrown);
            alert("Verifique la ruta del archivo");
        }
    });
}