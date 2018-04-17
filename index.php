<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'controladores/plantilla.controlador.php';
        require_once 'controladores/usuarios.controlador.php';
        require_once 'controladores/categorias.controlador.php';
        require_once 'controladores/productos.controlador.php';
        require_once 'controladores/clientes.controlador.php';
        require_once 'controladores/ventas.controlador.php';

        require_once 'modelos/plantilla.modelo.php';
        require_once 'modelos/usuarios.modelo.php';
        require_once 'modelos/categorias.modelo.php';
        require_once 'modelos/productos.modelo.php';
        require_once 'modelos/clientes.modelo.php';
        require_once 'modelos/ventas.modelo.php';



        $plantilla = new ControladorPlantilla();
        $plantilla->ctrPlantilla();
        ?>
    </body>
</html>
