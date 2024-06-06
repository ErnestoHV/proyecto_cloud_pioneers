<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div>
    <h1>Registro de usuarios</h1>

    <form method="post" class="row g-3"  action="<?php base_url('vista_administrador_alta_usuarios'); ?>">

        <div class="col-md-4">
            <label for="nombre_usuario" class="col-form-label">Nombre del usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario">
        </div>

        <div class="col-md-4">
            <label for="apellidos_usuario" class="col-form-label">Apellidos del usuario</label>
            <input type="text" class="form-control" name="apellidos_usuario" id="apellidos_usuario">
        </div>

        <div class="col-md-8">
            <label for="id_rol" class="col-form-label">Rol</label>
            <select class="form-select" aria-label="Default select example" name="id_rol" id="id_rol">
                <?php foreach ($roles as $rol): ?>
                    <?php echo '<option value="'.$rol['id_rol'].'">'.$rol['nombre_rol'].'</option>';?>
                <?php endforeach;?>
            </select>
        </div>   
        
        <div class="col-md-6">
            <label for="correo_electronico" class="col-form-label">E-Mail del usuario</label>
            <input type="text" class="form-control" name="correo_electronico" id="correo_electronico">
        </div>

        <div class="col-md-6">
            <label for="contrasena_usuario" class="col-form-label">Contraseña temporal para el usuario</label>
            <input type="text" class="form-control" name="contrasena_usuario" id="contrasena_usuario">
        </div>
        <div>
        </div>
        <div class="row flex-nowrap text-light">
            <button type="submit" class="btn btn-primary">Registrar usuario</button>
        </div>  
        
    </form>
</div>

<?php echo $this->endSection();?>