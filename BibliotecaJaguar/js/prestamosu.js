prestamos = [{num_prestamo:'',idlibro:'',fecha_sol:'',fecha_reg:''}];
consulta();
function consulta(){
    $.getJSON("cons_presU.php").done(function(datos){
        //console.log(datos);
        prestamos = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}

function actualizar(){
    $("#tablaPrestamosU").html('');
    for(let i = 0 ; i < prestamos.length; i++){
        let fila = "<tr><td>" + prestamos[i].num_prestamo + "</td><td>" + prestamos[i].idlibro + "</td><td>" + prestamos[i].fecha_sol + "</td><td>" + prestamos[i].fecha_reg + "</td></tr>";
        //console.log(fila);
        $("#tablaPrestamosU").append(fila);
    }
    
}