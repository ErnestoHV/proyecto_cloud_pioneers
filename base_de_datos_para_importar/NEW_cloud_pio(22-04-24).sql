CREATE TABLE `estado` (
  `id_estado` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(100),
  `fecha_creacion_estado` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_estado` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_estado` datetime,
  `estado_registro_tabla_estado` int(2),
  PRIMARY KEY (`id_estado`)
);

CREATE TABLE `ensayo` (
  `id_ensayo` int(2)  NOT NULL AUTO_INCREMENT,
  `tipo_ensayo` varchar(4),
  `codigo_ensayo` varchar(10),
  `nombre_ensayo` varchar(60),
  `norma_oficial_mexicana` varchar(20),
  `fecha_creacion_ensayo` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_ensayo` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_ensayo` datetime,
  `estado_registro_ensayo` int(2),
  PRIMARY KEY (`id_ensayo`)
);

CREATE TABLE `rol` (
  `id_rol` int(1) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50),
  `fecha_creacion_rol` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_rol` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_rol` datetime,
  `estado_registro_rol` int(2),
  PRIMARY KEY (`id_rol`)
);

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL AUTO_INCREMENT,
  `id_rol` int(1),
  `contrasena_usuario` varchar(60),
  `correo_electronico` varchar(45),
  `nombre_usuario` varchar(30),
  `apellidos_usuario` varchar(35),
  `fecha_creacion_usuario` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_usuario` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_usuario` datetime,
  `estado_registro_usuario` int(2),
  PRIMARY KEY (`id_usuario`),
  FOREIGN KEY (`id_rol`) REFERENCES `rol`(`id_rol`)
);

CREATE TABLE `cliente` (
  `id_cliente` int(4) NOT NULL AUTO_INCREMENT,
  `nombre_contacto` varchar(45),
  `razon_social` varchar(45),
  `direccion_cliente` varchar(65),
  `rfc_cliente` varchar(35),
  `telefono_cliente` varchar(15),
  `correo_electronico_cliente` varchar(35),
  `fecha_creacion_cliente` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_cliente` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_cliente` datetime,
  `estado_registro_cliente` int(2),
  PRIMARY KEY (`id_cliente`)
);

CREATE TABLE `documento` (
  `id_documento` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_documento` varchar(100),
  `id_estado` int(2),
  `descripcion_documento` varchar(150),
  `link_documento_plantilla` varchar(100),
  `fecha_carga_documento` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_documento` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_documento` datetime,
  `estado_registro_documento` int(2),
  PRIMARY KEY (`id_documento`),
  FOREIGN KEY (`id_estado`) REFERENCES `estado`(`id_estado`)
);

CREATE TABLE `solicitud` (
  `id_solicitud` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(2),
  `id_cliente` int(4),
  `fecha_solicitud` date,
  `folio_solicitud` int(6),
  `medio_recibo_solicitud` varchar(20),
  `dimension_especimen` varchar(30),
  `comentarios` varchar(200),
  `conformidad` boolean,
  `referencia_normativa` varchar(40),
  `regla_de_decision` varchar(40),
  `limites_tolerancia` varchar(100),
  `fecha_registro_solicitud` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_solicitud` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_solicitud` datetime,
  `estado_registro_solicitud` int(2),
  PRIMARY KEY (`id_solicitud`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`),
  FOREIGN KEY (`id_cliente`) REFERENCES `cliente`(`id_cliente`)
);

