<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div>
    <h1>Registro de clientes</h1>

    <form method="post" class="row g-3"  action="<?php base_url('vista_administrador_alta_clientes'); ?>">

        <div class="col-md-4">
            <label for="nombre_contacto" class="col-form-label"><h3>Nombre de contacto del cliente</h3></label>
            <input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto">
        </div>

        <div class="col-md-8">
            <label for="razon_social" class="col-form-label"><h3>Razón social</h3></label>
            <input type="text" class="form-control" name="razon_social" id="razon_social">
        </div>   
        
        <div class="col-md-6">
            <label for="direccion_cliente" class="col-form-label"><h3>Dirección del cliente</h3></label>
            <input type="text" class="form-control" name="direccion_cliente" id="direccion_cliente">
        </div>

        <div class="col-md-6">
            <label for="rfc_cliente" class="col-form-label"><h3>RFC del cliente</h3></label>
            <input type="text" class="form-control" name="rfc_cliente" id="rfc_cliente">
        </div>
        
        <div class="col-md-6">
            <label for="telefono_cliente" class="col-form-label"><h3>Teléfono del cliente</h3></label>
            <input type="text" class="form-control" name="telefono_cliente" id="telefono_cliente" >
        </div>
        
        <div class="col-md-6">
            <label for="correo_electronico_cliente" class="col-form-label"><h3>E-Mail del cliente</h3></label>
            <input type="text" class="form-control" name="correo_electronico_cliente" id="correo_electronico_cliente">
        </div>
        <span></span>
        <div class="row flex-nowrap text-light">
            <button type="submit" class="btn btn-success"><h3>Registrar cliente</h3></button>
        </div>  
        
    </form>
</div>

<?php echo $this->endSection();?>