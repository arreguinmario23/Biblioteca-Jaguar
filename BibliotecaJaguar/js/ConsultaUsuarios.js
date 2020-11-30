usuarios = [{user:'admin',tipo:'A', nombre:'Administrador'}];
consultaGen();
function consulta(){
    let usuario=$("#usuario").val();
    $.getJSON("crud_usuarios.php", {operacion:'R', usuario:usuario}).done(function(datos){
        //console.log(datos);
        usuarios = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}
function consultaGen(){
    $.getJSON("crud_usuarios.php", {operacion:'R2'}).done(function(datos){
        console.log(datos);
        usuarios = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}
function actualizar(){
    $("#tablaUsuarios").html('');
    for(let i = 0 ; i < usuarios.length; i++){
        let fila = "<tr><td>" + usuarios[i].user + "</td><td>" + usuarios[i].tipo + "</td><td>" + usuarios[i].nombre + "</td></tr>";
        //console.log(fila);
        $("#tablaUsuarios").append(fila);
    }
    
}
