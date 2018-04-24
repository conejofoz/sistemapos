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
