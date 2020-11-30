libros=[{idlibro:'1',escritor:'Jose Luis',editorial:'El Sol',titulo:'El Rey sin corona',paginas:'34',unidades:'12'}];
$('.toast').toast({delay: 2000});
idaeditar = 0;
idaeliminar =0;
consulta();
actualizar();

function agregarLibro(){
    let escritor = document.getElementById("escritor").value;
    let editorial = document.getElementById("Editorial").value;
    let titulo = document.getElementById("TituloLibro").value;
    let paginas = document.getElementById("PaginasLibro").value;
    let unidades = document.getElementById("CantidadLibro").value;
    $.getJSON("add_libro.php",{escritor:escritor, editorial:editorial,titulo:titulo,paginas:paginas,unidades:unidades}).done(function(datos){
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
        fila = fila + "<td><button onclick='editarLibro("+libros[i].idlibro+");' class='btn btn-primary' data-toggle='modal' data-target='#modificaLibro'>";
        fila += "<i class='material-icons align-middle'>edit</i></button>";
        fila += "<button onclick='eliminarLibro("+ libros[i].idlibro +");' class='btn btn-danger' data-toggle='modal' data-target='#eliminaTema'>";
        fila += "<i class='material-icons align-middle'>cancel</i></button></td></tr>";
        //console.log(fila);
        $("#tablaLibros").append(fila);
    }
}
    function editarLibro(id){
        for(let i = 0 ; i < libros.length; i++){
            if(libros[i].idlibro==id){
                $("#escritorEditar").val(libros[i].escritor);
                $("#editorialEditar").val(libros[i].editorial);
                $("#libroEditar").val(libros[i].titulo);
                $("#paginasEditar").val(libros[i].paginas);
                $("#uniEditar").val(libros[i].unidades);
                idaeditar = id;
                break;
            }
        }
    }

    function guardaCambios(){
        escritor= $("#escritorEditar").val();
        editorial=$("#editorialEditar").val();
        titulo=$("#libroEditar").val();
        paginas=$("#paginasEditar").val();
        unidades=$("#uniEditar").val();
        $.getJSON("mod_libro.php",{id:idaeditar, escritor:escritor, editorial:editorial,titulo:titulo,paginas:paginas,unidades:unidades}).done(function(datos){
            if(datos.resp == "si"){
                consulta();
            }else{
                $('.toast').toast('show')
            }
        });
    }
    
    function eliminarLibro(idlib){
        idaeliminar = idlib;
    }
    
    function confirmaEliminar(){
        $.getJSON("del_libro.php",{id:idaeliminar}).done(function(datos){
            if(datos.resp == "si"){
                consulta();
            }else{
                $('.toast').toast('show')
            }
        });
    }