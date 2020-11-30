function agregarUser(){
    let user = document.getElementById("user").value;
    let nombre = document.getElementById("nombre").value;
    let pass = document.getElementById("pass").value;
    let tipo = "U";
    $.getJSON("crud_usuarios.php",{operacion:"C",user:user,pass:pass,tipo:tipo,nombre:nombre}).done(function(datos){
        if(datos.resp == "si"){
            console.log("si")
        }else{
            $('.toast').toast('show')
            console.log("no agrego")
        }
    });
}