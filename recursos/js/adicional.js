

function numeroAleatorio() {
    alert(Math.floor(Math.random() * (100 - 1 + 1)) + 1);
    //Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;
}




function cast() {
    var num = prompt("Ingrese numero:", "");
    if (parseInt(num)) {
        alert(parseInt(num) + " es un numero");
    } else {
        alert(num + " No es un numero");
    }
}




function iniciarAccion() {
    setTimeout(function (){alert("Hola mundo");}, 5000);
}


function iniciarAccionInfinita() {
    setTimeout(function () {
        alert("Hola mundo");    
        iniciarAccionInfinita();
    }, 1500);
}