$(document).ready(function(){
    function agregarUsuarioNuevo() {
        $.ajax({
            type: "POST",
            data: $('#frm_registro').serialize(),
            url: "control/control_registro.php",
            success:(respuesta)=> {
                
                swal("","Agregado con exito", "success");
            }
        });
        return false;
    }
    $('#btn_registro').click(function (){
        agregarUsuarioNuevo();
        
    })
});