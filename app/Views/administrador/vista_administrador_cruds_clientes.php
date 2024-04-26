<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<table class="table table-dark table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>						
            <th>Nombre</th>
            <th>Razón social</th>
            <th>Dirección</th>
            <th>RFC</th>
            <th>Teléfono</th>
            <th>E-Mail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente):?>
            <tr>
                    <td><?php echo $cliente['id_cliente'];?></td>
                    <td><?php echo $cliente['nombre_contacto'];?></td>
                    <td><?php echo $cliente['razon_social'];?></td>
                    <td><?php echo $cliente['direccion_cliente'];?></td>
                    <td><?php echo $cliente['rfc_cliente'];?></td>
                    <td><?php echo $cliente['telefono_cliente'];?></td>
                    <td><?php echo $cliente['correo_electronico_cliente'];?></td>
                    <td></td>
                    <td></td>
                </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>