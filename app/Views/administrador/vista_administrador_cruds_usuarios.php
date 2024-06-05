<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="row flex-nowrap bg-dark text-light">
    <a class="btn btn-success" href="<?= base_url('administrador/vista_administrador_alta_usuarios'); ?>"><h3>Alta de usuario</h3></a>
</div>  

<table class="table table-light table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre del usuario</th>
            <th>Apellidos del usuario</th>				
            <th>Rol</th>
            <th>Correo electrónico</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario):?>
            <?php foreach ($roles as $rol): ?>
                <?php if ($usuario['id_rol'] == $rol['id_rol']): ?>
                    <tr>
                        <td><?php echo $usuario['id_usuario'];?></td>
                        <td class="text-start"><?php echo $usuario['nombre_usuario'];?></td>
                        <td class="text-start"><?php echo $usuario['apellidos_usuario'];?></td>
                        <td class="text-start"><?php echo $rol['nombre_rol'];?></td>
                        <td class="text-start"><?php echo $usuario['correo_electronico'];?></td>
                        <td><i data-feather="edit"></i></td>
                        <td><i data-feather="trash-2"></i></td>
                    </tr>
                <?php endif; ?>    
            <?php endforeach;?>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>