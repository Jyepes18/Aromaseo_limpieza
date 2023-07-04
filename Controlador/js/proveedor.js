
function validar() {

    var  Documento, TD, Nombre, Apellido, Telefono, Correo, factura, expresion, expresion2;

    Documento = document.getElementById("Documento").value;
    TD = document.getElementById("TD").value;
    Nombre = document.getElementById("Nombre").value;
    Apellido = document.getElementById("Apellido").value;
    Telefono = document.getElementById("Telefono").value;
    Correo= document.getElementById("Correo").value;
    factura = document.getElementById("factura").value

    expresion = /\w+@\w+\.+[a-z]/;

    expresion2 = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;

 

    if(tipoid ==="" || Documento==="" || Nombre==="" || Apellido==="" || Telefono===""  ||  Correo===""|| factura==="") {
       alert("Todos los campos son obligatorios");
        return false;
   }
   
    else if (Documento.length>10){
    alert ("El documento es de maximo 10 caraceteres");
    return false;
    }    

    else if (isNaN(Documento)) {
        alert ("En el campo Documento se agregan números");
        return false;
    }

    else if (Nombre.length>30){
        alert ("El nombre esta muy largo");
        return false;
        }  
        else if (!expresion2.test(Nombre)){
            alert ("El nombre no es valido");
            return false;
        }
   
    else if (Apellido.length>30){
        alert ("Los Apellidos esta muy largo");
        return false;
    }  

    else if (!expresion2.test(Apellido)){
        alert ("El Apellido no es valido");
        return false;
    }
            
    else if (Telefono.length>10){
        alert ("El telefono es de maximo 10 caraceteres");
        return false;
    }    

    else if (isNaN(Telefono)) {
        alert ("En el campo telefono se agregan números");
        return false;
    }

    else if (Correo.length>100){
        alert ("El correo esta mal escrito");
        return false;
    }
    else if (!expresion.test(Correo)){
        alert ("El correo no es valido");
        return false;
    }

                       
}


