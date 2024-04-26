<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="row flex-nowrap bg-dark text-light">
    <button class="btn btn-success" hre><h3>Generar solicitud</h3></button>
</div>   

<table class="table table-dark table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>Folio</th>						
            <th>Recibida por</th>
            <th>Cliente</th>
            <th>Fecha de la solicitud</th>
            <th>Medio de recibo de la solicitud</th>
            <th>Fecha de registro de la solicitud</th>
            <th>Editar</th>
            <th>Borar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudes as $solicitud):?>
            <?php foreach ($usuarios as $usuario):?>
                <?php foreach ($clientes as $cliente):?>
                    <?php if ($solicitud['id_usuario'] == $usuario['id_usuario'] && $solicitud['id_cliente'] == $cliente['id_cliente']):?>
                        <tr>
                            <td><?php echo $solicitud['folio_solicitud'];?></td>
                            <td><?php echo $usuario['nombre_usuario'];?></td>
                            <td><?php echo $cliente['nombre_contacto'];?></td>
                            <td><?php echo $solicitud['fecha_solicitud'];?></td>
                            <td><?php echo $solicitud['medio_recibo_solicitud'];?></td>
                            <td><?php echo $solicitud['fecha_registro_solicitud'];?></td>
                            <td><i data-feather="edit"></i></td>
                            <td><i data-feather="trash-2"></i></td>
                        </tr>
                    <?php endif;?>
                <?php endforeach;?>
            <?php endforeach;?>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>