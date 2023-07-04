function validar() {

    var Nombre, Documento, Direccion, Telefono, Producto, Cantidad,  codigo, expresion, expresion2, expresion3;


    Documento = document.getElementById("Documento").value;
    Nombre = document.getElementById("Nombre").value;
    Direccion = document.getElementById("Direccion").value;
    Telefono = document.getElementById("Telefono").value;
    Producto = document.getElementById("Producto").value;
    Cantidad = document.getElementById("Cantidad").value;
    codigo = document.getElementById('codigo').value;



    expresion = /^[A-Za-z]+(?:\s[A-Za-z]+)*$/;
    expresion2 = /^[0-9]{10}$/;
    expresion3 = /^[1-9]$/;




    if (Nombre === "" || Documento === "" || Direccion === "" || Telefono === "" || Producto === "" || Cantidad === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }


    else if (Nombre.length > 40) {
        alert("El nombre es muy largo");
        return false;
    }

    else if (Nombre.length < 4) {
        alert("El nombre muy corto minimo 4 caracteres");
        return false;
    }

    else if (!expresion.test(Nombre)) {
        alert("No es valido el nombre ");
        return false;
    }

    else if (Documento.length > 10) {
        alert("El documento es muy lago maximo 10 digitos ");
        return false;
    }

    else if (Documento.length < 10) {
        alert("El documento es muy corto minimo 10 digitos ");
        return false;
    }

    else if (!expresion2.test(Documento)) {
        alert("No es valido el documento (solo numeros)");
        return false;
    }

    else if (Telefono.length > 10) {
        alert("El telefono es muy lago maximo 10 digitos ");
        return false;
    }

    else if (Telefono.length < 10) {
        alert("El telefono es muy corto minimo 10 digitos ");
        return false;
    }

    else if (!expresion2.test(Telefono)) {
        alert("No es valido el telefono (solo numeros)");
        return false;
    }

    else if(Cantidad.length < 1){
        alert("alemnos coloca un numero");
        return false;
    }

    else if (!expresion3.test(Cantidad)) {
        alert("solo numeros");
        return false;
    }

    else if(codigo.length < 1){
        alert("alemnos coloca un numero");
        return false;
    }

    else if(!expresion3.test(codigo)){
        alert("solo números")
        return false;
    }

}