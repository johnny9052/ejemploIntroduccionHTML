// Cuando se encuentra listo el doc esto es lo primero que se ejecutara
$(document).ready(function () {
    $("#btnCalcular").click(enviarDatosAjax);// selector por id   

});



function enviarDatosAjax() {

    var nombre = $("#txtNombre").val();
    var cantidad = $("#txtCantidad").val();
    var valor = $("#txtValor").val();
    var descuento = $("#selDescuento").val();
    var porcentajeDescuento = $("#txtPorcentajeDescuento").val();
    var porcentajeIVA = $("#txtPorcentajeIVA").val();
    var tipoRespuesta = $("#selTipoRespuesta").val();

    var arrayParameters = new Array();

    arrayParameters.push(newArg('nombre', nombre));
    arrayParameters.push(newArg('cantidad', cantidad));
    arrayParameters.push(newArg('valor', valor));
    arrayParameters.push(newArg('descuento', descuento));
    arrayParameters.push(newArg('porcentajeDescuento', porcentajeDescuento));
    arrayParameters.push(newArg('porcentajeIVA', porcentajeIVA));    
    
    var send = arrayParameters.join('&');    
    sendRequestPost('../controlador/gestionRecepcion.php', send, enviarDatosAjax_processResponse);


}



function enviarDatosAjax_processResponse() {
    if (this.readyState === 4) {
        if (this.status === 200) {
            try {
                alert(this.responseText);
            } catch (elError) {
                alert("Error");
            }
        }
    }
}