CREATE TABLE `servicio` (
  `id_servicio` int(5) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(4),
  `id_solicitud` int(5),
  `id_estado` int(2),
  `folio_solicitud` int(6),
  `fecha_inicio_servicio` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin_servicio` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_servicio` datetime,
  `estado_registro_servicio` int(2),
  PRIMARY KEY (`id_servicio`),
  FOREIGN KEY (`id_cliente`) REFERENCES `cliente`(`id_cliente`),
  FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud`(`id_solicitud`),
  FOREIGN KEY (`id_estado`) REFERENCES `estado`(`id_estado`)
);

CREATE TABLE `especimen` (
  `id_especimen` int(5) NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(5),
  `id_usuario` int(2),
  `id_servicio` int(5),
  `folio_solicitud` int(6),
  `nombre_cliente` varchar(30),
  `fecha_recepcion_especimen` date,
  `descripcion_textual_especimen` varchar(300),
  `nombre_especimen` varchar(60),
  `descripcion_especimen` varchar(10),
  `uso_especimen` varchar(10),
  `cantidad_especimen` varchar(10),
  `marca_modelo_especimen` varchar(60),
  `numero_serie_especimen` varchar(30),
  `tension_electrica_especimen` varchar(10),
  `potencia_electrica_especimen` varchar(10),
  `flujo_luminoso_lm_especimen` varchar(10),
  `temperatura_correlacionada_k_especimen` varchar(10),
  `indice_rendimiento_color_especimen` varchar(10),
  `horas_vida_especimen` varchar(10),
  `factor_potencia_nominal_especimen` varchar(10),
  `material_carcasa_especimen` varchar(20),
  `material_reflector_especimen` varchar(20),
  `tipo_montaje_especimen` varchar(30),
  `tipo_controlador_drive` varchar(30),
  `posicion_grados_horizontal_especimen` varchar(10),
  `fabricante_luminaria` varchar(40),
  `numero_modulos_tarjetas` varchar(10),
  `numero_leds_modulo` varchar(10),
  `numero_catalogo_especimen` varchar(10),
  `dimensiones_especimen` varchar(40),
  `estado_especimen` varchar(30),
  `aceptacion_especimen` boolean,
  `fecha_registro_especimen` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_especimen` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_especimen` datetime,
  `estado_registro_especimen` int(2),
  PRIMARY KEY (`id_especimen`),
  FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud`(`id_solicitud`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`),
  FOREIGN KEY (`id_servicio`) REFERENCES `servicio`(`id_servicio`)
);


CREATE TABLE `servicio_documento` (
  `id_servicio_documento` int(5) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(5),
  `id_documento` int(5),
  `id_usuario` int(2),
  `fecha_creacion_servicio_documento` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_servicio_documento` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_servicio_documento` datetime,
  `link_documento` varchar(60),
  `estado_registro_servicio_documento` int(2),
  PRIMARY KEY (`id_servicio_documento`),
  FOREIGN KEY (`id_servicio`) REFERENCES `servicio`(`id_servicio`),
  FOREIGN KEY (`id_documento`) REFERENCES `documento`(`id_documento`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`)
);

CREATE TABLE `solicitud_ensayo` (
  `id_solicitud_ensayo` int(5) NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(5),
  `id_ensayo` int(2),
  `fecha_creacion_solicitud_ensayo` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_solicitud_ensayo` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_solicitud_ensayo` datetime,
  `estado_registro_servicio_documento` int(2),
  PRIMARY KEY (`id_solicitud_ensayo`),
  FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud`(`id_solicitud`),
  FOREIGN KEY (`id_ensayo`) REFERENCES `ensayo`(`id_ensayo`)
);

CREATE TABLE `bitacora_servicio` (
  `id_bitacora_servicio` int(3) NOT NULL AUTO_INCREMENT,
  `id_estado` int(2),
  `fecha_registro_bitacora` datetime  NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion_bitacora` datetime on update CURRENT_TIMESTAMP NULL,
  `fecha_borrado_bitacora` datetime,
  `estado_registro_bitacora` int(2),
  PRIMARY KEY (`id_bitacora_servicio`),
  FOREIGN KEY (`id_estado`) REFERENCES `estado`(`id_estado`)
);


/*Tabla ROL*/

INSERT INTO `rol` (`id_rol`, `nombre_rol`, `estado_registro_rol`) VALUES 
(NULL, 'Responsable de LIEE',1),
(NULL, 'Responsable de ensayos',1),
(NULL, 'Operador (responsable técnico)',1),
(NULL, 'Responsable SGC',1),
(NULL, 'Administrador',1),
(NULL, 'Supervisor',1),
(NULL, 'Operador asistente',1);

