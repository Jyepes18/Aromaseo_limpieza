function validar() {

    var  Tipodedocumento, Documento, Nombres, Apellidos, Telefono, Usuario, Contraseña, codigorol, expresion, expresion2, expresion3, expresion4;

    Tipodedocumento = document.getElementById("tipoid").value;
    Documento = document.getElementById("Documento").value;
    Nombres = document.getElementById("Nombres").value;
    Apellidos = document.getElementById("Apellidos").value;
    Telefono = document.getElementById("Telefono").value;
    Usuario = document.getElementById("Usuario").value;
    Contraseña = document.getElementById("Contraseña").value;
    codigorol = document.getElementById("codigorol").value;

    expresion = /^[A-Za-z]+(?:\s[A-Za-z]+)*$/;
    expresion2 = /^[0-9]{10}$/;
    expresion3 = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    expresion4 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; 
    expresion5 = /^[0-9]{10}$/;


    if (Nombres === "") {
        alert("El campo Nombres esta vacio");
        return false;
    }

    else if (Tipodedocumento === ""){
        alert("El campo de tipo de documento esta vacio");
        return false;
    }
    else if (Documento === ""){
        alert("EL campo del documento esta vacio");
        return false;

    }
    else if (Documento.length > 10) {
        alert("El documento es muy lago maximo 10 digitos ");
        return false;
    }

    else if (Documento.length< 10) {
        alert("El documento es muy corto minimo 10 digitos ");
        return false;
    }

    else if(!expresion5.test(Documento)){
        alert("No es valido el documento (solo numeros)");
        return false;
    }


    else if (Nombres.length > 40) {
        alert("Los nombres son muy largos");
        return false;
    }

    else if (Nombres.length< 4 ) {
        alert("Los Nombres son muy cortos minimo 4 caracteres");
        return false;
    }

    else if(!expresion.test(Nombres)){
        alert("No son validos los nombres");
        return false;
    }

    if (Apellidos === "") {
        alert("El campo Apellidos esta vacio");
        return false;
    }

    else if (Apellidos.length > 40) {
        alert("Los apellidos son muy largos");
        return false;
    }

    else if (Apellidos.length<4 ) {
        alert("Los apellidos son muy cortos minimo 4 caracteres");
        return false;
    }

    else if(!expresion.test(Apellidos)){
        alert("No son validos los apellidos");
        return false;
    }

    if (Telefono === "") {
        alert("El campo de Telefono esta vacio");
        return false;
    }

    else if (Telefono.length > 10) {
        alert("El telefono es muy lago maximo 10 digitos ");
        return false;
    }

    else if (Telefono.length< 10) {
        alert("El telefono es muy corto minimo 10 digitos ");
        return false;
    }

    else if(!expresion2.test(Telefono)){
        alert("No es valido el telefono (solo numeros)");
        return false;
    }

    if (Usuario === "") {
        alert("El campos Usuario estra vacio");
        return false;
    }

    else if (Usuario.length > 100) {
        alert("EL usuario es muy largo");
        return false;
    }

    else if (!expresion3.test(Usuario)) {
        alert("El usuario no es valido (Ejemplo: 123@gmail.com)");
        return false;
    }

    if (Contraseña === "") {
        alert("El campo de la contraseña esta vacio");
        return false;
    }

    else if (Contraseña.length > 20) {
        alert("La contraseña es muy larga maximo 20 caracteres ");
        return false;
    }

    else if (Contraseña.length<8) {
        alert("La contraseña es muy corta minimo 8 caracteress ");
        return false;
    }

    else if (!expresion4.test(Contraseña)) {
        alert("La contraseña al menos debe tener una letra mayuscula, una minuscula y un numero");
        return false;
    }

    else if(codigorol === "") {
        alert("El campo rol esta vacio");
        return false;
    }


}