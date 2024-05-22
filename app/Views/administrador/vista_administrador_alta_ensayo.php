<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div>
    <h1>Alta cliente</h1>
    <div class="row flex-nowrap bg-dark text-light">
        <a href="<?= base_url('administrador/vista_administrador_alta_clientes'); ?>" class="btn btn-success"><h3>Alta de cliente</h3></a>
    </div>  

    <form method="post" class="row g-3">

        <div class="col-md-4">
            <label for="nombre_contacto" class="col-form-label">Nombre de contacto del cliente</label>
            <input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto">
        </div>

        <div class="col-md-8">
            <label for="razon_social" class="col-form-label">Razón social</label>
            <input type="text" class="form-control" name="razon_social" id="razon_social">
        </div>   
        
        <div class="col-md-6">
            <label for="direccion_cliente" class="col-form-label">Dirección del cliente</label>
            <input type="text" class="form-control" name="direccion_cliente" id="direccion_cliente">
        </div>

        <div class="col-md-6">
            <label for="rfc_cliente" class="col-form-label">RFC del cliente</label>
            <input type="text" class="form-control" name="rfc_cliente" id="rfc_cliente">
        </div>
        
        <div class="col-md-6">
            <label for="telefono_cliente" class="col-form-label">Teléfono del cliente</label>
            <input type="text" class="form-control" name="telefono_cliente" id="telefono_cliente">
        </div>
        
        <div class="col-md-6">
            <label for="correo_electronico_cliente" class="col-form-label">E-Mail del cliente</label>
            <input type="text" class="form-control" name="correo_electronico_cliente" id="correo_electronico_cliente">
        </div>
        
    </form>
</div>

<?php echo $this->endSection();?>