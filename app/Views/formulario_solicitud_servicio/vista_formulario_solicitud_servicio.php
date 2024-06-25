<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de solicitud de servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <form method="POST" action="<?php echo base_url();?>SolicitudController/alta_datos_solicitud">
        <!-- Nombre de contacto del cliente -->
        <div class="row">
            <div class="col-auto">
                <label for="nombre_contacto"><h2>Nombre de contacto</h2></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto">
            </div>
        </div>
        <!-- Razón social del cliente -->
        <div class="row">
            <div class="col-auto">
                <label for="razon_social"><h2>Razón social</h2></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="razon_social" id="razon_social">
            </div>
        </div>
        <!-- Dirección del cliente -->
        <div class="row">
            <div class="col-auto">
                <label for="direccion_cliente"><h2>Dirección</h2></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="direccion_cliente" id="direccion_cliente">
            </div>
        </div>
        <!-- RFC del cliente -->
        <div class="row">
            <div class="col-auto">
                <label for="rfc_cliente"><h2>RFC</h2></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="rfc_cliente" id="rfc_cliente">
            </div>
        </div>
        <!-- Teléfono del cliente -->
        <div class="row">
            <div class="col-auto">
                <label for="telefono_cliente"><h2>Teléfono</h2></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="telefono_cliente" id="telefono_cliente">
            </div>
        </div>
        <!-- E-Mail del cliente -->
        <div class="row">
            <div class="col-auto">
                <label for="correo_electronico_cliente"><h2>E-mail</h2></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="correo_electronico_cliente" id="correo_electronico_cliente">
            </div>
        </div>

        <div>
            <table class="table table-info table-bordered">
                <thead>
                    <th colspan="8">Ensayos (6)</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Tipo</td>
                        <td>Código</td>
                        <td colspan="2">NOM 030 ENER 2016</td>
                        <td>Tipo</td>
                        <td>Código</td>
                        <td colspan="2">NOM 031 ENER 2019</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Eficacia luminosa</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</body>
</html>