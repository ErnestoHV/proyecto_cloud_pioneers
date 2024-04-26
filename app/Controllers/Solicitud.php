<?php

namespace App\Controllers;

use App\Models\cliente_model;
use App\Models\caso_solicitud_model;
use App\Models\especimen_model;
use App\Models\factura_otra_empresa_model;
use App\Models\reseña_model;
use Dompdf\Dompdf;

class Solicitud extends BaseController
{
    public function index()
    {
        // Cargar la vista del formulario de solicitud
        return view('cuerpos/client-form');
    }

    public function index1()
    {
        // Cargar la vista del formulario de solicitud
        return view('cuerpos/client-form');
    }

    public function guardar()
    {
        // Crear instancias de los modelos
        $cliente_model = new cliente_model();
        $caso_solicitud_model = new caso_solicitud_model();
        $especimen_model = new especimen_model();
        $factura_otra_empresa_model = new factura_otra_empresa_model();
        $resena_model = new reseña_model();

        // Validar y obtener los datos del formulario
        $datos_cliente = [
            'nombre_del_cliente' => $this->request->getPost('nombre_del_cliente'),
            'razon_social' => $this->request->getPost('razon_social'),
            'direccion' => $this->request->getPost('direccion'),
            'rfc' => $this->request->getPost('rfc'),
            'telefono' => $this->request->getPost('telefono'),
            'e_mail' => $this->request->getPost('e_mail'),
            'fecha_de_creacion' => date('Y-m-d')
        ];

        // Insertar los datos del cliente y obtener el ID generado
        $id_cliente = $cliente_model->insert($datos_cliente);

        // Validar y obtener los datos del caso de solicitud
        $datos_caso_solicitud = [
            'fabricante_luminaria' => $this->request->getPost('fabricante_luminaria'),
            'numero_tarjetas_led' => $this->request->getPost('numero_tarjetas_led'),
            'numero_leds_modulo' => $this->request->getPost('numero_leds_modulo'),
            'numero_catalogo' => $this->request->getPost('numero_catalogo'),
            'dimenciones' => $this->request->getPost('dimenciones'),
            'id_cliente' => $id_cliente
        ];

        // Insertar los datos del caso de solicitud
        $caso_solicitud_model->insert($datos_caso_solicitud);

        // Validar y obtener los datos del espécimen
        $datos_especimen = [
            'nombre_del_especimen_bajo_prueba' => $this->request->getPost('nombre_del_especimen_bajo_prueba'),
            'descripcion' => is_array($this->request->getPost('descripcion')) ? implode(',', $this->request->getPost('descripcion')) : $this->request->getPost('descripcion'),
            'uso_del_especimen' => is_array($this->request->getPost('uso_del_especimen')) ? implode(',', $this->request->getPost('uso_del_especimen')) : $this->request->getPost('uso_del_especimen'),
            'marca_modelo' => $this->request->getPost('marca_modelo'),
            'numero_de_serie' => $this->request->getPost('numero_de_serie'),
            'tencion_electrica' => $this->request->getPost('tencion_electrica'),
            'potencia_electrica' => $this->request->getPost('potencia_electrica'),
            'valor_flujo' => $this->request->getPost('valor_flujo'),
            'temperatura_color' => $this->request->getPost('temperatura_color'),
            'indice_de_rendimiento_color' => $this->request->getPost('indice_de_rendimiento_color'),
            'horas_vital' => $this->request->getPost('horas_vital'),
            'factor_potencia' => $this->request->getPost('factor_potencia'),
            'tipo_material_caracasa' => $this->request->getPost('tipo_material_caracasa'),
            'tipo_material_reflector' => $this->request->getPost('tipo_material_reflector'),
            'tipo_de_montaje' => $this->request->getPost('tipo_de_montaje'),
            'tipo_controlador' => is_array($this->request->getPost('tipo_controlador')) ? implode(',', $this->request->getPost('tipo_controlador')) : $this->request->getPost('tipo_controlador'),
            'posicion_luminaria_grados' => $this->request->getPost('posicion_luminaria_grados'),
            'id_cliente' => $id_cliente
        ];

        // Insertar los datos del espécimen
        $especimen_model->insert($datos_especimen);

        // Validar y obtener los datos de reseña
        $datos_resena = [
            'comentarios' => $this->request->getPost('comentarios'),
            'conformidad' => $this->request->getPost('conformidad'),
            'referencia_normativa' => $this->request->getPost('referencia_normativa'),
            'regla_decision' => $this->request->getPost('regla_decision'),
            'definicion_tolerancia' => $this->request->getPost('definicion_tolerancia'),
            'id_cliente' => $id_cliente
        ];

        // Insertar los datos de reseña
        $resena_model->insert($datos_resena);

        // Validar y obtener los datos de facturación a otra empresa
        $datos_factura_otra_empresa = [
            'razon_social' => $this->request->getPost('razon_social'),
            'direccion' => $this->request->getPost('direccion'),
            'rfc' => $this->request->getPost('rfc'),
            'e_mail_telefono' => $this->request->getPost('e_mail_telefono'),
            'id_cliente' => $id_cliente
        ];

        // Insertar los datos de facturación a otra empresa
        $factura_otra_empresa_model->insert($datos_factura_otra_empresa);

                // Obtener los ensayos seleccionados
        $ensayos_seleccionados = $this->request->getPost('ensayos');
        
        // Cargar la vista rellenada
        $vista_rellenada = view('cuerpos/client-form', [
            'folio' => $this->request->getPost('folio'),
            'fecha' => $this->request->getPost('fecha'),
            'nombre_recibio' => $this->request->getPost('nombre_recibio'),
            'medio_recibio' => $this->request->getPost('medio_recibio'),
            'nombre_del_cliente' => $this->request->getPost('nombre_del_cliente'),
            'razon_social' => $this->request->getPost('razon_social'),
            'direccion' => $this->request->getPost('direccion'),
            'rfc' => $this->request->getPost('rfc'),
            'telefono' => $this->request->getPost('telefono'),
            'e_mail' => $this->request->getPost('e_mail'),
            'nombre_del_especimen_bajo_prueba' => $this->request->getPost('nombre_del_especimen_bajo_prueba'),
            'descripcion' => $this->request->getPost('descripcion'),
            'uso_del_especimen' => $this->request->getPost('uso_del_especimen'),
            'Cantidad' => $this->request->getPost('Cantidad'),
            'marca_modelo' => $this->request->getPost('marca_modelo'),
            'numero_de_serie' => $this->request->getPost('numero_de_serie'),
            'tencion_electrica' => $this->request->getPost('tencion_electrica'),
            'potencia_electrica' => $this->request->getPost('potencia_electrica'),
            'temperatura_color' => $this->request->getPost('temperatura_color'),
            'indice_de_rendimiento_color' => $this->request->getPost('indice_de_rendimiento_color'),
            'horas_vital' => $this->request->getPost('horas_vital'),
            'factor_potencia' => $this->request->getPost('factor_potencia'),
            'tipo_material_caracasa' => $this->request->getPost('tipo_material_caracasa'),
            'tipo_material_reflector' => $this->request->getPost('tipo_material_reflector'),
            'tipo_de_montaje' => $this->request->getPost('tipo_de_montaje'),
            'tipo_controlador' => $this->request->getPost('tipo_controlador'),
            'posicion_luminaria_grados' => $this->request->getPost('posicion_luminaria_grados'),
            'fabricante_luminaria' => $this->request->getPost('fabricante_luminaria'),
            'numero_tarjetas_led' => $this->request->getPost('numero_tarjetas_led'),
            'numero_leds_modulo' => $this->request->getPost('numero_leds_modulo'),
            'numero_catalogo' => $this->request->getPost('numero_catalogo'),
            'dimenciones' => $this->request->getPost('dimenciones'),
            'comentarios' => $this->request->getPost('comentarios'),
            'conformidad' => $this->request->getPost('conformidad'),
            'referencia_normativa' => $this->request->getPost('referencia_normativa'),
            'regla_decision' => $this->request->getPost('regla_decision'),
            'ensayos' => $ensayos_seleccionados,
            'definicion_tolerancia' => $this->request->getPost('definicion_tolerancia'),
            'razon_social_factura' => $this->request->getPost('razon_social_factura'),
            'direccion_factura' => $this->request->getPost('direccion_factura'),
            'rfc_factura' => $this->request->getPost('rfc_factura'),
            'e_mail_telefono' => $this->request->getPost('e_mail_telefono'),
        ]);
        

        $logo_inaoe = base_url('img/logo_inaoe.png');
    $liee03 = base_url('img/LIEE-03.png');

    $datos = [
        'logo_inaoe' => $logo_inaoe,
        'liee03' => $liee03,
        // Agrega más datos si es necesario
    ];

    // Cargar la vista rellenada con los datos
    $vista_rellenada = view('cuerpos/client-form', $datos);



        $estilos_css = file_get_contents(base_url('css/solicitud_estilos.css'));


        // Generar el PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($vista_rellenada);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdf_output = $dompdf->output();

        

        $options = $dompdf->getOptions();
        $options->setIsRemoteEnabled(true);
        $dompdf->setOptions($options);

        // Guardar el PDF en un archivo temporal
        $pdf_path = WRITEPATH . 'temp/solicitud_' . $id_cliente . '.pdf';
        file_put_contents($pdf_path, $pdf_output);


        $writablePath = realpath(WRITEPATH);
        $pdf_path = $writablePath . '/temp/solicitud_' . $id_cliente . '.pdf';

        $tempDir = $writablePath . '/temp';
        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0755, true);
        }
          

          // Descargar el PDF automáticamente
          header('Content-Type: application/pdf');
          header('Content-Disposition: attachment; filename="solicitud_' . $id_cliente . '.pdf"');
          header('Content-Length: ' . filesize($pdf_path));
          readfile($pdf_path);
  





        // Enviar el PDF por correo electrónico al cliente
        $email = \Config\Services::email();
        $email->setFrom('alexisramos3030@gmail.com', 'Tu Nombre');
        $email->setTo($this->request->getPost('e_mail'));
        $email->setSubject('Solicitud de Servicio');
        $email->setMessage('Adjunto encontrarás el PDF de tu solicitud de servicio.');
        $email->attach($pdf_path);
        $email->send();

        // Enviar el PDF por correo electrónico a martinezromerojesus1@gmail.com
        $email->clear();
        $email->setFrom('alexisramos3030@gmail.com', 'Tu Nombre');
        $email->setTo('martinezromerojesus1@gmail.com');
        $email->setSubject('Solicitud de Servicio');
        $email->setMessage('Adjunto encontrarás el PDF de la solicitud de servicio del cliente.');
        $email->attach($pdf_path);
        $email->send();

        // Descargar el PDF automáticamente
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="solicitud_' . $id_cliente . '.pdf"');
        header('Content-Length: ' . filesize($pdf_path));
        readfile($pdf_path);

        // Eliminar el archivo PDF temporal
        unlink($pdf_path);
                $options = $dompdf->getOptions();
        $options->setIsRemoteEnabled(true);
        $dompdf->setOptions($options);
        $datos = [
            'logo_inaoe.png' => base_url('img/logo_inaoe.png'),
            'LIEE-03.png' => base_url('img/LIEE-03.png'),
            // ...
            
        ];
        exit();

        $datos = [
            'logo_inaoe' => base_url('img/logo_inaoe.png'),
            'liee03' => base_url('img/LIEE-03.png'),
            // Agrega más datos si es necesario
        ];
        
        // Cargar la vista rellenada
        $vista_rellenada = view('cuerpos/client-form', $datos);
        
    }
}