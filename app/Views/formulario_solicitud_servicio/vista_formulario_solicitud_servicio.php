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
        <!-- Tabla de selección de ensayos -->
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
                        <td>Variación del flujo luminoso total nominal</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Variación del flujo luminoso nominal</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Temperatura de color correlacionado (TCC)</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Temperatura de color correlacionada (TCC)</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Flujo luminoso total mínimo mantenido</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Flujo luminoso total mantenido</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Índice de rendimiento de color (IRC)</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Índice de rendimiento de color (IRC)</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Factor de potencia (PU)</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Factor de potencia (PU)</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Distribución espacial de luz</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A*</td>
                        <td>031/8.1</td>
                        <td>Distorsión armónica total en corriente</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Ciclo de choque térmico</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Flujo luminoso de deslumbramiento</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Ciclo de conmutación</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>A</td>
                        <td>031/8.2</td>
                        <td>Resistencia al choque térmico y a la conmutación</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.1</td>
                        <td>Sobretensiones transistorias</td>
                        <td><input type="checkbox" name="" id=""></td>
                        <td rowspan="5">A*</td>
                        <td rowspan="5">031/8.1</td>
                        <td rowspan="5">Resistencia a las descargas atmosféricas</td>
                        <td rowspan="5"><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>030/7.2</td>
                        <td>Distorsión armónica total</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="4">OTRO</td>
                    </tr>
                    <tr>
                        <td>S/A</td>
                        <td>N/A</td>
                        <td rowspan="2"></td>
                        <td rowspan="2"><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tabla de información del especimen -->

        <div>
            <table class="table table-info table-bordered">
                <thead>
                    <th colspan="3">Datos del especímen bajo prueba</th>
                </thead>
                <tr>
                    <td>Nombre del especímen bajo prueba</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td rowspan="2">Descripción</td>
                    <td>Lámpara</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Luminario</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td rowspan="2">Uso del espécimen bajo prueba</td>
                    <td>Exterior</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Interior</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Marca y modelo</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Número de serie</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Tensión eléctrica de operación (V)*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Potencia eléctrica de operación (W)*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Valor de flujo luminoso nominal (lm)*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Temperatura de color relacionada (°K)*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Índice de rendimiento de color*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Horas de vida útil de la lámpara (h)*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Factor de potencia nominal*</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Tipo de material de la carcasa</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Tipo de material del reflector</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Tipo de montaje</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td rowspan="4">Tipo de controlador (drive):</td>
                </tr>
                <tr>
                    <td>Integrada al módulo led</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Separada del módulo de led</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Fuera del luminario</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Posición del luminario en grados con respecto a la horizontal (importante para la realización de las pruebas del fotogoniómetro): </td>
                    <td colspan="3"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>Fabricante de la luminaria (si el cliente es el fabricante no considerar este punto)</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Número de módulos de tarjeras LED del luminario y/o lámpara.</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Número de LEDs por módulo de tarjetas LED del luminario/lámpara.</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Número de catálogo del luminario y/o lámpara.</td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td>Dimensiones del luminario y/o lámpara. (largo x ancho x alto) </td>
                    <td colspan="3"><input type="text"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><input type="text"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>