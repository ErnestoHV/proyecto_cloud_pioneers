<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<table class="table table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>id_usuario</th>						
            <th>id_rol</th>
            <th>correo_electronico</th>
            <th>nombre_usuario</th>
            <th>apellidos_usuario</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        </tr>
    </tbody>
</table>
<?php echo $this->endSection();?>