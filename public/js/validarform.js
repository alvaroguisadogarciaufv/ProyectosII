function validarform(){
    var nombre, apellidos, email, dni, telefono, password1, password2;
    var expresion;

    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    email = document.getElementById("email").value;
    password1 = document.getElementById("password1").value;
    password2 = document.getElementById("password2").value;

    expresion = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;

    if(nombre=="" || apellidos=="" || email=="" || dni=="" || telefono=="" || password1=="" || password2==""){
        alert("Todos los campos son obligatorios.");
        return false;
    }else if(nombre.length>20){
        alert("El nombre debe tener menos de 21 carácteres.");
        document.getElementById("nombre").focus();
        return false;
    }else if(apellidos.length>50){
        alert("Los apellidos superan los 50 carácteres de límite.");
        document.getElementById("apellidos").focus();
        return false;
    }else if(!expresion.test(email)){
        alert("El formato del email es incorrecto.");
        document.getElementById("email").value = "";
        document.getElementById("email").focus();
        return false;
    }else if(email.length>50){
        alert("El email debe tener menos de 51 carácteres.");
        document.getElementById("email").value = "";
        document.getElementById("email").focus();
        return false;
    }else if(password1 != password2){
        alert("Las contraseñas no coinciden.");
        document.getElementById("password1").value = "";
        document.getElementById("password2").value = "";
        document.getElementById("password1").focus();
        return false;
    }
}