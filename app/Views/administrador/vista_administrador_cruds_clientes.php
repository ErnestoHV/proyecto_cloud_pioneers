<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="container text-right">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('administrador/vista_administrador_alta_clientes'); ?>" class="btn btn-success"><h3>Alta de cliente</h3></a>
        </div>
        <div class="col">
            <h3>Filtrar registros de clientes por:</h3>
        </div>
        <div class="col">
            <a href="<?= base_url('administrador/vista_administrador_clientes_inactivos'); ?>" class="btn btn-primary"><h3>Inactivos</h3></a>
            <a href="<?= base_url('administrador/vista_administrador_clientes_todos'); ?>" class="btn btn-primary"><h3>Todos</h3></a>
        </div>
        
    </div>
</div>
<div>
    <h5 class="">Registros de clientes ACTIVOS</h5>
</div>

<table class="table table-light table-striped table-bordered text-center" width="0%" cellspacing="0">
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
                <td><a href="<?php echo base_url('vista_administrador_modificar_clientes');?>" data-bs-toggle="modal" data-bs-target="#modalEditarCliente<?php echo $cliente['id_cliente'];?>" type="button" class="btn"><i data-feather="edit"></i></a></td>
                <td><a href="<?= base_url('/administrador/vista_administrador_cruds_clientes/borrar'.$cliente['id_cliente'])?>" onclick="return confirm('¿Está seguro que desea borrar este registro?')" class="btn"><i data-feather="trash-2"></i></a></td>
            </tr>
            <?php include('vista_administrador_modificar_clientes.php')?>
        <?php endforeach;?>
    </tbody>
</table>

<?php echo $this->endSection();?>