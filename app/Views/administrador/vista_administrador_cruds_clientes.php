<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="row flex-nowrap bg-dark text-light">
    <a href="<?= base_url('administrador/vista_administrador_alta_clientes'); ?>" class="btn btn-success"><h3>Alta de cliente</h3></a>
</div>  

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
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente):?>
            <tr>
                    <td><?php echo $cliente['id_cliente'];?></td>
                    <td class="text-start"><?php echo $cliente['nombre_contacto'];?></td>
                    <td class="text-start"><?php echo $cliente['razon_social'];?></td>
                    <td class="text-start"><?php echo $cliente['direccion_cliente'];?></td>
                    <td><?php echo $cliente['rfc_cliente'];?></td>
                    <td><?php echo $cliente['telefono_cliente'];?></td>
                    <td class="text-start"><?php echo $cliente['correo_electronico_cliente'];?></td>
                    <td><i data-feather="edit"></i></td>
                    <td><a href="<?= base_url('/administrador/vista_administrador_cruds_clientes/borrar'.$cliente['id_cliente'])?>" onclick="return confirm('¿Está seguro que desea borrar este registro?')"><i data-feather="trash-2"></i></a></td>
                </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>