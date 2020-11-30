$("#msgLogin").hide();
function login(){
    u = $("#user").val();
    p = document.getElementById("pass").value;
    t = document.getElementById("tipoUs").value;

    if(t=="A"){
    $.getJSON("login.php",{user:u,pass:p}).done(function(datos){
        console.log(datos);
        if(datos.resp == "si"){
            location.href="inicio.php";
        }else{
            $("#msgLogin").fadeIn(1000);
            $("#msgLogin").html("Error de usuario/contraseña");
        }
     });
    }else if (t=="U") {
        $.getJSON("login.php",{user:u,pass:p}).done(function(datos){
            console.log(datos);
            if(datos.resp == "si"){
                location.href="iniciouser.php";
            }else{
                $("#msgLogin").fadeIn(1000);
                $("#msgLogin").html("Error de usuario/contraseña");
            }
         });
    } 
}