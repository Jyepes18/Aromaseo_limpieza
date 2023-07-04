
function validar() {

    var Nombre, Tipodedocumento, Documento, producto, expresion, expresion2, expresion3;


    Documento = document.getElementById("Documento").value;
    Nombre = document.getElementById("Nombre").value;
    producto = document.getElementById("Producto").value;
    Tipodedocumento = document.getElementById("tipoid").value;

    
    expresion = /^[A-Za-z]+(?:\s[A-Za-z]+)*$/;
    expresion2 = /^[0-9]{10}$/;
    expresion3 = /\w+/;



    if (Nombre === "" || Documento === "" || producto === "" || Tipodedocumento === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }


    else if (Nombre.length > 40) {
        alert("El nombre es muy largo");
        return false;
    }

    else if (Nombre.length< 4 ) {
        alert("El nombre muy corto minimo 4 caracteres");
        return false;
    }

    else if(!expresion.test(Nombre)){
        alert("No es valido el nombre ");
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

    else if(!expresion2.test(Documento)){
        alert("No es valido el documento (solo numeros)");
        return false;
    }

    else if (producto.length > 500) {
        alert("EL texto es muy largo maximo 500 caracteres");
        return false;
    }

    else if (producto.length< 10) {
        alert("EL texto es muy corto minimo 10 caracteres ");
        return false;
    }

    else if(!expresion3.test(producto )){
        alert("No es valido el texto ");
        return false;
    }




}