function enviarDatos() {
    if (document.getElementById('miFormulario').checkValidity()) {
        alert('Se pueden enviar los datos');
        return false;
    }
    //return false;//Solo para aplicarlo en AJAX
}

function validarCadena2() {
    var texto = document.getElementById("txtPais").value;

    if (texto.length > 2) {
        texto = texto.substring(0,2);
    }
    
    document.getElementById("txtPais").value= texto;
}