//queremos que esta variable sea global
var fileExtension = "";

$(document).ready(function () {
    $("#btnCargar").click(enviarImagen);
    $('#selFile').change(metadatosImagen);
});


//función que observa los cambios del campo file y obtiene información
function metadatosImagen() {
    //obtenemos un array con los datos del archivo
    var file = $("#selFile")[0].files[0];
    //obtenemos el nombre del archivo
    var fileName = file.name;
    //obtenemos la extensión del archivo
    fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
    //obtenemos el tamaño del archivo
    var fileSize = file.size;
    //obtenemos el tipo de archivo image/png ejemplo
    var fileType = file.type;
    //mensaje con la información del archivo
    alert(fileName + ", peso total: " + fileSize + "-" + fileType);
}


function enviarImagen() {

    /*Se pasa el form a un array de datos con todos sus caracteristicas*/
    var formData = new FormData(document.getElementById("formulario"));

    $.ajax({
        url: '../controlador/ctlImagen.php',
        type: 'Post',
        data: formData,
        //necesario para subir archivos via ajax
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {
        },
        //una vez finalizado correctamente
        success: function (data) {
            alert("Exito");
        },
        error: function () {
        }
    });
}