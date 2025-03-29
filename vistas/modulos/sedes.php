<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sedes</h1>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalSede">
                        Agregar sede
                    </button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="tblSedes" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Descripcion</th>
                                        <th>Estado</th>
                                        <th>Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $item = null;
                                    $valor = null;  
                                    $sedes = ControladorSedes::ctrMostrarSedes($item, $valor);
                                    ?>
                                    <tr>
                                        <td>1</td>
                                        <td>Sede Principal</td>
                                        <td>Calle Centro</td>
                                        <td>123</td>
                                        <td><button type="button" class="btn btn-success btn-sm">Activo</button></td>
                                        <td><button class="btn btn-default" data-toggle="modal" data-target="#editarModal"><i class="fas fa-edit"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sede Sur</td>
                                        <td>Calle Sur</td>
                                        <td>123</td>
                                        <td><button type="button" class="btn btn-success btn-sm">Activo</button></td>
                                        <td><button class="btn btn-default"><i class="fas fa-edit"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sede Norte</td>
                                        <td>Calle Norte</td>
                                        <td>123</td>
                                        <td><button type="button" class="btn btn-danger btn-sm">Inactivo</button></td>
                                        <td><button class="btn btn-default"><i class="fas fa-edit"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Sede Sagrado</td>
                                        <td>Calle 123</td>
                                        <td>123</td>
                                        <td><button type="button" class="btn btn-success btn-sm">Activo</button></td>
                                        <td><button class="btn btn-default"><i class="fas fa-edit"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sede Saleciano</td>
                                        <td>Calle 321</td>
                                        <td>123</td>
                                        <td><button type="button" class="btn btn-success btn-sm">Activo</button></td>
                                        <td><button class="btn btn-default"><i class="fas fa-edit"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <section>
        <div class="modal fade" id="modalSede">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar nueva sede</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="nombre">nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre de la sede">
                    </div>
                    <div class="modal-body">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion">
                    </div>
                    <div class="modal-body">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" placeholder="Ingrese una descripcion">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Añadir</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
    </section>
    <section>
        <div class="modal fade" id="editarModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Sede</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="nombre">nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre de la sede">
                    </div>
                    <div class="modal-body">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion">
                    </div>
                    <div class="modal-body">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" placeholder="Ingrese una descripcion">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Añadir</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
    </section>
</div>
<!-- /.content-wrapper -->