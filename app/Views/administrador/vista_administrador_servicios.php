<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<table class="table table-light table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>id_servicio</th>						
            <th>id_cliente</th>
            <th>especimen</th>
            <th>id_solicitud</th>
            <th>estado_servicio</th>
            <th>fecha_inicio_servicio</th>
            <th>fecha_fin_servicio</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($servicios as $servicio):?>
            <tr>
                <td><?php echo $servicio['id_servicio'];?></td>
                <td><?php echo $servicio['id_cliente'];?></td>
                <td><?php echo $servicio['especimen'];?></td>
                <td><?php echo $servicio['id_solicitud'];?></td>
                <td><?php echo $servicio['estado_servicio'];?></td>
                <td><?php echo $servicio['fecha_inicio_servicio'];?></td>
                <td><?php echo $servicio['fecha_fin_servicio'];?></td>
                <td><i data-feather="edit"></i></td>
                <td><i data-feather="trash-2"></i></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>