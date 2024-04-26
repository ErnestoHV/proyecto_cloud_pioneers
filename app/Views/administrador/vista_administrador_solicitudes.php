<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="row flex-nowrap bg-dark text-light">
    <button class="btn btn-success" hre><h3>Generar solicitud</h3></button>
</div>   

<table class="table table-dark table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>folio_solicitud</th>						
            <th>id_usuario</th>
            <th>id_cliente</th>
            <th>fecha_solicitud</th>
            <th>folio_solicitud</th>
            <th>medio_recibo_solicitud</th>
            <th>fecha_registro_solicitud</th>
            <th>Editar</th>
            <th>Borar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudes as $solicitud):?>
            <tr>
                <td><?php echo $solicitud['folio_solicitud'];?></td>
                <td><?php echo $solicitud['id_usuario'];?></td>
                <td><?php echo $solicitud['id_cliente'];?></td>
                <td><?php echo $solicitud['fecha_solicitud'];?></td>
                <td><?php echo $solicitud['folio_solicitud'];?></td>
                <td><?php echo $solicitud['medio_recibo_solicitud'];?></td>
                <td><?php echo $solicitud['fecha_registro_solicitud'];?></td>
                <td><i data-feather="edit"></i></td>
                <td><i data-feather="trash-2"></i></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>