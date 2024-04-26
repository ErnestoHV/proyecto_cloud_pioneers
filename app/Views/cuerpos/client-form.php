<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    .container {
  display: flex;
  align-items: center;
  background-color: #fff;
  padding: 20px;
  font-family: Arial, sans-serif;
  position: relative; /* Para que el contenedor sea relativo para el elemento curvado */
}

.logo img {
  max-width: 80px; /* Cambiar el tamaño de las imágenes aquí */
  margin-right: 20px; /* Espacio entre la imagen y el texto */
}

.logo1 img {
  max-width: 210px; /* Cambiar el tamaño de las imágenes aquí */
  margin-right: 500px; /* Espacio entre la imagen y el texto */
}

.info-column {
  flex-grow: 1; /* Para que ocupe el espacio restante */
}

h1 {
  font-size: 24px;
  margin-bottom: 10px;
  margin-top: 0; /* Para eliminar el margen superior */
  position: relative; /* Para que el texto sea relativo para el elemento curvado */
}

.info-row {
  display: flex;
  gap: 10px;
  margin-bottom: 10px;
}

.page-number {
  align-self: flex-end;
}

/* Estilos para la curva */
.curved-line {
  position: absolute;
  bottom: -10px; /* Posición por debajo del texto */
  left: 0; /* Comienza desde la izquierda */
  width: 100%; /* Cubre todo el ancho */
  height: 20px; /* Altura de la curva */
  background-color: #007bff; /* Color azul */
  border-radius: 50% / 20px; /* Forma de curva */
}
    /* Estilos para el contenido adicional */
    .additional-info {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 20px 0;
        align-items: center;
    }

    .info-column {
        margin-bottom: 20px;
    }

    .info-column,
    .table-container {
        padding: 0 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }

 .princi{
        background-color: #006bff;
        text-align: center;
        color: #fff;
    }

    /* Estilos de la tabla de ensayos */
    .ensayos-table-container {
        overflow-x: auto;
        margin-top: 20px;
    }

    .ensayos-table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Segoe UI', sans-serif;
        font-size: 14px;
        color: #333;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .ensayos-table th,
    .ensayos-table td {
        padding: 12px 16px;
        text-align: left;
        border-bottom: 1px solid #000;
    }

    .ensayos-table th {
        font-weight: bold;
    }

    .ensayos-table tbody tr:nth-child(-n+6) {
        animation: fadeInAnimationTop 0.5s ease-in-out forwards;
    }

    .ensayos-table tbody tr:nth-child(n+7) {
        animation: fadeInAnimationBottom 0.5s ease-in-out forwards;
    }

    .ensayos-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .ensayos-table tbody tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        transition: transform 0.2s ease;
    }

    .ensayos-table .otro-section {
        background-color: #e6e6e6;
        color: #666;
        font-weight: bold;
    }

    .ensayos-table .tipo-a {
        background-color: #ffffff;
    }

    .ensayos-table .tipo-a-estrella {
        background-color: #ffffff;
    }

    /* Animación de entrada para las filas superiores */
    @keyframes fadeInAnimationTop {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animación de entrada para las filas inferiores */
    @keyframes fadeInAnimationBottom {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .additional-text p {
    font-weight: bold;
}

/* Estilos de la tabla de firmas */
.firmas-table-container {
    overflow-x: auto;
    margin-top: 20px;
}

.firmas-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Segoe UI', sans-serif;
    font-size: 14px;
    color: #333; /* Color de texto predeterminado */
}

/* Estilos para las columnas de firma */
.elaboro,
.reviso,
.autorizo,
.nombre,
.firma,
.fecha {
    background-color: #090068; /* Color de fondo predeterminado */
    color: #ffffff; /* Color de texto predeterminado */
}

/* Para alinear verticalmente el texto en la columna de firma */
.firmas-table td {
    vertical-align: middle;
}

/* Para ajustar el ancho de las columnas */
.firmas-table th:first-child,
.firmas-table td:first-child {
    width: 20%;
}

.firmas-table th:nth-child(2),
.firmas-table td:nth-child(2),
.firmas-table th:nth-child(3),
.firmas-table td:nth-child(3),
.firmas-table th:nth-child(4),
.firmas-table td:nth-child(4) {
    width: 26.67%;
}

/* Cambiar color de las líneas de las tablas */
.firmas-table th,
.firmas-table td {
    border-color: #000000; /* Color de las líneas predeterminado */
}


.form-table {
    width: 100%;
    border-collapse: collapse;
  }

  .title-cell {
    text-align: center;
    font-weight: bold;
    background-color: #006bffe8;
    color: #fff;
  }

  .header {
    font-weight: bold;
  }

  .data {
    padding: 5px;
  }

  .note {
    font-style: italic;
  }

  .split-line {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
  }

  .checkboxes input[type="checkbox"] {
    margin-right: 5px;
  }

/* Estilos para los párrafos */
p {
  margin-bottom: 10px;
}

/* Estilos para los elementos strong */
strong {
  margin-right: 5px;
}

/* Estilos para los campos de entrada */
input[type="text"],
select {
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 14px;
  margin-right: 5px;
}

/* Estilos para los campos de entrada en línea */
input[type="text"][id$="_continuacion"] {
  width: 50px;
}

/* Estilos para los select en línea */
select {
  width: 100px;
}

.center-table {
  text-align: center;
}

.custom-table {
  border-collapse: collapse;
   /* Centrar la tabla */
}

.custom-table caption {
  font-weight: bold;
  margin-bottom: 10px;
}

.table-row {
  border: 1px solid #ddd;
}

.table-header,
.table-data {
  padding: 8px;
  text-align: center; /* Centrar el texto en las celdas */
}

.table-header {
  background-color: #05003c;
  color: #fff;
}

.table-header1 {
    text-align: center;
}

.table-header2 {
  background-color: #2958d6;
  text-align: center;
}

.nota-confidencialidad {
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

.titulo-nota {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.parrafo-nota {
  margin-bottom: 10px;
}

.ensayos-table td.selected {
    background-color: blue !important;
    color: white !important;
}

</style>


</head>
<body>
    <div class="container">
        <div class="logo">
        <img src="img/LIEE-03.png" alt="Logo"> 
        </div>
        <div class="info-column">
            <h1>Solicitud de Servicios</h1>
            <!-- Elemento de la curva -->
            <div class="curved-line"></div>
            <div class="reference">
                <span>Referencia normativa: ISO 17025:2017, 7.1</span>
            </div>
        </div>
        <div>
            <div class="info-row">
                <span>Código:</span>
                <span>INAOE-GCL-PR-07-01</span>
            </div>
            <div class="info-row">
                <span>Revisión:</span>
                <span>04</span>
            </div>
        </div>
    </div>
    <form action="<?= base_url('solicitud') ?>" method="POST">

          <!-- Información adicional -->
          <div class="additional-info">
        <div class="logo1">
        <img src="img/LIEE-03.png" alt="LIEE-03.png">
        </div>
        <div class="info-column">
            <table>
                <tbody>
                    <tr>
                        <td>Folio:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

          <!-- Tabla de Información para llenar por el laboratorio -->
          <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th class="princi" colspan="2">Información para llenar por el laboratorio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre quien recibió solicitud:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Medio por el que recibió solicitud:</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

          <!-- Tabla Datos del cliente -->
          <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th class="princi" colspan="2">Datos del cliente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre de contacto:</td>
                    <td><input type="text" name="nombre_del_cliente" value="<?= isset($nombre_del_cliente) ? $nombre_del_cliente : '' ?>" required></td>
                </tr>
                <tr>
                    <td>Razón social:</td>
                    <td><input type="text" name="razon_social" value="<?= isset($razon_social) ? $razon_social : '' ?>" required></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td><input type="text" name="direccion" value="<?= isset($direccion) ? $direccion : '' ?>" required></td>
                </tr>
                <tr>
                    <td>RFC:</td>
                    <td><input type="text" name="rfc" value="<?= isset($rfc) ? $rfc : '' ?>" required></td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td><input type="text" name="telefono" value="<?= isset($telefono) ? $telefono : '' ?>" required></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="e_mail" value="<?= isset($e_mail) ? $e_mail : '' ?>" required></td>
                </tr>
            </tbody>
        </table>
    </div>

         <!-- Tabla de ensayos -->
         <div class="ensayos-table-container">
            <table class="ensayos-table">
              <thead>
                <tr>
                  <th colspan="6" style="text-align: center; background-color: #006bffe8; color: #fff;">Ensayos (6)</th>
                </tr>
                <tr>
                  <th>Tipo</th>
                  <th>Código</th>
                  <th>NOM 030 ENER 2016</th>
                  <th>Tipo</th>
                  <th>Código</th>
                  <th>NOM 031 ENER 2019</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tipo-a">
                  <td>
                  <input type="checkbox" name="ensayos[]" value="1" <?= isset($ensayos) && in_array('1', $ensayos) ? 'checked' : '' ?> data-tipo="A" data-codigo="030/7.1" data-nom="Eficacia luminosa" class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.1</td>
                  <td>Eficacia luminosa</td>
                  <td class="tipo-a-estrella">
                    <input type="checkbox" name="ensayos[]" value="2" <?= isset($ensayos) && in_array('2', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A*" data-codigo="031/8.1" data-nom="Eficacia luminosa"
                          class="ensayo-checkbox">
                    A*
                  </td>
                  <td>031/8.1</td>
                  <td>Eficacia luminosa</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="3"<?= isset($ensayos) && in_array('3', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.2" data-nom="Variacion del flujo luminoso total nominal"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.2</td>
                  <td>Variacion del flujo luminoso total nominal</td>
                  <td class="tipo-a-estrella">
                    <input type="checkbox" name="ensayos[]" value="4" <?= isset($ensayos) && in_array('4', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A*" data-codigo="031/8.2" data-nom="Variación de flujo luminoso nominal"
                          class="ensayo-checkbox">
                    A*
                  </td>
                  <td>031/8.2</td>
                  <td>Variación de flujo luminoso nominal</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="5" <?= isset($ensayos) && in_array('5', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.3" data-nom="Temperatura de color correlacionado (TCC)"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.3</td>
                  <td>Temperatura de color correlacionado (TCC)</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="6" <?= isset($ensayos) && in_array('6', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.3" data-nom="Temperatura de color correlacionada (TCC)"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.3</td>
                  <td>Temperatura de color correlacionada (TCC)</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="7" <?= isset($ensayos) && in_array('7', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.4" data-nom="Flujo luminoso total mínimo mantenido"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.4</td>
                  <td>Flujo luminoso total mínimo mantenido</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="8" <?= isset($ensayos) && in_array('8', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.4" data-nom="Flujo luminoso total mantenido"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.4</td>
                  <td>Flujo luminoso total mantenido</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="9" <?= isset($ensayos) && in_array('9', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.5" data-nom="Indice de rendimiento de color (IRC)"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.5</td>
                  <td>Indice de rendimiento de color (IRC)</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="10" <?= isset($ensayos) && in_array('10', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.5" data-nom="Indice de rendimiento de color (IRC)"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.5</td>
                  <td>Indice de rendimiento de color (IRC)</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="11" <?= isset($ensayos) && in_array('11', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.6" data-nom="Factor de potencia (PU)"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.6</td>
                  <td>Factor de potencia (PU)</td>
                  <td class="tipo-a-estrella">
                    <input type="checkbox" name="ensayos[]" value="12" <?= isset($ensayos) && in_array('12', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A*" data-codigo="031/8.6" data-nom="Factor de potencia (PU)"
                          class="ensayo-checkbox">
                    A*
                  </td>
                  <td>031/8.6</td>
                  <td>Factor de potencia (PU)</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="13" <?= isset($ensayos) && in_array('13', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.7" data-nom="Distribucion espacial de luz"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.7</td>
                  <td>Distribucion espacial de luz</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="14" <?= isset($ensayos) && in_array('14', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.7" data-nom="Distorsión armónica total en corriente"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.7</td>
                  <td>Distorsión armónica total en corriente</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="15" <?= isset($ensayos) && in_array('15', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.8" data-nom="Ciclo de choque térmico"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.8</td>
                  <td>Ciclo de choque térmico</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="16" <?= isset($ensayos) && in_array('16', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.8" data-nom="Flujo luminoso de deslumbramiento"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.8</td>
                  <td>Flujo luminoso de deslumbramiento</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="17" <?= isset($ensayos) && in_array('17', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.9" data-nom="Ciclo de conmutación"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.9</td>
                  <td>Ciclo de conmutación</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="18" <?= isset($ensayos) && in_array('18', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.9" data-nom="Resistencia al choque térmico y a la conmutación"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.9</td>
                  <td>Resistencia al choque térmico y a la conmutación</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="19" <?= isset($ensayos) && in_array('19', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.1" data-nom="Sobretensiones transitorias"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.1</td>
                  <td>Sobretensiones transitorias</td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="20" <?= isset($ensayos) && in_array('20', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="031/8.10" data-nom="Resistencia a las descargas atmosféricas"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>031/8.10</td>
                  <td>Resistencia a las descargas atmosféricas</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="21" <?= isset($ensayos) && in_array('21', $ensayos) ? 'checked' : '' ?>
                          data-tipo="A" data-codigo="030/7.1" data-nom="Distorsión armónica total"
                          class="ensayo-checkbox">
                    A
                  </td>
                  <td>030/7.1</td>
                  <td>Distorsión armónica total</td>
                  <td colspan="4" rowspan="1">OTRO</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <input type="checkbox" name="ensayos[]" value="22" <?= isset($ensayos) && in_array('22', $ensayos) ? 'checked' : '' ?>
                          data-tipo="S/A" data-codigo="N/A" data-nom=""
                          class="ensayo-checkbox">
                    S/A
                  </td>
                  <td>N/A</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>


          <div class="additional-text">
              <p>A-Ensayo Acreditado. Laboratorio de Ensayo acreditado por ema, a.c. con acreditación No. EE-1242- 051/20, No. de acreditación CONUEE: DG. E00.203.2022</p>
              <p>A*- Acreditado conforme a NOM-031-ENER-2012. S/A- Ensayo no Acreditado</p>
          </div>


      <!-- Tabla de Elaboró, Revisó y Autorizó -->
      <div class="firmas-table-container">
          <table class="firmas-table">
              <thead>
                  <tr>
                      <th></th>
                      <th class="elaboro">Elaboró</th>
                      <th class="reviso">Revisó</th>
                      <th class="autorizo">Autorizó</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="nombre">Nombre</td>
                      <td class="elaboro-nombre">Luis Aldo Pérez Peláez</td>
                      <td class="reviso-nombre">José Guadalupe Bahena V.</td>
                      <td class="autorizo-nombre">Humberto García Flores</td>
                  </tr>
                  <tr>
                      <td class="firma">Firma</td>
                      <td class="elaboro-firma"></td>
                      <td class="reviso-firma"></td>
                      <td class="autorizo-firma"></td>
                  </tr>
                  <tr>
                      <td class="fecha">Fecha</td>
                      <td class="elaboro-fecha">22 julio 2022</td>
                      <td class="reviso-fecha">22 julio 2022</td>
                      <td class="autorizo-fecha">22 julio 2022</td>
                  </tr>
              </tbody>
          </table>
      </div>



      <!-- Tabla de espécimen -->
      <table class="form-table">
        <tr>
            <td colspan="2" class="title-cell"><b>Datos del espécimen bajo prueba (8)</b></td>
        </tr>
        <tr>
            <th class="header">Nombre del espécimen bajo prueba</th>
            <td class="data"><input type="text" placeholder="Nombre_del_espécimen" name="nombre_del_especimen_bajo_prueba" value="<?= isset($nombre_del_especimen_bajo_prueba) ? $nombre_del_especimen_bajo_prueba : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Descripción</th>
            <td class="data">
                <input type="checkbox" id="lampara" name="descripcion[]" value="lampara" <?= isset($descripcion) && in_array('lampara', $descripcion) ? 'checked' : '' ?>>
                <label for="lampara">Lámpara</label><br>
                <input type="checkbox" id="luminario" name="descripcion[]" value="luminario" <?= isset($descripcion) && in_array('luminario', $descripcion) ? 'checked' : '' ?>>
                <label for="luminario">Luminario</label>
            </td>
        </tr>
        <tr>
            <th class="header">Uso del espécimen bajo prueba</th>
            <td class="data">
                <input type="checkbox" id="exterior" name="uso_del_especimen[]" value="exterior" <?= isset($uso_del_especimen) && in_array('exterior', $uso_del_especimen) ? 'checked' : '' ?>>
                <label for="exterior">Exterior</label><br>
                <input type="checkbox" id="interior" name="uso_del_especimen[]" value="interior" <?= isset($uso_del_especimen) && in_array('interior', $uso_del_especimen) ? 'checked' : '' ?>>
                <label for="interior">Interior</label>
            </td>
        </tr>
        <tr>
            <th class="header">Cantidad</th>
            <td class="data"><input type="text" placeholder="Cantidad" name="Cantidad" value="<?= isset($Cantidad) ? $Cantidad : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Marca y modelo</th>
            <td class="data"><input type="text" placeholder="Marca _y_modelo" name="marca_modelo" value="<?= isset($marca_modelo) ? $marca_modelo : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Número de serie</th>
            <td class="data"><input type="text" placeholder="Número_de_serie" name="numero_de_serie" value="<?= isset($numero_de_serie) ? $numero_de_serie : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Tensión eléctrica de operación (V)*</th>
            <td class="data"><input type="text" placeholder="Tensión_eléctrica_de_operación_(V)*" name="tencion_electrica" value="<?= isset($tencion_electrica) ? $tencion_electrica : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Potencia eléctrica de operación (W)*</th>
            <td class="data"><input type="text" placeholder="Potencia_eléctrica_de_operación_(W)*" name="potencia_electrica" value="<?= isset($potencia_electrica) ? $potencia_electrica : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Valor de flujo luminoso nominal (lm)*</th>
            <td class="data"><input type="text" placeholder="Valor_de_flujo_luminoso_nominal_(lm)*" name="valor_flujo" value="<?= isset($valor_flujo) ? $valor_flujo : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Temperatura de color correlacionada (°K)*</th>
            <td class="data"><input type="text" placeholder="Temperatura_de_color_correlacionada_(°K)*" name="temperatura_color" value="<?= isset($temperatura_color) ? $temperatura_color : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Índice de rendimiento de color*</th>
            <td class="data"><input type="text" placeholder="Índice_de_rendimiento_de_color*" name="indice_de_rendimiento_color" value="<?= isset($indice_de_rendimiento_color) ? $indice_de_rendimiento_color : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Horas de vida útil de la lámpara (h)*</th>
            <td class="data"><input type="text" placeholder="Horas_de_vida_útil_de_la_lámpara_(h)*" name="horas_vital" value="<?= isset($horas_vital) ? $horas_vital : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Factor de potencia nominal*</th>
            <td class="data"><input type="text" placeholder="Factor_de_potencia_nominal*" name="factor_potencia" value="<?= isset($factor_potencia) ? $factor_potencia : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Tipo de material de la carcasa</th>
            <td class="data"><input type="text" placeholder="Tipo_de_material_de_la_carcasa" name="tipo_material_caracasa" value="<?= isset($tipo_material_caracasa) ? $tipo_material_caracasa : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Tipo de material del reflector</th>
            <td class="data"><input type="text" placeholder="Tipo_de_material_del_reflector" name="tipo_material_reflector" value="<?= isset($tipo_material_reflector) ? $tipo_material_reflector : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Tipo de montaje</th>
            <td class="data"><input type="text" placeholder="Tipo_de_montaje" name="tipo_de_montaje" value="<?= isset($tipo_de_montaje) ? $tipo_de_montaje : '' ?>" required></td>
        </tr>
        <tr>
            <th class="header">Tipo de controlador (drive):</th>
            <td class="data">
                <input type="checkbox" id="integrada" name="tipo_controlador[]" value="integrada" <?= isset($tipo_controlador) && in_array('integrada', $tipo_controlador) ? 'checked' : '' ?>>
                <label for="integrada">Integrada al módulo de led</label><br>
                <input type="checkbox" id="separado" name="tipo_controlador[]" value="separado" <?= isset($tipo_controlador) && in_array('separado', $tipo_controlador) ? 'checked' : '' ?>>
                <label for="separado">Separado del módulo de led</label><br>
                <input type="checkbox" id="fuera" name="tipo_controlador[]" value="fuera" <?= isset($tipo_controlador) && in_array('fuera', $tipo_controlador) ? 'checked' : '' ?>>
                <label for="fuera">Fuera del luminario</label>
            </td>
        </tr>
        <tr>
            <th class="header">Posición del luminario en grados con respecto a la horizontal (importante para la realización de las pruebas del fotogoniómetro):</th>
            <td class="data"><input type="text" name="posicion_luminaria_grados" value="<?= isset($posicion_luminaria_grados) ? $posicion_luminaria_grados : '' ?>"></td>
        </tr>
        <tr>
            <th colspan="header" class="note">* Esta información se sustituye por los datos especificados en la ficha técnica anexa (debe estar presente la misma anteponiendo la palabra MUESTRA:)</th>
            <td class="data"></td>
        </tr>
    </table>

        
      <div class="additional-text">
          <p>**En caso de que no aplique colocar NA</p>
          <p>(9) En caso de solicitar la prueba 030/7.7 o 031/8.8 o haber requerido ensayo
              para curva de distribución de intensidades luminosas favor de indicar la siguiente
              información:</p>
      </div>
        
      <!-- Pagina 2  -->


      <table class="custom-table">
        <tr>
            <th>Fabricante de la luminaria</th>
            <td><input type="text" id="fabricante" name="fabricante_luminaria" value="<?= isset($fabricante_luminaria) ? $fabricante_luminaria : '' ?>"></td>
        </tr>
        <tr>
            <th>Número de módulos de tarjetas LED del luminario y/o lámpara</th>
            <td><input type="text" id="num_modulos" name="numero_tarjetas_led" value="<?= isset($numero_tarjetas_led) ? $numero_tarjetas_led : '' ?>"></td>
        </tr>
        <tr>
            <th>Número de LEDs por módulo de tarjetas LED del luminario/lámpara</th>
            <td><input type="text" id="num_leds_por_modulo" name="numero_leds_modulo" value="<?= isset($numero_leds_modulo) ? $numero_leds_modulo : '' ?>"></td>
        </tr>
        <tr>
            <th>Número de catálogo del luminario y/o lámpara</th>
            <td><input type="text" id="num_catalogo" name="numero_catalogo" value="<?= isset($numero_catalogo) ? $numero_catalogo : '' ?>"></td>
        </tr>
        <tr>
            <th>Dimensiones del luminario y/o lámpara (largo x ancho x alto)</th>
            <td><input type="text" id="dimensiones" name="dimenciones" value="<?= isset($dimenciones) ? $dimenciones : '' ?>"></td>
        </tr>
    </table>
        
      <div class="additional-text">
          <p>Notas:</p>
          <p>*** Para la realización del servicio de ensayos de medición (eléctrica, fotométrica y radiométrica) el espécimen de  prueba del cliente no debe de tener ningún tipo de envejecimiento.</p>
          <p>*En caso de no proporcionar la información, el LIEE indicará la información que considere adecuada o bien NA.  </p>
      </div>

      <p><strong>Comentarios:</strong> <input type="text" id="comentarios" name="comentarios" value="<?= isset($comentarios) ? $comentarios : '' ?>">(10)</p>
      <p></p>
      <p></p>
      <p></p>

      <p><strong>Datos de común acuerdo entre el cliente y el Laboratorio.</strong></p>

    <p><strong>Declaración de conformidad:</strong> ¿Requiere declaración de conformidad? <select id="conformidad" name="conformidad">
            <option value="si" <?= isset($conformidad) && $conformidad === 'si' ? 'selected' : '' ?>>Sí</option>
            <option value="no" <?= isset($conformidad) && $conformidad === 'no' ? 'selected' : '' ?>>No</option>
        </select> (12)</p>
    <p><strong>Referencia normativa:</strong> <input type="text" id="referencia_normativa" name="referencia_normativa" value="<?= isset($referencia_normativa) ? $referencia_normativa : '' ?>">(13)</p>
    <p><strong>Regla de decisión:</strong> <input type="text" id="regla_de_decision" name="regla_decision" value="<?= isset($regla_decision) ? $regla_decision : '' ?>">(14)</p>

      <div class="center-table">
          <table class="custom-table">
            <caption>Tabla de reglas de decisión</caption>
            <tr class="table-row">
              <th class="table-header2">Regla de decisión</th>
              <th class="table-header2">Zona de seguridad "w"</th>
              <th class="table-header2">Riesgo específico</th>
            </tr>
            <tr class="table-row">
              <td class="table-data">6 Sigma</td>
              <td class="table-data">3 U</td>
              <td class="table-data">&lt; 1 ppm PFA</td>
            </tr>
            <tr class="table-row">
              <td class="table-data">3 Sigma</td>
              <td class="table-data">1.5 U</td>
              <td class="table-data">&lt; 0.16% PFA</td>
            </tr>
            <tr class="table-row">
              <td class="table-data">Regla ILAC G8</td>
              <td class="table-data">1 U</td>
              <td class="table-data">&lt; 2.5% PFA</td>
            </tr>
            <tr class="table-row">
              <td class="table-data">Aceptación simple</td>
              <td class="table-data">0</td>
              <td class="table-data">&lt; 50% PFA</td>
            </tr>
            <tr class="table-row">
              <td class="table-data">Definido por el cliente</td>
              <td class="table-data">r U</td>
              <td class="table-data">El cliente define arbitrariamente el múltiplo de r para ser aplicado como zona de seguridad</td>
            </tr>
          </table>
        </div>
        
        <p><strong>Definición de límites de tolerancia:</strong> <input type="text" id="limites_tolerancia_izquierda" name="definicion_tolerancia" value="<?= isset($definicion_tolerancia) ? $definicion_tolerancia : '' ?>"> (15)</p>

        <div class="additional-text">
          <p>(11) En caso de que la factura la requiera a nombre de otra empresa llenar los siguientes datos:  </p>
        </div>

        <table class="custom-table">
            <tr>
              <th class="table-header1">Razón social</th>
              <td class="table-data"><input type="text" id="razon_social_factura" name="razon_social" value="<?= isset($razon_social) ? $razon_social : '' ?>"></td>
            </tr>
            <tr>
              <th class="table-header1">Dirección</th>
              <td class="table-data"><input type="text" id="direccion_factura" name="direccion" value="<?= isset($direccion) ? $direccion : '' ?>"></td>
            </tr>
            <tr>
              <th class="table-header1">RFC</th>
              <td class="table-data"><input type="text" id="rfc_factura" name="rfc" value="<?= isset($rfc) ? $rfc : '' ?>"></td>
            </tr>
            <tr>
              <th class="table-header1">E-mail/tel.</th>
              <td class="table-data"><input type="text" id="email_tel" name="e_mail_telefono" value="<?= isset($e_mail_telefono) ? $e_mail_telefono : '' ?>"></td>
            </tr>
         </table>
        
        <div class="nota-confidencialidad">
          <h2 class="titulo-nota">NOTAS DE CONFIDENCIALIDAD Y PROTECCIÓN DE DATOS PERSONALES Y EMPRESARIALES.</h2>
          <p class="parrafo-nota">Los datos e información considerado personales o declarados como confidenciales por el cliente serán utilizados sólo con los fines necesarios para atender el servicio de ensayo y bajo ninguna circunstancia serán empleados con otro fin o compartidos con terceros.</p>
          <p class="parrafo-nota">El LIEE es responsable, por medio de acuerdos legalmente ejecutables, de la gestión de toda la información obtenida o creada durante la realización de los servicios de ensayo.</p>
          <p class="parrafo-nota">Cuando el laboratorio sea requerido por ley u obligado por las disposiciones contractuales para revelar información confidencial, debe notificar al cliente o a la persona interesada sobre los proporcionados, salvo que esté prohibido por la ley.</p>
          <p class="parrafo-nota">Toda la información aquí señalada será tratada como confidencial y no se utilizará ningún dato de ninguna manera distinta al propósito de la presente solicitud; lo anterior conforme a la legislación aplicable en materia de protección de datos personales.</p>
        </div>



        <table class="custom-table">
          <thead>
              <tr class="table-row">
                <th class="table-header" colspan="5">CAMBIOS EN LA VERSIÓN</th>
              </tr>
          <thead>
            <tr class="table-row">
              <th class="table-header1">FECHA DE EMISIÓN</th>
              <th class="table-header1">REVISIÓN VIGENTE</th>
              <th class="table-header1">FECHA DE REVISIÓN</th>
              <th class="table-header1">DESCRIPCIÓN DEL CAMBIO/MODIFICACIÓN</th>
              <th class="table-header1">RESPONSABLE DE CAMBIO</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-row">
              <td class="table-data">Julio 2018</td>
              <td class="table-data">00</td>
              <td class="table-data">N/A</td>
              <td class="table-data"></td>
              <td class="table-data"></td>
            </tr>
            <tr class="table-row">
              <td class="table-data"></td>
              <td class="table-data">01</td>
              <td class="table-data">Mayo 2020</td>
              <td class="table-data">Se eliminó la tabla de ensayos completos. Se agregó tipo de ensayo, Acreditado o Sin acreditación en ISO/IEC 17025:2017. Se agregó en la tabla de ensayos la opción de “OTROS”. Se agregó tabla con información de quién recibe la solicitud por parte del laboratorio y el medio por la cual la recibe. Se omitió la firma del solicitante. Se cambió “Producto” por “Espécimen bajo prueba”. Se agregó instructivo de llenado. Se agregó logotipo del LIEE.</td>
              <td class="table-data">Noé Morales Núñez<br>Pablo Rodríguez López</td>
            </tr>
            <tr class="table-row">
              <td class="table-data"></td>
              <td class="table-data">02</td>
              <td class="table-data">Julio 2021</td>
              <td class="table-data">Se agregó la sección de “Datos de común acuerdo entre el cliente y el Laboratorio.”, después de la sección de “Comentarios”. Se cambió el texto “A- Ensayo Acreditado. No. Acreditación (7) en ISO/IEC 17025:2017 “Requisitos generales para la competencia de los laboratorios de ensayo y calibración” por el texto “A- Ensayo Acreditado. Laboratorio de Ensayo acreditado por ema, a.c. con acreditación No. EE-1242- 051/20”. Se modificó el instructivo de llenado para agregar los puntos del 12 al 15.</td>
              <td class="table-data">José Guadalupe Bahena Vázquez<br>Luis Aldo Pérez Peláez</td>
            </tr>
            <tr class="table-row">
              <td class="table-data"></td>
              <td class="table-data">03</td>
              <td class="table-data">Septiembre 2021</td>
              <td class="table-data">Se modifica el apartado (6) con base a la nueva norma NOM 031 ENER 2019. Se agrega No. de acreditación CONUEE: DG. E00.134.2020.</td>
              <td class="table-data">José Guadalupe Bahena Vázquez<br>Luis Aldo Pérez Peláez</td>
            </tr>
            <tr class="table-row">
              <td class="table-data"></td>
              <td class="table-data">04</td>
              <td class="table-data">Julio 2022</td>
              <td class="table-data">Actualización del apartado 6; se indican los ensayos que recién se acreditaron y aprobaron, así como el número de aprobación CONUEE más reciente. Se agrega notas sobre protección de dato e información confidencial.</td>
              <td class="table-data">Luis Aldo Pérez Peláez</td>
            </tr>
          </tbody>
        </table>
        
        <p><strong>Instructivo de llenado:</strong></p>

      <table class="custom-table">
        <thead>
          <tr class="table-row">
            <th class="table-header1">Número</th>
            <th class="table-header1">Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-row">
            <td class="table-data">1</td>
            <td class="table-data">Registrar el “Folio” del documento indicando año, mes y consecutivo de solicitud (p/e: 200604,  que corresponde a la solicitud número 4 del mes de junio del año 2020).</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">2</td>
            <td class="table-data">Registrar la “Fecha” en la cual se llena el documento.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">3</td>
            <td class="table-data">Registrar el nombre del personal del LIEE que realiza el llenado del documento.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">4</td>
            <td class="table-data">Registrar el medio por el cual recibió la solicitud de servicios (presencial, vía telefónica, e-mail, u otro).</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">5</td>
            <td class="table-data">Registrar los datos solicitados del cliente.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">6</td>
            <td class="table-data">Registrar los ensayos solicitados. En caso de OTRO indicar el nombre del ensayo.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">7</td>
            <td class="table-data">Registrar el No. de Acreditación del LIEE que corresponda conforme al ensayo.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">8</td>
            <td class="table-data">Registrar los datos del espécimen bajo prueba.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">9</td>
            <td class="table-data">Registrar los datos requeridos para incluirlos en el archivo electrónico. IES.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">10</td>
            <td class="table-data">Registrar los comentarios u observaciones pertinentes que deberán considerarse en el servicio a realizar.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">11</td>
            <td class="table-data">Registrar los datos pertinentes para la elaboración de factura.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">12</td>
            <td class="table-data">Marcar la decisión del cliente “Si” o “No” requiere declaración de conformidad.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">13</td>
            <td class="table-data">Indicar la referencia normativa, si no existe referencia normativa marcar con N/A.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">14</td>
            <td class="table-data">Indicar la regla de decisión acordada con el cliente de la “Tabla de reglas de decisión”.</td>
          </tr>
          <tr class="table-row">
            <td class="table-data">15</td>
            <td class="table-data">Indicar los límites de tolerancia acordados con el cliente.</td>
          </tr>
        </tbody>
      </table>

      <p><strong>Nota:</strong> Borrar los numerales junto con el instructivo de llenado una vez terminado de ingresar los datos o al imprimir el documento. Podrá insertarse tanto filas como sean necesarias.</p>
      
      <button type="submit">Enviar Solicitud</button>
    </form>

<script>


document.addEventListener('DOMContentLoaded', function() {
    var fechaInput = document.querySelector('input[name="fecha"]');
    var fechaActual = new Date().toISOString().split('T')[0];
    fechaInput.value = fechaActual;
});
</script>

<script>
  // Resaltar los ensayos seleccionados y agregar campos ocultos con los datos
  const ensayosCheckboxes = document.querySelectorAll('.ensayo-checkbox');
  ensayosCheckboxes.forEach(checkbox => {
 
        // Eliminar los campos ocultos del ensayo deseleccionado
        const hiddenFields = this.parentNode.querySelectorAll('input[type="hidden"]');
        hiddenFields.forEach(field => field.remove());
      }
    );

</script>
</body>
</html>