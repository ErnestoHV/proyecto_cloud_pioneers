CREATE TABLE `estado` (
  `id_estado` int(2),
  `nombre_estado` varchar(15),
  `fecha_creacion_estado` datetime,
  `fecha_modificacion_estado` datetime,
  `fecha_borrado_estado` datetime,
  `estado_registro_tabla_estado` int(2),
  PRIMARY KEY (`id_estado`)
);

CREATE TABLE `ensayo` (
  `id_ensayo` int(2),
  `tipo_ensayo` varchar(4),
  `codigo_ensayo` varchar(10),
  `nombre_ensayo` varchar(60),
  `norma_oficial_mexicana` varchar(20),
  `fecha_creacion_ensayo` datetime,
  `fecha_modificacion_ensayo` datetime,
  `fecha_borrado_ensayo` datetime,
  `estado_registro_ensayo` int(2),
  PRIMARY KEY (`id_ensayo`)
);

CREATE TABLE `rol` (
  `id_rol` int(1),
  `nombre_rol` varchar(50),
  `fecha_creacion_rol` datetime,
  `fecha_modificacion_rol` datetime,
  `fecha_borrado_rol` datetime,
  `estado_registro_rol` int(2),
  PRIMARY KEY (`id_rol`)
);

CREATE TABLE `usuario` (
  `id_usuario` int(2),
  `id_rol` int(1),
  `contrasena_usuario` varchar(60),
  `correo_electronico` varchar(45),
  `nombre_usuario` varchar(30),
  `apellidos_usuario` varchar(35),
  `fecha_creacion_usuario` datetime,
  `fecha_modificacion_usuario` datetime,
  `fecha_borrado_usuario` datetime,
  `estado_registro_usuario` int(2),
  PRIMARY KEY (`id_usuario`)
);

CREATE TABLE `cliente` (
  `id_cliente` int(4),
  `nombre_contacto` varchar(45),
  `razon_social` varchar(45),
  `direccion_cliente` varchar(65),
  `rfc_cliente` varchar(35),
  `telefono_cliente` varchar(15),
  `correo_electronico_cliente` varchar(35),
  `fecha_creacion_cliente` datetime,
  `fecha_modificacion_cliente` datetime,
  `fecha_borrado_cliente` datetime,
  `estado_registro_cliente` int(2),
  PRIMARY KEY (`id_cliente`)
);

CREATE TABLE `documento` (
  `id_documento` int(5),
  `nombre_documento` varchar(100),
  `id_estado` int(2),
  `descripcion_documento` varchar(150),
  `link_documento_plantilla` varchar(100),
  `fecha_carga_documento` datetime,
  `fecha_modificacion_documento` datetime,
  `fecha_borrado_documento` datetime,
  `estado_registro_documento` int(2),
  PRIMARY KEY (`id_documento`)
);

CREATE TABLE `solicitud` (
  `id_solicitud` int(5),
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
  `fecha_registro_solicitud` datetime,
  `fecha_modificacion_solicitud` datetime,
  `fecha_borrado_solicitud` datetime,
  `estado_registro_solicitud` int(2),
  PRIMARY KEY (`id_solicitud`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`)
);

CREATE TABLE `servicio` (
  `id_servicio` int(5),
  `id_especimen` int(5),
  `id_estado` int(2),
  `folio_solicitud` int(6),
  `fecha_inicio_servicio` datetime,
  `fecha_fin_servicio` datetime,
  `fecha_modificacion_servicio` datetime,
  `fecha_borrado_servicio` datetime,
  `estado_registro_servicio` int(2),
  PRIMARY KEY (`id_servicio`)
);

CREATE TABLE `especimen` (
  `id_especimen` int(5),
  `id_solicitud` int(5),
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
  `fecha_registro_especimen` datetime,
  `fecha_modificacion_especimen` datetime,
  `fecha_borrado_especimen` datetime,
  `estado_registro_especimen` int(2),
  PRIMARY KEY (`id_especimen`)
);

CREATE TABLE `servicio_documento` (
  `id_servicio_documento` int(5),
  `id_servicio` int(5),
  `id_documento` int(5),
  `id_usuario` int(2),
  `fecha_creacion_servicio_documento` datetime,
  `fecha_modificacion_servicio_documento` datetime,
  `fecha_borrado_servicio_documento` datetime,
  `link_documento` varchar(60),
  `estado_registro_servicio_documento` int(2),
  PRIMARY KEY (`id_servicio_documento`)
);

CREATE TABLE `solicitud_ensayo` (
  `id_solicitud_ensayo` int(5),
  `id_solicitud` int(5),
  `id_ensayo` int(2),
  `fecha_creacion_solicitud_ensayo` datetime,
  `fecha_modificacion_solicitud_ensayo` datetime,
  `fecha_borrado_solicitud_ensayo` datetime,
  `estado_registro_servicio_documento` int(2),
  PRIMARY KEY (`id_solicitud_ensayo`)
);

CREATE TABLE `bitacora_servicio` (
  `id_bitacora_servicio` int(3),
  `id_servicio` int(5),
  `id_estado` int(3),
  `fecha_registro_bitacora` datetime,
  `fecha_modificacion_bitacora` datetime,
  `fecha_borrado_bitacora` datetime,
  `estado_registro_bitacora` int(2),
  PRIMARY KEY (`id_bitacora_servicio`)
);

















