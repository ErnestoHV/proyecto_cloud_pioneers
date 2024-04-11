CREATE TABLE `ensayo` (
  `id_ensayo` int(2) NOT NULL AUTO_INCREMENT,
  `tipo_ensayo` varchar(4),
  `codigo_ensayo` varchar(10),
  `nombre_ensayo` varchar(60),
  `norma_oficial_mexicana` varchar(20),
  `fecha_creacion_ensayo` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_ensayo` datetime on update CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ensayo`)
);

CREATE TABLE `rol` (
  `id_rol` int(1) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50),
  `fecha_creacion_rol` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_rol` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rol`)
);

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL AUTO_INCREMENT,
  `id_rol` int(1),
  `contrasena_usuario` varchar(60),
  `correo_electronico` varchar(45),
  `nombre_usuario` varchar(30),
  `apellidos_usuario` varchar(35),
  `fecha_creacion_usuario` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_usuario` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  FOREIGN KEY (`id_rol`) REFERENCES `rol`(`id_rol`)
);

CREATE TABLE `cliente` (
  `id_cliente` int(4)  NOT NULL AUTO_INCREMENT,
  `nombre_contacto` varchar(45),
  `razon_social` varchar(45),
  `direccion_cliente` varchar(65),
  `rfc_cliente` varchar(35),
  `telefono_cliente` varchar(15),
  `correo_electronico_cliente` varchar(35),
  `fecha_creacion_cliente` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_cliente` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`)
);

CREATE TABLE `documento` (
  `id_documento` int(5)  NOT NULL AUTO_INCREMENT,
  `nombre_documento` varchar(100),
  `descripcion_documento` varchar(150),
  `link_documento_plantilla` varchar(100),
  `fecha_carga_documento` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_documento` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_documento`)
);

CREATE TABLE `solicitud` (
  `id_solicitud` int(5)  NOT NULL AUTO_INCREMENT,
  `id_usuario` int(2),
  `id_cliente` int(4),
  `fecha_solicitud` date,
  `folio_solicitud` int(7),
  `medio_recibo_solicitud` varchar(20),
  `dimension_especimen` varchar(30),
  `comentarios` varchar(200),
  `conformidad` boolean,
  `referencia_normativa` varchar(40),
  `regla_de_decision` varchar(40),
  `limites_tolerancia` varchar(100),
  `fecha_registro_solicitud` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_solicitud` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_solicitud`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`),
  FOREIGN KEY (`id_cliente`) REFERENCES cliente(`id_cliente`)
);

CREATE TABLE `especimen` (
  `id_especimen` int(5)  NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(5),
  `id_usuario` int(2),
  `fecha_recepcion_especimen` date,
  `descripcion_textual_especimen` varchar(300),
  `nombre_especimen` varchar(60),
  `descripcion_especimen` varchar(10),
  `uso_especimen` varchar(10),
  `cantidad_especimen` int(2),
  `marca_modelo_especimen` varchar(60),
  `numero_serie_especimen` varchar(30),
  `tension_electrica_especimen` int(3),
  `potencia_electrica_especimen` int(3),
  `flujo_luminoso_lm_especimen` int(3),
  `temperatura_correlacionada_k_especimen` int(3),
  `indice_rendimiento_color_especimen` int(5),
  `horas_vida_especimen` int(5),
  `factor_potencia_nominal_especimen` int(5),
  `material_carcasa_especimen` varchar(20),
  `material_reflector_especimen` varchar(20),
  `tipo_montaje_especimen` varchar(30),
  `tipo_controlador_drive` varchar(30),
  `posicion_grados_horizontal_especimen` int(3),
  `fabricante_luminaria` varchar(40),
  `numero_modulos_tarjetas` int(2),
  `numero_leds_modulo` int(2),
  `numero_catalogo_especimen` int(10),
  `dimensiones_especimen` varchar(40),
  `estado_especimen` varchar(30),
  `aceptacion_especimen` boolean,
  `fecha_registro_especimen` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_especimen` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_especimen`),
 FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud`(`id_solicitud`),
 FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`)
);

CREATE TABLE `servicio` (
  `id_servicio` int(5)  NOT NULL AUTO_INCREMENT,
  `id_cliente` int(4),
  `id_especimen` int(5),
  `id_solicitud` int(5),
  `estado_servicio` varchar(20),
  `fecha_inicio_servicio` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin_servicio` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_servicio`),
  FOREIGN KEY (`id_cliente`) REFERENCES `cliente`(`id_cliente`),
  FOREIGN KEY (`id_especimen`) REFERENCES `especimen`(`id_especimen`),
  FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud`(`id_solicitud`)
);

CREATE TABLE `servicio_documento` (
  `id_servicio_documento` int(5)  NOT NULL AUTO_INCREMENT,
  `id_servicio` int(5),
  `id_documento` int(5),
  `id_usuario` int(2),
  `fecha_creacion_servicio_documento` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_servicio_documento` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `link_documento` varchar(60),
  PRIMARY KEY (`id_servicio_documento`),
  FOREIGN KEY (`id_servicio`) REFERENCES servicio(`id_servicio`),
  FOREIGN KEY (`id_documento`) REFERENCES documento(`id_documento`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`)
);

CREATE TABLE `solicitud_ensayo` (
  `id_solicitud_ensayo` int(5)  NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(5),
  `id_ensayo` int(2),
  `fecha_solicitud_ensayo` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_solicitud_ensayo` datetime on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_solicitud_ensayo`),
  FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud`(`id_solicitud`),
  FOREIGN KEY (`id_ensayo`) REFERENCES `ensayo`(`id_ensayo`)
);


