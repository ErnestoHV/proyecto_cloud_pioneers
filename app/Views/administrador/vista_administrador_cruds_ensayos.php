<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>

<div class="row flex-nowrap bg-dark text-light">
    <button class="btn btn-success" hre><h3>Alta de ensayos</h3></button>
</div>   

<table class="table table-dark table-striped table-bordered text-center" width="0%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>						
            <th>Tipo ensayo</th>
            <th>Código de ensayo</th>
            <th>Nombre del ensayo</th>
            <th>NOM</th>
            <th>Fecha de carga</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ensayos as $ensayo):?>
            <tr>
                <td><?php echo $ensayo['id_ensayo'];?></td>
                <td><?php echo $ensayo['tipo_ensayo'];?></td>
                <td><?php echo $ensayo['codigo_ensayo'];?></td>
                <td><?php echo $ensayo['nombre_ensayo'];?></td>
                <td><?php echo $ensayo['norma_oficial_mexicana'];?></td>
                <td><?php echo $ensayo['fecha_creacion_ensayo'];?></td>
                <td><i data-feather="edit"></i></td>
                <td><i data-feather="trash-2"></i></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>