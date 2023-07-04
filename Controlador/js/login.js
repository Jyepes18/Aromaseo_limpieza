function validar() {

    var Usuario, Contraseña, expresion, expresion1;

    Usuario = document.getElementById("Usuario").value;
    Contraseña = document.getElementById("Contraseña").value;


    expresion = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    expresion1 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (Usuario === "") {
        alert("El campos Usuario estra vacio");
        return false;
    }

    else if (Usuario.length > 100) {
        alert("EL usuario es muy largo");
        return false;
    }

    else if (!expresion.test(Usuario)) {
        alert("El usuario no es valido (Ejemplo: 123@gmail.com)");
        return false;
    }

    if (Contraseña === "") {
        alert("El campo de la contraseña esta vacio");
        return false
    }
}