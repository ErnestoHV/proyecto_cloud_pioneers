<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<table class="table table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>id_servicio</th>						
            <th>id_cliente</th>
            <th>id_especimen</th>
            <th>id_solicitud</th>
            <th>estado_servicio</th>
            <th>fecha_inicio_servicio</th>
            <th>fecha_fin_servicio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>
<?php echo $this->endSection();?>