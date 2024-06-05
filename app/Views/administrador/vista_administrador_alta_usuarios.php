<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div>
    <h1>Registro de usuarios</h1>

    <form method="post" class="row g-3"  action="<?php base_url('vista_administrador_alta_usuarios'); ?>">

        <div class="col-md-4">
            <label for="nombre_contacto" class="col-form-label">Nombre del usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario">
        </div>

        <div class="col-md-4">
            <label for="nombre_contacto" class="col-form-label">Apellidos del usuario</label>
            <input type="text" class="form-control" name="apellidos_usuario" id="apellidos_usuario">
        </div>

        <div class="col-md-8">
            <label for="razon_social" class="col-form-label">Rol</label>
            <input type="text" class="form-control" name="id_rol" id="id_rol">
        </div>   
        
        <div class="col-md-6">
            <label for="direccion_cliente" class="col-form-label">E-Mail del usuario</label>
            <input type="text" class="form-control" name="correo_electronico" id="correo_electronico">
        </div>

        <div class="col-md-6">
            <label for="rfc_cliente" class="col-form-label">Contraseña temporal para el usuario</label>
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