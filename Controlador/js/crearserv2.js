function validar() {

    var nombre, apellido, td, documento, Telefono, correo, expresion, expresion2, expresion3, expresion4;

    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    td = document.getElementById("td").value;
    documento = document.getElementById("documento").value;
    Telefono = document.getElementById("Telefono").value;
    correo = document.getElementById("correo").value;
    


    expresion = /\w+@\w+\.+[a-z]/;

    expresion2 = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;

    expresion3 = /^[a-zA-Z0-9\s,'-]*$/;

    expresion4 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if(nombre ==="" || apellido==="" || td==="" || documento==="" || Telefono===""  || correo==="") {
       alert("Todos los campos son obligatorios");
        return false;
   }
   
    else if (documento.length>10){
    alert ("El documento es de maximo 10 caraceteres");
    return false;
    }    

    else if (isNaN(documento)) {
        alert ("En el campo Documento se agregan números");
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
   
    else if (apellido.length>30){
        alert ("Los Apellidos esta muy largo");
        return false;
    }  

    else if (!expresion2.test(apellido)){
        alert ("El Apellido no es valido");
        return false;
    }
            
    else if (Telefono.length<10){
        alert ("El telefono es de maximo 10 caraceteres");
        return false;
    }    

    else if (isNaN(Telefono)) {
        alert ("En el campo telefono se agregan números");
        return false;
    }

    

    else if (correo.length>100){
        alert ("El correo esta mal escrito");
        return false;
    }
    else if (!expresion.test(correo)){
        alert ("El correo no es valido");
        return false;
    }

    

                       
}
