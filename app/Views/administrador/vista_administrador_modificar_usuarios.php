<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarUsuario<?php echo $usuario['id_usuario'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar usuario</h4>
            </div>
            <div class="modal-body" >
                <form class="w3-container w3-card-4" action="<?= base_url('vista_administrador_modificar_usuarios/'.$usuario['id_usuario']); ?>" method="post">
                    <div class="mb-3">

                        <label for="nombre_usuario" class="col-form-label"><h3>Nombre del usuario</h3></label>
                        <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" value="<?= $usuario['nombre_usuario']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="apellidos_usuario" class="col-form-label"><h3>Apellidos del usuario</h3></label>
                        <input type="text" class="form-control" name="apellidos_usuario" id="apellidos_usuario" value="<?= $usuario['apellidos_usuario']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="direccion_cliente" class="col-form-label"><h3>Rol del usuario</h3></label>
                        <select class="form-select" aria-label="Default select example" name="id_rol" id="id_rol">
                            <option></option>
                            <?php foreach ($roles as $rol): ?>
                                <?php echo '<option value="'.$rol['id_rol'].'">'.$rol['nombre_rol'].'</option>';?>
                            <?php endforeach;?>
                        </select>

                    </div>

                    <div class="mb-3">

                        <label for="correo_electronico" class="col-form-label"><h3>RFC del cliente</h3></label>
                        <input type="text" class="form-control" name="correo_electronico" id="correo_electronico" value="<?= $usuario['correo_electronico']; ?>">

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>