/*
 * SUBIR LA FOTO DEL USUARIO
 */
$(".nuevaFoto").change(function () {
    var imagen = this.files[0];
    /*
     * VALIDAR FORMATO DE IMAGEM
     */
    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
        $(".nuevaFoto").val("");
        swal({
            type: "error",
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG o PNG!",
            //showConfirmButton: true,
            confirmButtonText: "Cerrar"});
    } else if(imagen["size"] > 2000000){
        $(".nuevaFoto").val("");
        swal({
            type: "error",
            title: "Error al subir la imagen",
            text: "La imagen no debe pesar más de 2MB!",
            //showConfirmButton: true,
            confirmButtonText: "Cerrar"});
    } else {
        var datosImagen = new FileReader();
        datosImagen.readAsDataURL(imagen);
        
        $(datosImagen).on("load", function(event){
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })
    }
})

















/*
 * 
 * 
 * 
 * 
 * 
 * 
 * EDITAR USUARIO
 */

  $(".btnEditarUsuario").click(function(){  
    var idUsuario = $(this).attr("idUsuario");
    console.log("idUsuario", idUsuario);
    var datos = new FormData();
    datos.append("idUsuario", idUsuario);
    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method:"POST",
        data: datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(respuesta){
            console.log("respuesta", respuesta);
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").html(respuesta["perfil"]);
            $("#editarPerfil").val(respuesta["perfil"]); //no caso de não mudar vai o mesmo de novo
            $("#fotoActual").val(respuesta["foto"]); //no caso de não mudar vai o mesmo de novo
            $("#passwordActual").val(respuesta["password"]);
            
            if(respuesta["foto"] != ""){
                $(".previsualizar").attr("src", respuesta["foto"]);
            }
        }
    });
})












//$(".tablas").on("click", ".btnEditarUsuario", function(){
//
//	var idUsuario = $(this).attr("idUsuario");
//	console.log("idUsuario->", idUsuario);
//	var datos = new FormData();
//	datos.append("idUsuario", idUsuario);
//        console.log("datos->", datos["idUsuario"]);
//
//	$.ajax({
//
//		url:"ajax/usuarios.ajax.php",
//		method: "POST",
//		data: datos,
//		cache: false,
//		contentType: false,
//		processData: false,
//		dataType: "json",
//		success: function(respuesta){
//			
//			$("#editarNombre").val(respuesta["nombre"]);
//			$("#editarUsuario").val(respuesta["usuario"]);
//			$("#editarPerfil").html(respuesta["perfil"]);
//			$("#editarPerfil").val(respuesta["perfil"]);
//			$("#fotoActual").val(respuesta["foto"]);
//
//			$("#passwordActual").val(respuesta["password"]);
//
//			if(respuesta["foto"] != ""){
//
//				$(".previsualizar").attr("src", respuesta["foto"]);
//
//			}
//
//		}
//
//	});
//
//})









/*
 * ACTIVAR USUARIO
 */
$(".btnActivar").click(function(){
    console.log("clicou no botao");
    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");
    console.log("estadoUsuario", estadoUsuario);
    var datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);
    
    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method:"POST",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        success:function(respuesta){
            
        }
    })
    
    if(estadoUsuario == 0){
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoUsuario', 1);
    } else {
        $(this).removeClass('btn-danger');
        $(this).addClass('btn-success');
        $(this).html('Activado');
        $(this).attr('estadoUsuario', 0);
    }
    
});






/*
 * REVISAR SI EL USUARIO YA ESTA REGISTRADO
 */
$('#nuevoUsuario').change(function(){
    $(".alert").remove();
    var usuario = $(this).val();
    var datos = new FormData();
    datos.append("validarUsuario", usuario);
    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method:"POST",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType: "json",
        success:function(respuesta){
            if(respuesta){
                $("#nuevoUsuario").parent().after('<div class="alert alert-warning">Este usuario ya existe en la base de datos</div>');
                $("#nuevoUsuario").val("");
            }
        }
    })
})