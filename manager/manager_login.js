$(document).ready(function(){
    function loginUsuario() {
        $.ajax({
            type: "POST",
            data: $('#frm_registro').serialize(),
            url: "control/control_login.php",
            success:(respuesta)=> {
                
                swal("","Ingresaste con exito", "success");
                console.log(respuesta);
            }
        });
        return false;
    }
    $('#btn_login').click(function (){
        loginUsuario();
        
    })
});