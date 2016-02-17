$(document).ready(function () {
    listarDatos();
});

function listarDatos() {
    $.ajax({
        type: 'post',
        url: "../controlador/gestionGrilla.php",
        beforeSend: function () {
            alert("accion antes de enviar");
        },
        data: "",
        success: function (data) {
            $('#listado').html(data);
            $('#listadoEstudiantes').dataTable();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado: " + textStatus + "\nExcepcion: " + errorThrown);
            alert("Verifique la ruta del archivo");
        }
    });
}
