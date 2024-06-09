<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="container text-right">
    <div class="row">
        <div class="col">
            <a class="btn btn-success" href="<?= base_url('administrador/vista_administrador_alta_usuarios'); ?>"><h3>Alta de usuario</h3></a>
        </div>
        <div class="col">
            <h3>Filtrar registros de usuarios por:</h3>
        </div>
        <div class="col">
            <a href="<?= base_url('administrador/vista_administrador_cruds_usuarios'); ?>" class="btn btn-primary"><h3>Activos</h3></a>
            <a href="<?= base_url('administrador/vista_administrador_usuarios_todos'); ?>" class="btn btn-primary"><h3>Todos</h3></a>
        </div>
    </div>
</div>
<br>

<table class="table table-light table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre del usuario</th>
            <th>Apellidos del usuario</th>				
            <th>Rol</th>
            <th>Correo electrónico</th>
            <th>Fecha de registro</th>
            <th>Fecha de modificación</th>
            <th>Fecha de borrado</th>
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
                        <td class="text-start"><?php echo$usuario['fecha_creacion_usuario'];?></td>
                        <td class="text-start"><?php echo$usuario['fecha_modificacion_usuario'];?></td>
                        <td class="text-start"><?php echo$usuario['fecha_borrado_usuario'];?></td>
                    </tr>
                <?php endif; ?>    
            <?php endforeach;?>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>