<?php echo $this->extend('plantilla/plantilla_administrador');?>
<?php echo $this->section('vista_administrador');?>
<h1 class="text-center">Administrador</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>First</th>
            <th>Last</th>
            <th>Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th>2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th>3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>Hola </td>
        </tr>
  </tbody>
</table>
<?php echo $this->endSection();?>