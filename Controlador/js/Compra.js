function validar(){
    var factura, nombrep, tel, doc, fecha, producto, cantidad,descripcion,valor1,valor2, expresion1, expresion2,expresion3, expresion4;

    factura = document.getElementById("factura").value;
    nombrep = document.getElementById("nombrep").value; 
    tel = document.getElementById("tel").value;
    doc = document.getElementById("doc").value;
    fecha = document.getElementById("fecha").value;
    producto = document.getElementById("producto").value;
    cantidad = document.getElementById("cantidad").value;
    descripcion = document.getElementById("descripcion").value;
    valor1 = document.getElementById("valor1").value;
    valor2 = document.getElementById("valor2").value;
   
    expresion1 = /^(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;
    expresion2 = /^\d+(\.\d{1,2})?$/
    expresion3 = /^[A-Za-z\s]+$/
    expresion4 = /^\d+$/

    if(factura ==="" || nombrep==="" || tel==="" || doc==="" || fecha===""  || producto==="" || cantidad==="" || descripcion===""|| valor1===""|| valor2==="") {
        alert("Todos los campos son obligatorios");
         return false;
    }


    else if (factura.length>4){
        alert ("El numero de factura debe tener al menos 4 caracteres");
        return false;
        }    
    
        else if (isNaN(factura)) {
            alert ("En el campo Factura se agregan números");
            return false;
        }

        else if (nombrep.length>30){
            alert ("El nombre esta muy largo");
            return false;
            }  
            else if (!expresion3.test(nombrep)){
                alert ("El nombre no es valido");
                return false;
            }
            else if (tel.length>10){
                alert ("El telefono es de maximo 10 caraceteres");
                return false;
            }    
        
            else if (isNaN(tel)) {
                alert ("En el campo telefono se agregan números");
                return false;
            }

            else if (doc.length>10){
                alert ("El documento es de maximo 10 caraceteres");
                return false;
                }    
            
                else if (isNaN(Documento)) {
                    alert ("En el campo Documento se agregan números");
                    return false;
                }
  
            
                else if (!expresion1.test(fecha)){
                    alert ("La fecha es obligatoria");
                    return false;
                }












}