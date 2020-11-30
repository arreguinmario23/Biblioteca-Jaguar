libros=[{idlibro:'1',escritor:'Jose Luis',editorial:'El Sol',titulo:'El Rey sin corona',paginas:'34',unidades:'12'}];
$('.toast').toast({delay: 2000});
idaeditar = 0;
idaeliminar =0;
consulta();
actualizar();

function agregarPrest(id){
    let fecha = document.getElementById("fechaDev").value;
    $.getJSON("crud_prestamos.php",{operacion:"C", idlib:id,dev:fecha}).done(function(datos){
        if(datos.resp == "si"){
            consulta();
            console.log("si")
        }else{
            $('.toast').toast('show')
            console.log("no agrego")
        }
    });
}

function consulta(){
    $.getJSON("con_libro.php").done(function(datos){
        console.log(datos);
        libros = datos;
        actualizar();
    }).fail(function(e){
        console.log(e);
    });
}

function actualizar(){
    $("#tablaLibros").html('');
    for(let i = 0 ; i < libros.length; i++){
        let fila = "<tr><td>" + libros[i].idlibro + "</td><td >" + libros[i].escritor + "</td> <td >" + libros[i].editorial + "</td> <td >" + libros[i].titulo + "</td> <td >" + libros[i].paginas + "</td> <td >" + libros[i].unidades + "</td>";
        fila = fila + "<td><button onclick='agregarPrest("+libros[i].idlibro+");' class='btn btn-primary' data-toggle='modal' data-target='#modificaLibro'>";
        fila += "<i class='material-icons align-middle'>add</i> Agregar prestamo</button>";
        fila += "</td></tr>";
        //console.log(fila);
        $("#tablaLibros").append(fila);
    }
}