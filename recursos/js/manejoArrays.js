var vector = new Array();

function anadir(){
    var valor = document.getElementById("txtValor").value;
    vector.push(valor);
    document.getElementById("estadoVector").innerHTML= vector;
    document.getElementById("txtValor").value="";
}

function eliminarUltimo(){    
    var valor= vector.pop();
    alert("el valor eliminado fue "+valor);
    document.getElementById("estadoVector").innerHTML= vector;
    document.getElementById("txtValor").value="";
}


function eliminarPrimero(){    
    var valor= vector.shift();
    alert("el valor eliminado fue "+valor);
    document.getElementById("estadoVector").innerHTML= vector;
    document.getElementById("txtValor").value="";
}


function invertir(){
    vector = vector.reverse();
    document.getElementById("estadoVector").innerHTML= vector;
}


function ordenar(){
    vector = vector.sort();               
    document.getElementById("estadoVector").innerHTML= vector;
}

function anadirInicio(){
    var valor = document.getElementById("txtValor").value;
    vector.unshift(valor);
    document.getElementById("estadoVector").innerHTML= vector;
    document.getElementById("txtValor").value="";
}


function buscarElemento(){
    var valor =prompt('Ingrese valor:','xxxxxxxx');//segundo parametro valor por defecto
    alert("Esta en la posicion "+vector.indexOf(valor));    
}



function anadirElementosPosicion(){
    var valor =prompt('Ingrese valor:','');//segundo parametro valor por defecto
    var posicion = prompt('En que posicion la quiere añadir?:','');//segundo parametro valor por defecto
    vector.splice(posicion,0,valor); //el cero indica la cantidad de elementos a borrar despues de la posicion indicada
    document.getElementById("estadoVector").innerHTML= vector;
}


function tamanoVector(){
    alert(vector.length);
}
