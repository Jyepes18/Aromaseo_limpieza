
function validar() {

var nombre, cod, est, expresion2, expresion3, expresion;


nombre = document.getElementById("nombre").value;
cod = document.getElementById("cod").value;
est = document.getElementById("est").value;

expresion = /^\d+$/;

expresion2 = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;

expresion3 = /^[a-zA-Z0-9\s,'-]*$/;

if( nombre==="" || cod==="" || est==="" ) {
   alert("Todos los campos son obligatorios");
    return false;
}



else if (nombre.length>30){
    alert ("El nombre esta muy largo");
    return false;
    }  
    else if (!expresion2.test(nombre)){
        alert ("El nombre no es valido");
        return false;
    }

        
else if (cod.length>3){
    alert ("El codigo es de maximo 3 caraceteres");
    return false;
}    

else if (!expresion.test(cod)) {
    alert ("En el campo codigo se agregan números");
    return false;
}

else if (est.length>30){
    alert ("El estado es muy largo");
    return false;
    }  
    else if (!expresion2.test(est)){
        alert ("El estado no es valido");
        return false;
    }

                   
}
