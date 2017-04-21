
function mostrarMensaje() {
    alert("Hola, ya muestro el mensaje");
}


function saludar() {
    
    var nombre = document.getElementById("txtNombre").value;
    var apellido = document.getElementById("txtApellido").value;

    if (nombre !== "") {
        if (apellido !== "") {
            alert("Hola " + nombre + " " + apellido + ", como estas");
        } else {
            alert("Ingrese apellido");
        }
    } else {
        alert("ingrese nombre");
    }
}




function calcularFactorial() {
    
    var num = document.getElementById("txtNumeroFactorial").value;

    var resultado = 1;

    for (var x = 1; x <= num; x++) {
        resultado = resultado * x;
    }

    alert("el factorial de " + num + " es " + resultado);
}





function calcularIVA() {
    var precio = document.getElementById("selProducto").value;
    var iva = parseFloat(precio) * 0.16;
    document.getElementById("txtResultadoIVA").value = iva;
    document.getElementById("lblResultadoIVA").innerHTML = iva;
    alert(iva);
}








function queGusta() {
    var opcion;
    for (var i = 0; i < document.formu.rdEj5.length; i++) {
        if (document.formu.rdEj5[i].checked) {
            opcion = i;
        }
    }
    alert("Lo que te gusta es " + document.formu.rdEj5[opcion].value);
}












function opcionesSeleccionadas() {
    var checkboxes = document.getElementById("formCheckbox").checkbox;
    var listado = "";
    for (var x = 0; x < checkboxes.length; x++) {
        if (checkboxes[x].checked) {
            listado = listado + " " + checkboxes[x].value;
        }
    }
    alert("Las opciones seleccionadas son " + listado);
}






function mostrarOcultar() {
    if (document.getElementById("selOcultarMostrar").style.display === "none") {
        document.getElementById("selOcultarMostrar").style.display = "block";
    } else {
        document.getElementById("selOcultarMostrar").style.display = "none";
    }

}




function cambiarEstilo(color) {
    if (color === "rojo") {
        document.getElementById("recuadroColor").style.backgroundColor = "red";
    }

    if (color === "azul") {
        document.getElementById("recuadroColor").style.backgroundColor = "blue";
    }

    if (color === "verde") {
        document.getElementById("recuadroColor").style.backgroundColor = "green";
    }
}




function cambiarClase(color) {
    if (color === "rojo") {
        document.getElementById("recuadroColor").className = "fondoRojo";
    }
    if (color === "azul") {
        document.getElementById("recuadroColor").className = "fondoAzul";
    }
}





function evaluar() {
    var expresion = document.getElementById("txtExpresion").value;
    alert(eval(expresion));
}






function insertHTML() {
    var tabla = "<table class='fondoAzul' border='1'>";

    for (var x = 0; x < 4; x++) {
        tabla += "<tr>";
        tabla += "<td>A</td>";
        tabla += "<td>B</td>";
        tabla += "<td>C</td>";
        tabla += "<td>D</td>";
        tabla += "</tr>";
    }
    tabla += "</table>";

    document.getElementById('divTab').innerHTML = tabla;
}



function validarCadena() {
    var pos = document.getElementById("txtPosicion").value;
    var texto = document.getElementById("txtPalabra").value;

    alert(texto.substring(0, pos));
}