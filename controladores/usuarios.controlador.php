<?php

/**
 * plantilla.controlador [ TIPO ]
 *
 * @author geral
 * Descricao
 * @copyright (c) year, Silvio Coelho 
 */
class ControladorUsuarios {

    /*
     * INGRESO DE USUARIO
     */
    public function ctrIngresoUsuario() {
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && 
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])){
                
                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];
                
                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
                
                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){
                    
                    $_SESSION["iniciarSesion"] = "ok";
                    
                    echo '<script> '
                    . 'window.location = "inicio";'
                    . '</script>';
                    
                } else {
                    echo '<div class="alert alert-danger">Erro al ingresar, vuelve a intentarlo</div>';
                }
            }
        }
    }

}
