
function mostraInfo_click($id) {  //Función que muestra la información del producto cuando haces click

    $(document).ready(function(e){
            console.log($id);

            $.ajax({url: "index.php?action=info_pelicula&id="+$id,
                dataType: 'html',
                success: function(data){
                    $("#info_pelicula").html(data);
                    $("#info_pelicula").show();
                },
                complete: function (data) {
                    $(window).scrollTop(0);
                }
            });
    });
}




function mostrarCategorias($id) {  //Función que muestra la información del producto cuando haces click

    $(document).ready(function(){

        $.ajax({url: "index.php?action=categoria&id="+$id,
            dataType: 'html',
            success: function(data){
                $("#caratulas").html(data);
                $("#caratulas").show();
            }
        });
    });
}


function mostrarResumenCarrito() {  //Función que muestra la información del producto cuando haces click
    $(document).ready(function(){

        $.ajax({url: "index.php?action=summary",
            dataType: 'html',
            success: function(data){
                $("#resumenCarrito").html(data);
            }
        });
    });
}


function insertarProductoAlCarrito(param1_value) {

    $.ajax({
        type: 'POST',
        url: '/controllers/insertaCarrito.php',
        data: {param1 : param1_value} ,
        success: function()
        {
            mostrarResumenCarrito();
        }
    });
    alert('Película añadida al carrito');
}

function validar_usuario() { //Función que se encarga de validar el usuario por parte del cliente

    var txtNombre = document.getElementById('nombre').value;
    var txtApellidos = document.getElementById('apellidos').value;
    var txtDNI = document.getElementById('dni').value;
    var txtEmail = document.getElementById('mail').value;
    var txtContraseña = document.getElementById('password').value;
    var txtdireccion= document.getElementById('direccion').value;
    var txtpoblacion = document.getElementById('poblacion').value;
    var txtcodigo_postal = document.getElementById('postal').value;

    //Test Nombre
    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
        alert('ERROR: El campo nombre no debe ir vacío');
        return false;
    }

    //Test apellidos
    if(txtApellidos == null || txtApellidos.length == 0 || /^\s+$/.test(txtApellidos)){
        alert('ERROR: Debe ingresar apellidos');
        return false;
    }

    //Test DNI
    var numero_dni;
    var letr_dni;
    var letra_dni;
    var expresion_regular_dni;
    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

    if(txtDNI == null || txtDNI.length == 0 || /^\s+$/.test(txtDNI))
    {
        alert('ERROR: Debe introducir un DNI');
        return false;

    }else{
        if(expresion_regular_dni.test (txtDNI) == true){
            numero_dni = txtDNI.substr(0,txtDNI.length-1);
            letr_dni = txtDNI.substr(txtDNI.length-1,1);
            numero_dni = numero_dni % 23;
            letra_dni='TRWAGMYFPDXBNJZSQVHLCKET';
            letra_dni=letra_dni.substring(numero_dni,numero_dni+1);
            if (letra_dni!=letr_dni.toUpperCase()) {
                alert('DNI erróneo, la letra del NIF no se corresponde');
                return false;

            }
        }else{
            alert('DNI erróneo, formato no válido');
            return false;
        }

    }

    //Test direccion
    if(txtdireccion == null || txtdireccion.length == 0 || txtdireccion.length >= 30 || /^\s+$/.test(txtdireccion)){
        alert('ERROR: Dirección solo puede tener 30 carácteres como máximo y no debe dejarse vacío.');
        return false;
    }

    //Test Poblacion
    if(txtpoblacion == null || txtpoblacion.length == 0 || txtdireccion.length >= 30 || /^\s+$/.test(txtpoblacion)){
        alert('ERROR: Población solo puede tener 30 carácteres como máximo y no debe dejarse vacío.');
        return false;
    }

    //Test Codigo postal
    if(txtcodigo_postal == null || txtcodigo_postal.length != 5){
        alert('ERROR: Tienes que introducir un codigo postal válido. ');
        return false;
    }

    //Test campo obligatorio (Email)
    if(txtEmail == null || txtEmail.length == 0 || /^\s+$/.test(txtEmail)){
        alert('ERROR: El campo e-mail no debe ir vacío');
        return false;
    }

    //Test e-mail (Comprobar si es correcto)
    if(!(/\S+@\S+\.\S+/.test(txtEmail))){
        alert('ERROR: Debe escribir un correo válido');
        return false;
    }

    //Test Contraseña
    if(txtContraseña == null || txtContraseña.length == 0 || /^\s+$/.test(txtContraseña)){
        alert('ERROR: Debe ingresar una contraseña');
        return false;
    }

    return true;
}

