function validar() {
    var Tipoid, Documento, Nombre, Apellido, Telefono, Direccion, Correo, Cargo, Codigo, expresion, expresion2, expresion3, expresion4;

    Tipoid = document.getElementById("Tipoid").value;
    Documento = document.getElementById("Documento").value;
    Nombre = document.getElementById("Nombre").value;
    Apellido = document.getElementById("Apellido").value;
    Telefono = document.getElementById("Telefono").value;
    Direccion = document.getElementById("Direccion").value;
    Correo = document.getElementById("Correo").value;
    Cargo = document.getElementById("Cargo").value;
    Codigo = document.getElementById("Codigo").value;

    expresion = /\w+@\w+\.+[a-z]/;

    expresion2 = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;

    expresion3 = /^([0-9]{1,10})$/;

    expresion4 = /^\d+$/;

    

    if(Tipoid ==="" || Documento==="" || Nombre==="" || Apellido==="" || Telefono===""  || Direccion==="" || Correo==="" || Cargo==="" || Codigo=="") {
        alert("Todos los campos son obligatorios");
         return false;
    }

    else if (Documento.length> 10){
        alert ("El documento es de maximo 10 caraceteres");
        return false;
    }  
    
    else if (Nombre.length>40){
        alert ("El Nombre esta   muy largo");
        return false;
    }  

    else if (!expresion2.test(Nombre)){
        alert ("El nombre no es valido");
        return false;
    }

    else if (Apellido.length>40){
        alert ("El documento es de maximo 10 caraceteres");
        return false;
    }  

    else if (!expresion2.test(Apellido)){
        alert ("Los apeliidos  no son validos");
        return false;
    }

    else if (Telefono.length>10){
        alert ("El documento es de maximo 10 caraceteres");
        return false;
    } 

    else if (!expresion3.test(Telefono)){
        alert ("El telefono esta mal escrito");
        return false;
    }

    else if (Direccion.length>40){
        alert ("El documento es de maximo 10 caraceteres");
        return false;
    }  

    else if (Correo.length>40){
        alert ("El documento es de maximo 10 caraceteres");
        return false;
    } 

    else if (!expresion.test(Correo)){
        alert ("El correo no es valido");
        return false;
    }

    else if (Codigo.length>3){
        alert ("El Codigo es de maximo 3 caraceteres");
        return false;
    }
    else if (!expresion4.test(Codigo)){
        alert("El codigo esta mal redactado");
        return false;
    }
    

}