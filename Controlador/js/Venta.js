function validar(){

    var  Fecha, Hora, Codigo, producto, Cantidad, Nombre, Telefono, Tipoid, Documento, Metodopago, Pagar, expresion, expresion2, expresion3, expresion4, expresion5, expresion6 ;

    Fecha = document.getElementById("Fecha").value;
    Hora = document.getElementById("Hora").value;
    Codigo = document.getElementById("Codigo").value;
    producto = document.getElementById("Producto").value;
    Cantidad = document.getElementById("Cantidad").value;
    Nombre = document.getElementById("Nombre").value;
    Telefono = document.getElementById("Telefono").value;
    Tipoid = document.getElementById("Tipoid").value;
    Documento = document.getElementById("Documento").value;
    Metodopago = document.getElementById("Metodopago").value;
    Pagar = document.getElementById("Pagar").value;

    expresion = /^\d+$/;

    expresion2 = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;

    expresion3 = /^[1-9]\d{9}$/;

    expresion4 = /^[0-9]+(?:\.[0-9]+)?$/;

    expresion6 = /^([01]\d|2[0-3]):([0-5]\d)$/;

 

    

    if (Fecha ==="" || Hora==="" || Codigo==="" || producto==="" || Cantidad===""  || Nombre==="" || Telefono==="" || Tipoid==="" || Documento=="" || Metodopago==="" || Pagar==="") {
        alert("Todos los campos son obligatorios");
         return false;
    }

    else if (Hora.length>100){
        alert ("Escribe la hora");
        return false;
    } 

    else if(!expresion6.test(Hora)){
        alert("Escribe bien la Hora (00:00 hasta 23:59)");
        return false;
    }

    else if (Codigo.length>3){
        alert ("El codigo es muy largo (maximo tres caracteres)");
        return false;
    }  

    else if (!expresion.test(Codigo)){
        alert("El codigo esta mal redactado (solo números)");
        return false;
    }

    else if (Nombre.length>30){
        alert ("El Nombre es muy largo");
        return false;
    }  

    else if (!expresion2.test(Nombre)){
        alert ("El nombre no es valido");
        return false;
    }

    else if (Telefono.length>10){
        alert ("Esta mal redactado el número telefonico ");
        return false;
    }

    else if (!expresion3.test(Telefono)){
        alert ("Esta mal redactado el número telefonico (solo numeros) minimo 10 caracteres");
        return false;
    }

    else if (Documento.length>10){
        alert ("Esta mal redactado el número Documento ");
        return false;
    }

    else if (!expresion3.test(Documento)){
        alert ("Esta mal redactado el número de documento (solo numeros) minimo 10 caracteres");
        return false;
    }

    else if (Pagar.length>20){
        alert ("Esta mal redactado el número Pago ");
        return false;
    }

    else if (!expresion4.test(Pagar)){
        alert ("Esta mal redactado el número del Pago (solo numeros)");
        return false;
    }
    else if(Fecha|| Hora||Codigo|| producto|| Cantidad|| Nombre|| Telefono|| Tipoid|| Documento|| Metodopago|| Pagar == true){
        alert("Todos los datos enviados correctamente")
        return false;
    }

    












}