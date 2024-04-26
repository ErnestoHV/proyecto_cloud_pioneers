<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="row flex-nowrap bg-dark text-light">
    <button class="btn btn-success" hre><h3>Cargar documento</h3></button>
</div>   

<table class="table table-dark table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>						
            <th>Nombre del documento</th>
            <th>Estado asociado</th>
            <th>Descripción del documento</th>
            <th>Enlace al documento</th>
            <th>Fecha de carga</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($documentos as $documento):?>
            <?php FOREACH ($estados as $estado):?>
                <?php if ($documento['id_estado'] == $estado['id_estado']): ?>
                    <tr>
                        <td><?php echo $documento['id_documento'];?></td>
                        <td><?php echo $documento['nombre_documento'];?></td>
                        <td><?php echo $estado['nombre_estado'];?></td>
                        <td><?php echo $documento['descripcion_documento'];?></td>
                        <td><?php echo $documento['link_documento_plantilla'];?></td>
                        <td><?php echo $documento['fecha_carga_documento'];?></td>
                        <td><i data-feather="edit"></i></td>
                        <td><i data-feather="trash-2"></i></td>
                    </tr>
                <?php endif;?>
            <?php endforeach;?>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>