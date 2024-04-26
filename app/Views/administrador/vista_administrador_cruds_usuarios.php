<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<table class="table table-dark table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>					
            <th>Rol</th>
            <th>correo_electronico</th>
            <th>nombre_usuario</th>
            <th>apellidos_usuario</th>
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
                        <td><?php echo $rol['nombre_rol'];?></td>
                        <td><?php echo $usuario['correo_electronico'];?></td>
                        <td><?php echo $usuario['nombre_usuario'];?></td>
                        <td><?php echo $usuario['apellidos_usuario'];?></td>
                        <td><i data-feather="edit"></i></td>
                        <td><i data-feather="trash-2"></i></td>
                    </tr>
                <?php endif; ?>    
            <?php endforeach;?>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>