function enviarDatos() {
    if (document.getElementById("txtNombre").value !== "") {
        if (/^[0-9]/.test(document.getElementById("txtEdad").value)) {
            if ((/^[A-Za-z]{3}$/.test(document.getElementById("txtPais").value))) {
                if ((/^[0-9]{10,12}$/.test(document.getElementById("txtTelefono").value))) {
                    alert("Enviar datos");
                } else {
                    alert("Ingrese numero telefonico");
                    document.getElementById("txtTelefono").focus();
                }
            } else {
                alert("El codigo del pais son 3 letras");
                document.getElementById("txtPais").focus();
            }
        } else {
            alert("Ingrese edad");
            document.getElementById("txtEdad").focus();
        }
    } else {
        alert("Ingrese nombre");
        document.getElementById("txtNombre").focus();
    }
}