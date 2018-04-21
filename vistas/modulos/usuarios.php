
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Administrar usuários
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Administrar usuários</li>
        </ol>
    </section>


    <section class="content">

        <div class="box">
            <!--====================CABECALHO================================-->
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
                    Agregar usuario
                </button>

            </div>



            <!--====================PAGINA================================-->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Foto</th>
                            <th>Perfil</th>
                            <th>Estado</th>
                            <th>Último login</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Usuario administrador</td>
                            <td>admin</td>
                            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                            <td>Administrador</td>
                            <td><button class="btn btn-success btn-xs">Activado</button></td>
                            <td>2017-12-11</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>



            <!--====================RODAPE================================-->

        </div>


    </section>
</div>







<!-- MODAL AGREGAR USUARIO -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <form role="form" method="POST" enctype="multipart/form-data">


                <div class="modal-header" style="background: #3c8dbc; color: white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar usuario</h4>
                </div>


                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input-lg" name="nuevoPerfil">
                                    <option value="">Selecionar perfil</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Especial">Especial</option>
                                    <option value="Vendedor">Vendedor</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="panel text-uppercase">SUBIR FOTO</div>
                            <input type="file" id="nuevaFoto" name="nuevaFoto">
                            <p class="help-block">Peso máximo de la foto 200MB</p>
                            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">
                        </div>


                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar usuario</button>
                </div>


            </form>
        </div>

    </div>
</div>