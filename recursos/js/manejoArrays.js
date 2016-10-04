var lista = new Array();

function anadir(){
    var valor = document.getElementById("txtValor").value;
    lista.push(valor);
    document.getElementById("estadoVector").innerHTML= lista;
    document.getElementById("txtValor").value="";
}







function eliminarUltimo(){    
    var valor= lista.pop();
    alert("el valor eliminado fue "+valor);
    document.getElementById("estadoVector").innerHTML= lista;
    document.getElementById("txtValor").value="";
}


function eliminarPrimero(){    
    var valor= lista.shift();
    alert("el valor eliminado fue "+valor);
    document.getElementById("estadoVector").innerHTML= lista;
    document.getElementById("txtValor").value="";
}




function invertir(){
    lista = lista.reverse();
    document.getElementById("estadoVector").innerHTML= lista;
}




function ordenar(){
    lista = lista.sort();               
    document.getElementById("estadoVector").innerHTML= lista;
}




function anadirInicio(){
    var valor = document.getElementById("txtValor").value;
    lista.unshift(valor);
    document.getElementById("estadoVector").innerHTML= lista;
    document.getElementById("txtValor").value="";
}






function buscarElemento(){
    var valor =prompt('Ingrese valor:','xxxxxxxx');//segundo parametro valor por defecto
    alert("Esta en la posicion "+lista.indexOf(valor));    
}






function anadirElementosPosicion(){
    //segundo parametro valor por defecto
    var valor =prompt('Ingrese valor:','');
    //segundo parametro valor por defecto
    var posicion = prompt('En que posicion la quiere añadir?:','');
    //el cero indica la cantidad de elementos a borrar 
    //despues de la posicion indicada
    lista.splice(posicion,0,valor);                                     
    document.getElementById("estadoVector").innerHTML= lista;
}


function tamanoVector(){
    alert(lista.length);
}