/*Tabla USUARIO*/

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `contrasena_usuario`, `correo_electronico`, `nombre_usuario`, `apellidos_usuario`, `estado_registro_usuario`) VALUES
(NULL, '1', 'cloud', 'hgarflo@inaoe.edu.mx', 'Humberto', 'García Flores',1),
(NULL, '2', 'cloud', 'lapp@inaoe.edu.mx', 'Aldo', 'Pérez Peláez',1),
(NULL, '4', 'cloud', 'leticia2m@inaoe.edu.mx', 'Leticia', 'Martínez Martínez',1),
(NULL, '2', 'cloud', 'bahena@inaoe.edu.mx', 'José Guadalupe', 'Bahena Vázquez',1),
(NULL, '3', 'cloud', 'irvingga@inaoe.edu.mx', 'Irving', 'Garrido Aguilar',1),
(NULL, '3', 'cloud', 'ericksh@inaoe.edu.mx', 'Erick', 'Sánchez Hernández',1),
(NULL, '3', 'cloud', 'oscarpj@inaoe.edu.mx', 'Óscar', 'Pérez Jiménez',1),
(NULL, '5', 'cloud', 'admin@admin', 'Administrador', NULL,1),
(NULL, '6', 'cloud', 'sup@sup', 'Supervisor', NULL,1),
(NULL, '7', 'cloud', 'op@op', 'Operador asistente', NULL,1);

/*Tabla ESTADO*/

INSERT INTO `estado` (`id_estado`, `nombre_estado`, `fecha_creacion_estado`, `fecha_modificacion_estado`, `fecha_borrado_estado`, `estado_registro_tabla_estado`) VALUES
(NULL, 'Solicitud', NULL, NULL, NULL, 1),
(NULL, 'Factibilidad y cotización', NULL, NULL, NULL, 1),
(NULL, 'Recepción de ítems', NULL, NULL, NULL, 1),
(NULL, 'Ejecución de ensayos', NULL, NULL, NULL, 1),
(NULL, 'Validación de resultados', NULL, NULL, NULL, 1),
(NULL, 'Entrega de informe', NULL, NULL, NULL, 1),
(NULL, 'Finalización de servicio', NULL, NULL, NULL, 1),
(NULL, 'Cierre de servicio', NULL, NULL, NULL, 1);

/*Tabla DOCUMENTO*/

INSERT INTO `documento` (`id_documento`, `nombre_documento`, `descripcion_documento`, `id_estado`, `link_documento_plantilla`, `estado_registro_documento`) VALUES
(NULL, 'INAOE-GCL-IT-OI Identificación de equipos e ítems.pdf', 'Guía para realizar la correcta identificación de los equipos y especímenes bajo prueba.',3, NULL,1),
(NULL, 'INAOE-GCL-lT-02-02 Plantilla para la elaboracion del informe de ensayos - LIEE.pdf', 'Documento plantilla usado para la redacción del informe final de ensayos.',6, NULL,1),
(NULL, 'INAOE-GCL-PR-07-01 Solicitud de Servicios NOM 030 y 031 (1).pdf', 'Formato proporcionado a los clientes para generar una solicitud de servicio.',1, NULL,1),
(NULL, 'INAOE-GCL-PR-07-02 Cotización de servicios LIEE.pdf', 'Formato proporcionado a los clientes donde se estipula la cotización del servicio solicitado, funciona a su vez como contrato.',2, NULL,1),
(NULL, 'INAOE-GCL-PR-07-04 orden de servicio (1).pdf', 'Documento donde se indican las diversas pruebas que deben ser realizadas a los especímenes señalados',4,NULL,1),
(NULL, 'INAOE-GCL-PR-07-06_Analisis_de_Factibilidad NOM 030 y 31.pdf', 'Documento donde se evalúa la factibilidad de la realización del servicio',2, NULL,1),
(NULL, 'INAOE-GCL-PR-07-07 Bitácora_para_recepcion_de_especímenes_bajo_prueba.pdf', 'Documento donde se registra la recepción de los diversos especímenes enviados por los clientes.',3, NULL,1),
(NULL, 'INAOE-GCL-PR-22-07 control de foliosn.xlsx', 'Documento guía para la relación entre las diversas fases del proceso y sus documentos asociados.',4, NULL,1);

/*Tabla ENSAYO*/

