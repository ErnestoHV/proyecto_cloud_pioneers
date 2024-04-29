<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClienteModel;
use App\Models\EspecimenModel;
use App\Models\SolicitudModel;
use App\Models\FacturaOtroClienteModel;

class Formulario_solicitudController extends BaseController
{
    public function index()
    {
        return view('formulario_solicitud_servicio/formulario_solicitud_servicio');
    }

    public function subir_solicitud()
    {
        // Crear instancias de los modelos
        $ClienteModel = new ClienteModel();
        $EspecimenModel = new EspecimenModel();
        $SolicitudModel = new SolicitudModel();
        $FacturaOtroClienteModel = new FacturaOtroClienteModel();

        // Validar y obtener los datos del formulario
        $datos_cliente = 
        [
            'nombre_contacto' => $this->request->getPost('nombre_contacto'),
            'razon_social' => $this->request->getPost('razon_social'),
            'direccion_cliente' => $this->request->getPost('direccion_cliente'),
            'rfc_cliente' => $this->request->getPost('rfc_cliente'),
            'telefono_cliente' => $this->request->getPost('telefono_cliente'),
            'correo_electronico_cliente' => $this->request->getPost('correo_electronico_cliente'),
            // 'fecha_creacion_cliente' => date_timestamp_set(''),
            'estado_registro_cliente' => 1,
            
        ];

        // Insertar los datos del cliente y obtener el ID generado
        $id_cliente = $ClienteModel->insert($datos_cliente);

        $datos_especimen = 
        [
            'nombre_cliente' => $this->request->getPost('nombre_contacto'),
            'nombre_especimen' => $this->request->getPost('nombre_especimen'),
            'descripcion_especimen' => is_array($this->request->getPost('descripcion_especimen')) ? implode(',', $this->request->getPost('descripcion_especimen')) : $this->request->getPost('descripcion_especimen'),
            'uso_especimen' => is_array($this->request->getPost('uso_especimen')) ? implode(',', $this->request->getPost('uso_especimen')) : $this->request->getPost('uso_especimen'),
            'cantidad_especimen' => $this->request->getPost('cantidad_especimen'),
            'marca_modelo_especimen' => $this->request->getPost('marca_modelo_especimen'),
            'numero_serie_especimen' => $this->request->getPost('numero_serie_especimen'),
            'tension_electrica_especimen' => $this->request->getPost('tension_electrica_especimen'),
            'potencia_electrica_especimen' => $this->request->getPost('potencia_electrica_especimen'),
            'flujo_luminoso_lm_especimen' => $this->request->getPost('flujo_luminoso_lm_especimen'),
            'temperatura_correlacionada_k_especimen' => $this->request->getPost('temperatura_correlacionada_k_especimen'),
            'indice_rendimiento_color_especimen' => $this->request->getPost('indice_rendimiento_color_especimen'),
            'horas_vida_especimen' => $this->request->getPost('horas_vida_especimen'),
            'factor_potencia_nominal_especimen' => $this->request->getPost('factor_potencia_nominal_especimen'),
            'material_carcasa_especimen' => $this->request->getPost('material_carcasa_especimen'),
            'material_reflector_especimen' => $this->request->getPost('material_reflector_especimen'),
            'tipo_montaje_especimen' => $this->request->getPost('tipo_montaje_especimen'),
            'tipo_controlador_drive' => is_array($this->request->getPost('tipo_controlador_drive')) ? implode(',', $this->request->getPost('tipo_controlador_drive')) : $this->request->getPost('tipo_controlador_drive'),
            'posicion_grados_horizontal_especimen' => $this->request->getPost('posicion_grados_horizontal_especimen'),
            // 'id_cliente' => $id_cliente,


            'fabricante_luminaria' => $this->request->getPost('fabricante_luminaria'),
            'numero_modulos_tarjetas' => $this->request->getPost('numero_modulos_tarjetas'),
            'numero_leds_modulo' => $this->request->getPost('numero_leds_modulo'),
            'numero_catalogo_especimen' => $this->request->getPost('numero_catalogo_especimen'),
            'dimensiones_especimen' => $this->request->getPost('dimensiones_especimen'),
            // 'id_cliente' => $id_cliente
        ];
        
        
        //Inserta aqui datos
        $id_especimen = $EspecimenModel->insert($datos_especimen);

        $datos_solicitud = 
        [
            'comentarios' => $this->request->getPost('comentarios'),
            'conformidad' => $this->request->getPost('conformidad'),
            'referencia_normativa' => $this->request->getPost('referencia_normativa'),
            'regla_de_decision' => $this->request->getPost('regla_de_decision'),
            'limites_tolerancia' => $this->request->getPost('limites_tolerancia'),
            'id_cliente' => $id_cliente
        ];

        //Inserta aqui datos
        $id_factura_otro_cliente = $FacturaOtroClienteModel->insert($datos_solicitud);

        $datos_factura_otro_cliente =
        [
            'razon_social_otro_cliente' => $this->request->getPost('razon_social_otro_cliente'),
            'direccion_otro_cliente' => $this->request->getPost('direccion_otro_cliente'),
            'rfc_otro_cliente' => $this->request->getPost('rfc_otro_cliente'),
            'e_mail_telefono_otro_cliente' => $this->request->getPost('e_mail_telefono_otro_cliente'),
            'id_cliente' => $id_cliente
        ];

        //Inserta aqui datos
        $id_factura_otro_cliente = $FacturaOtroClienteModel->insert($datos_factura_otro_cliente);


        // Cargar la vista rellenada
        $vista_rellenada = view('formulario_solicitud_servicio/formulario_solicitud_servicio',
        [
            'nombre_contacto' => $this->request->getPost('nombre_contacto'),
            'razon_social' => $this->request->getPost('razon_social'),
            'direccion_cliente' => $this->request->getPost('direccion_cliente'),
            'rfc_cliente' => $this->request->getPost('rfc_cliente'),
            'telefono_cliente' => $this->request->getPost('telefono_cliente'),
            'correo_electronico_cliente' => $this->request->getPost('correo_electronico_cliente'),
            // 'fecha_creacion_cliente' => date_timestamp_set(''),


            'nombre_cliente' => $this->request->getPost('nombre_contacto'),
            'nombre_especimen' => $this->request->getPost('nombre_especimen'),
            'descripcion_especimen' => is_array($this->request->getPost('descripcion_especimen')) ? implode(',', $this->request->getPost('descripcion_especimen')) : $this->request->getPost('descripcion_especimen'),
            'uso_especimen' => is_array($this->request->getPost('uso_especimen')) ? implode(',', $this->request->getPost('uso_especimen')) : $this->request->getPost('uso_especimen'),
            'cantidad_especimen' => $this->request->getPost('cantidad_especimen'),
            'marca_modelo_especimen' => $this->request->getPost('marca_modelo_especimen'),
            'numero_serie_especimen' => $this->request->getPost('numero_serie_especimen'),
            'tension_electrica_especimen' => $this->request->getPost('tension_electrica_especimen'),
            'potencia_electrica_especimen' => $this->request->getPost('potencia_electrica_especimen'),
            'flujo_luminoso_lm_especimen' => $this->request->getPost('flujo_luminoso_lm_especimen'),
            'temperatura_correlacionada_k_especimen' => $this->request->getPost('temperatura_correlacionada_k_especimen'),
            'indice_rendimiento_color_especimen' => $this->request->getPost('indice_rendimiento_color_especimen'),
            'horas_vida_especimen' => $this->request->getPost('horas_vida_especimen'),
            'factor_potencia_nominal_especimen' => $this->request->getPost('factor_potencia_nominal_especimen'),
            'material_carcasa_especimen' => $this->request->getPost('material_carcasa_especimen'),
            'material_reflector_especimen' => $this->request->getPost('material_reflector_especimen'),
            'tipo_montaje_especimen' => $this->request->getPost('tipo_montaje_especimen'),
            'tipo_controlador_drive' => is_array($this->request->getPost('tipo_controlador_drive')) ? implode(',', $this->request->getPost('tipo_controlador_drive')) : $this->request->getPost('tipo_controlador_drive'),
            'posicion_grados_horizontal_especimen' => $this->request->getPost('posicion_grados_horizontal_especimen'),
            // 'id_cliente' => $id_cliente,


            'fabricante_luminaria' => $this->request->getPost('fabricante_luminaria'),
            'numero_modulos_tarjetas' => $this->request->getPost('numero_modulos_tarjetas'),
            'numero_leds_modulo' => $this->request->getPost('numero_leds_modulo'),
            'numero_catalogo_especimen' => $this->request->getPost('numero_catalogo_especimen'),
            'dimensiones_especimen' => $this->request->getPost('dimensiones_especimen'),
            // 'id_cliente' => $id_cliente

            'comentarios' => $this->request->getPost('comentarios'),
            'conformidad' => $this->request->getPost('conformidad'),
            'referencia_normativa' => $this->request->getPost('referencia_normativa'),
            'regla_de_decision' => $this->request->getPost('regla_de_decision'),
            'limites_tolerancia' => $this->request->getPost('limites_tolerancia'),

            'razon_social_otro_cliente' => $this->request->getPost('razon_social_otro_cliente'),
            'direccion_otro_cliente' => $this->request->getPost('direccion_otro_cliente'),
            'rfc_otro_cliente' => $this->request->getPost('rfc_otro_cliente'),
            'e_mail_telefono_otro_cliente' => $this->request->getPost('e_mail_telefono_otro_cliente'),
        ]);

        // Cargar la vista rellenada con los datos
        $vista_rellenada = view('cuerpos/client-form', $datos);
    }

}