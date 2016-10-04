

function numeroAleatorio() {
    alert(Math.floor(Math.random() * (20 - 10 + 1)) + 10);
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
    setTimeout(function () {
        alert("Hola mundo");        
    }, 1500);
}








function iniciarAccionInfinita() {
    setTimeout(function () {
        alert("Hola mundo");    
        iniciarAccionInfinita();
    }, 1500);
}