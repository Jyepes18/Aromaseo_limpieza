function validar() {
    
    var  Producto, Categoria, Nombre, Precio, Descripcion, Codigo, expresion, expresion2, expresion3, expresion4;

    Producto = document.getElementById("Producto").value;
    Categoria = document.getElementById("Categoria").value;
    Nombre = document.getElementById("Nombre").value;
    Precio = document.getElementById("Precio").value;
    Descripcion = document.getElementById("Descripcion").value;
    Codigo = document.getElementById("Codigo").value
    

    expresion = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;

    expresion2 = /^\d+$/;

    expresion3 = /^[A-Za-z0-9\s.,?!'-]*$/;

    expresion4 = /^[0-9]+$/;

    expresion5 = /^[0-9]+$/;


    if(Producto ==="" || Categoria ==="" || Nombre ==="" || Precio==="" || Descripcion==="" || Codigo ==="") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (Producto.length>40){
        alert ("El producto es muy largo");
        return false;
    } 

    else if(!expresion.test(Producto)){
        alert ("El producto no es valido");
        return false;
    }

    else if (Categoria.length>40){
        alert ("Elige la categoria del producto");
        return false;
    }  

    else if (Nombre.length>30){
        alert ("El Nombre es muy largo");
        return false;
    }  
    else if (!expresion.test(Nombre)){
        alert ("El nombre no es valido");
        return false;
    }

    else if (Precio.length>10){
        alert ("escribe el precio del producto");
        return false;
    } 
    else if (!expresion4.test(Precio)){
        alert("El precio esta mal redactado (solo números)");
        return false;
    }

    else if (Descripcion.length>500){
        alert ("El Codigo e");
        return false;
    }
    else if (!expresion3.test(Descripcion)){
        alert("La descripcion esta mal redactada");
        return false;
    }
    else if(!expresion5.test(Codigo)){
        alert("El codigo esta mal redactado");
        return false;
    }



}
