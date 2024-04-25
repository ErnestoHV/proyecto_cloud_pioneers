<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<table class="table table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>id_usuario</th>						
            <th>Rol</th>
            <th>correo_electronico</th>
            <th>nombre_usuario</th>
            <th>apellidos_usuario</th>
            <th>fecha_creacion_usuario</th>
            <th>fecha_modificacion_usuario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario):?>
        <?php foreach ($roles as $rol): ?>
            <tr>
                <td><?php echo $usuario['id_usuario'];?></td>
                <td><?php echo $rol['nombre_rol'];?></td>
                <td><?php echo $usuario['correo_electronico'];?></td>
                <td><?php echo $usuario['nombre_usuario'];?></td>
                <td><?php echo $usuario['apellidos_usuario'];?></td>
                <td><?php echo $usuario['fecha_creacion_usuario'];?></td>
                <td><?php echo $usuario['fecha_modificacion_usuario'];?></td>
            </tr>
        <?php endforeach;?>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>