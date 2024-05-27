<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarCliente<?php echo $cliente['id_cliente'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar cliente</h4>
            </div>
            <div class="modal-body" >
                <form class="w3-container w3-card-4" action="<?= base_url('vista_administrador_modificar_clientes/'.$cliente['id_cliente']); ?>" method="post">
                    <div class="mb-3">

                        <label for="nombre_contacto" class="col-form-label"><h3>Nombre de contacto del cliente</h3></label>
                        <input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto" value="<?= $cliente['nombre_contacto']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="razon_social" class="col-form-label"><h3>Razón social</h3></label>
                        <input type="text" class="form-control" name="razon_social" id="razon_social" value="<?= $cliente['razon_social']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="direccion_cliente" class="col-form-label"><h3>Dirección del cliente</h3></label>
                        <input type="text" class="form-control" name="direccion_cliente" id="direccion_cliente" value="<?= $cliente['direccion_cliente']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="rfc_cliente" class="col-form-label"><h3>RFC del cliente</h3></label>
                        <input type="text" class="form-control" name="rfc_cliente" id="rfc_cliente" value="<?= $cliente['rfc_cliente']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="telefono_cliente" class="col-form-label"><h3>Teléfono del cliente</h3></label>
                        <input type="text" class="form-control" name="telefono_cliente" id="telefono_cliente" value="<?= $cliente['telefono_cliente']; ?>">

                    </div>

                    <div class="mb-3">

                        <label for="correo_electronico_cliente" class="col-form-label"><h3>E-Mail del cliente</h3></label>
                        <input type="text" class="form-control" name="correo_electronico_cliente" id="correo_electronico_cliente" value="<?= $cliente['correo_electronico_cliente']; ?>">

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>