==========================================
ROL

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES 
(NULL, 'Responsable de LIEE'),
(NULL, 'Responsable de ensayos'),
(NULL, 'Operador (responsable técnico)'),
(NULL, 'Responsable SGC'),
(NULL, 'Administrador'),
(NULL, 'Supervisor'),
(NULL, 'Operador asistente');
==========================================

==========================================
USUARIO

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `contrasena_usuario`, `correo_electronico`, `nombre_usuario`, `apellidos_usuario`) VALUES
(NULL, '1', 'cloud', 'hgarflo@inaoe.edu.mx', 'Humberto', 'García Flores'),
(NULL, '2', 'cloud', 'lapp@inaoe.edu.mx', 'Aldo', 'Pérez Peláez'),
(NULL, '4', 'cloud', 'leticia2m@inaoe.edu.mx', 'Leticia', 'Martínez Martínez'),
(NULL, '2', 'cloud', 'bahena@inaoe.edu.mx', 'José Guadalupe', 'Bahena Vázquez'),
(NULL, '3', 'cloud', 'irvingga@inaoe.edu.mx', 'Irving', 'Garrido Aguilar'),
(NULL, '3', 'cloud', 'ericksh@inaoe.edu.mx', 'Erick', 'Sánchez Hernández'),
(NULL, '3', 'cloud', 'oscarpj@inaoe.edu.mx', 'Óscar', 'Pérez Jiménez'),
(NULL, '5', 'cloud', 'admin@admin', 'Administrador', NULL),
(NULL, '6', 'cloud', 'supervisor@supervisor', 'Supervisor', NULL),
(NULL, '7', 'cloud', 'asistente@asistente', 'Operador asistente', NULL);
==========================================

==========================================
DOCUMENTO

INSERT INTO `documento` (`id_documento`, `nombre_documento`, `descripcion_documento`, `link_documento_plantilla`) VALUES
(NULL, 'INAOE-GCL-IT-OI Identificación de equipos e ítems.pdf', 'Guía para realizar la correcta identificación de los equipos y especímenes bajo prueba.', NULL),
(NULL, 'INAOE-GCL-lT-02-02 Plantilla para la elaboracion del informe de ensayos - LIEE.pdf', 'Documento plantilla usado para la redacción del informe final de ensayos.', NULL),
(NULL, 'INAOE-GCL-PR-07-01 Solicitud de Servicios NOM 030 y 031 (1).pdf', 'Formato proporcionado a los clientes para generar una solicitud de servicio.', NULL),
(NULL, 'INAOE-GCL-PR-07-02 Cotización de servicios LIEE.pdf', 'Formato proporcionado a los clientes donde se estipula la cotización del servicio solicitado, funciona a su vez como contrato.', NULL),
(NULL, 'INAOE-GCL-PR-07-04 orden de servicio (1).pdf', 'Documento donde se indican las diversas pruebas que deben ser realizadas a los especímenes señalados',NULL),
(NULL, 'INAOE-GCL-PR-07-06_Analisis_de_Factibilidad NOM 030 y 31.pdf', 'Documento donde se evalúa la factibilidad de la realización del servicio', NULL),
(NULL, 'INAOE-GCL-PR-07-07 Bitácora_para_recepcion_de_especímenes_bajo_prueba.pdf', 'Documento donde se registra la recepción de los diversos especímenes enviados por los clientes.', NULL),
(NULL, 'INAOE-GCL-PR-22-07 control de foliosn.xlsx', 'Documento guía para la relación entre las diversas fases del proceso y sus documentos asociados.', NULL);
==========================================

==========================================
ENSAYO

INSERT INTO `ensayo` (`id_ensayo`, `tipo_ensayo`, `codigo_ensayo`, `nombre_ensayo`, `norma_oficial_mexicana`) VALUES
(NULL, 'A', '030/7.1', 'Eficacia luminosa', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.2', 'Variación del flujo luminoso total nominal ', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.3', 'Temperatura de color correlacionado (TCC)', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.4', 'Flujo luminoso total mínimo mantenido', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.5', 'Índice de rendimiento de color (IRC)', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.6', 'Factor de potencia (PU)', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.7', 'Distribución espacial de luz', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.8', 'Ciclo de choque térmico', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.9', 'Ciclo de conmutación', 'NOM 030 ENER 2016'),
(NULL, 'A', '030/7.10', 'Sobretensiones transitorias', 'NOM 030 ENER 2016 '),
(NULL, 'A', '030/7.11', 'Distorsión armónica total', 'NOM 030 ENER 2016 '),
(NULL, 'A', '031/8.1', 'Eficacia luminosa', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.2', 'Variación de flujo luminoso nominal', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.3', 'Temperatura de color correlacionada (TCC)', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.4', 'Flujo luminoso total mantenido', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.5', 'Índice de rendimiento de color (IRC) ', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.6', 'Factor de potencia (PU)', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.7', 'Distorsión armónica total en corriente', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.8', 'Flujo luminoso de deslumbramiento', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.9', 'Resistencia al choque térmico y a la conmutación', 'NOM 031 ENER 2019'),
(NULL, 'A', '031/8.10', 'Resistencia a las descargas atmosféricas', 'NOM 031 ENER 2019');
==========================================