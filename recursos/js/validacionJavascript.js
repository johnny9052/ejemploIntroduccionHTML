function enviarDatos() {

    if (document.getElementById('txtNombre').value != "") {
        if (document.getElementById('txtEdad').value != "") {
            if (document.getElementById('txtPais').value != "") {
                if (document.getElementById('txtTelefono').value != "") {
                    alert("Todos los campos ingresados satisfactoriamente");
                } else {
                    alert("Ingrese telefono");
                }
            } else {
                alert("Ingrese pais");
            }
        } else {
            alert("Ingrese edad");
        }
    } else {
        alert("Ingrese nombre");
    }


}