INSERT INTO `ensayo` (`id_ensayo`, `tipo_ensayo`, `codigo_ensayo`, `nombre_ensayo`, `norma_oficial_mexicana`,`estado_registro_ensayo`) VALUES
(NULL, 'A', '030/7.1', 'Eficacia luminosa', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.2', 'Variación del flujo luminoso total nominal ', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.3', 'Temperatura de color correlacionado (TCC)', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.4', 'Flujo luminoso total mínimo mantenido', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.5', 'Índice de rendimiento de color (IRC)', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.6', 'Factor de potencia (PU)', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.7', 'Distribución espacial de luz', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.8', 'Ciclo de choque térmico', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.9', 'Ciclo de conmutación', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.10', 'Sobretensiones transitorias', 'NOM 030 ENER 2016',1),
(NULL, 'A', '030/7.11', 'Distorsión armónica total', 'NOM 030 ENER 2016',1),
(NULL, 'A', '031/8.1', 'Eficacia luminosa', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.2', 'Variación de flujo luminoso nominal', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.3', 'Temperatura de color correlacionada (TCC)', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.4', 'Flujo luminoso total mantenido', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.5', 'Índice de rendimiento de color (IRC) ', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.6', 'Factor de potencia (PU)', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.7', 'Distorsión armónica total en corriente', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.8', 'Flujo luminoso de deslumbramiento', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.9', 'Resistencia al choque térmico y a la conmutación', 'NOM 031 ENER 2019',1),
(NULL, 'A', '031/8.10', 'Resistencia a las descargas atmosféricas', 'NOM 031 ENER 2019',1);

INSERT INTO `cliente` ( `nombre_contacto`, `razon_social`, `direccion_cliente`, `rfc_cliente`, `telefono_cliente`, `correo_electronico_cliente`) VALUES
('Juan Pérez', 'Pérez y Cía.', 'Calle 123, Colonia Centro', 'ABCD123456EFG', '5551234567', 'juan@example.com', 1),
('María López', 'López S.A.', 'Avenida Principal 456', 'WXYZ987654ABC', '5557654321', 'maria@example.com', 1),
('Pedro García', 'García Hnos.', 'Calle Secundaria 789', 'MNOQ54321RST', '5556789012', 'pedro@example.com', 1),
('Ana Martínez', 'Martínez e Hijos', 'Avenida 456, Colonia Norte', 'LMNO123456PQR', '5555555555', 'ana@example.com', 1),
('Javier Sánchez', 'Sánchez & Asociados', 'Calle 789, Colonia Sur', 'WXYZ987654TUV', '5554443333', 'javier@example.com', 1),
('Sofía Rodríguez', 'Rodríguez S.C.', 'Avenida 012, Colonia Este', 'UVWX456789YZA', '5553332222', 'sofia@example.com', 1),
('Carlos Gómez', 'Gómez Ltda.', 'Calle 345, Colonia Oeste', 'BCDE987654FGH', '5552221111', 'carlos@example.com', 1);
;

CREATE TRIGGER generar_folio_despues_insert
AFTER INSERT ON solicitud
FOR EACH ROW
BEGIN
    SET @anio VARCHAR(2);
    SET @mes VARCHAR(2);
	  SET @consecutivo VARCHAR(2);
    SET @nuevo_folio VARCHAR(6);

    -- Extraer el año, mes y número de registro consecutivo de la fecha de creación
    SET anio = RIGHT(YEAR(NEW.fecha_registro_solicitud), 2);
    SET mes = LPAD(MONTH(NEW.fecha_registro_solicitud), 2, '0');

    -- Obtener el número de registros dentro del mes
    SET consecutivo = LPAD((SELECT COUNT(*) + 1 FROM solicitud WHERE YEAR(fecha_registro_solicitud) = YEAR(NEW.fecha_registro_solicitud) AND MONTH(fecha_registro_solicitud) = MONTH(NEW.fecha_registro_solicitud)), 2, '0');

    -- Construir el nuevo folio
    SET nuevo_folio = CONCAT(anio, mes, consecutivo);

    -- Insertar el nuevo folio en el campo Folio
    UPDATE solicitud SET folio_solicitud = nuevo_folio WHERE ID = NEW.ID;
    UPDATE servicio SET folio_solicitud = nuevo_folio WHERE ID = NEW.ID;
    UPDATE especimen SET folio_solicitud = nuevo_folio WHERE ID = NEW.ID;
END;