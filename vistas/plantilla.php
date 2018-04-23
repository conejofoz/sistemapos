<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inventory System</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="icon" href="vistas/img/plantilla/icono-negro.png">



        <!--=================================
        PLUGINS CSS
        =================================-->


        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- DataTables -->
        <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">







        <!--=================================
        PLUGINS JAVASCRIPT
        =================================-->
        <!-- jQuery 3 -->
        <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="vistas/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!--<script src="vistas/dist/js/demo.js"></script> DESATIVADO PELO PROFESSOR-->

        <!-- DataTables -->
        <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
        <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
        
        <!-- Sweet Alert 2 -->
        <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>


    </head>



    <!--=================================
        CORPO DO DOCUMENTO
    =================================-->
    <body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

        <?php
        if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
            echo '<div class="wrapper">';
            include "modulos/cabezote.php";
            include "modulos/menu.php";

            if (isset($_GET["ruta"])) {
                if ($_GET["ruta"] == "inicio" ||
                        $_GET["ruta"] == "usuarios" ||
                        $_GET["ruta"] == "categorias" ||
                        $_GET["ruta"] == "productos" ||
                        $_GET["ruta"] == "clientes" ||
                        $_GET["ruta"] == "ventas" ||
                        $_GET["ruta"] == "crear-venta" ||
                        $_GET["ruta"] == "reportes" ||
                        $_GET["ruta"] == "salir") {
                    include "modulos/" . $_GET["ruta"] . ".php";
                } else {
                    include "modulos/404.php";
                }
            } else {
                include "modulos/inicio.php";
            }

            include "modulos/footer.php";
            echo '</div>';
        } else {
            include "modulos/login.php";
        }
        ?>

        <script src="vistas/js/plantilla.js"></script>
    </body>
</html>
