prestamos = [{num_prestamo:'',user:'', idlibro:'',titulo:'',fecha_sol:'',fecha_reg:''}];
consultaGen();
function consulta(){
    let prestamo=$("#pres").val();
    $.getJSON("crud_prestamos.php", {operacion:'R', pres:prestamo}).done(function(datos){
        //console.log(datos);
        prestamos = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}
function consultaGen(){
    $.getJSON("crud_prestamos.php", {operacion:'R2'}).done(function(datos){
        console.log(datos);
        prestamos = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}
function actualizar(){
    $("#tablaPrestamos").html('');
    for(let i = 0 ; i < prestamos.length; i++){
        let fila = "<tr><td>" + prestamos[i].num_prestamo + "</td><td>" + prestamos[i].user + "</td><td>" + prestamos[i].idlibro + "</td><td>" + prestamos[i].titulo + "</td><td>" + prestamos[i].fecha_sol + "</td><td>" + prestamos[i].fecha_reg + "</td></tr>";
        //console.log(fila);
        $("#tablaPrestamos").append(fila);
    }
    
}