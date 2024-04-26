<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIEE - Inicio</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('INAOE template\vendor\fontawesome-free\css\all.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('INAOE template/css/sb-admin-2.css') }}" rel="stylesheet">

    <style>
       /* Estilos generales */
       body {
           font-family: 'Roboto', sans-serif;
           background-color: #f5f5f5;
           color: #333;
           margin: 0;
           padding: 0;
       }

       /* Estilos para el encabezado */
       .header {
        background-color: #fff;
        color: #007bff; /* Cambiar el color del texto según sea necesario */
        padding: 20px;
        text-align: center;
        background-image: url('img/LIEE-03.png'); /* URL de la imagen de textura metálica */
        background-repeat: no-repeat;
        background-size: contain; /* ajusta la imagen al contenedor */
        background-position: left center; /* coloca la imagen a la izquierda y centrada verticalmente */
    }

          


       .header h1 {
           margin: 0;
           font-size: 36px;
           font-weight: 700;
       }

       .navbar {
            background-color: rgba(238, 168, 46, 1);
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
              .navbar a {
           color: #fff;
           text-decoration: none;
           padding: 10px 20px;
           font-size: 18px;
           font-weight: 500;
           transition: background-color 0.3s ease;
       }

       .navbar a:hover {
           background-color: #0056b3;
       }

       /* Estilos para el contenido principal */
       .main-content {
           padding: 40px;
       }

       .section-heading {
           font-size: 36px;
           font-weight: 700;
           color: #007bff;
           margin-bottom: 20px;
       }

       .section-subheading {
           font-size: 24px;
           font-weight: 500;
           color: #666;
           margin-bottom: 40px;
       }

       .service-card {
           background-color: #fff;
           border-radius: 5px;
           box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
           padding: 20px;
           text-align: center;
           margin-bottom: 30px;
       }

       .service-card img {
           max-width: 100%;
           height: auto;
           margin-bottom: 20px;
       }

       .service-card h4 {
           font-size: 24px;
           font-weight: 700;
           color: #007bff;
           margin-bottom: 10px;
       }

       .service-card p {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #4d4d4d;
            text-align: justify;
            margin-bottom: 1.5rem;
        }

       /* Estilos para el pie de página */
       .footer {
           background-color: #292b2c;
           color: #fff;
           padding: 20px;
           text-align: center;
       }

       .footer p {
           margin: 0;
           font-size: 14px;
       }
   </style>
  

</head>

<body>
   <!-- Encabezado -->
    <div class="header"src="img/LIEE-03.png" alt="Logo">
        <h1>LIEE INAOE</h1>

    </div>

   <!-- Menú de navegación -->
   <div class="navbar">
        <a href="/">Inicio</a>
        <a href="<?= site_url('login') ?>">Login</a>
        <a href="<?= site_url('ir_solicitud') ?>">Solicitud</a>
   </div>
   

   <!-- Contenido principal -->
   <div class="main-content">
       <h2 class="section-heading">Servicios</h2>
       <h3 class="section-subheading">BANCOS DE ENSAYO Y MEDICIÓN</h3>

       <div class="row">
        <div class="col-md-4">
            <div class="service-card">
            <img src="img/esfera_integradora.jpg" alt="Esfera Integradora"> <!-- Reemplaza URL_DEL_LOGO con la URL de tu logo -->
                <h4>Esfera Integradora</h4>
                <p>Esfera hueca de alta reflexión de 3m de diámetro que permite medir la potencia luminosa de una fuente de luz artificial así como otras características radiométricas y de eficiencia energética, tales como TCC, IRC, eficacia, FP y distorsión armónica.</p>
                </div>
            </div>
        </div>

           
          <div class="row">
              <div class="col-md-4">
                  <div class="service-card">
                  <img src="img/fotogoniometrico.jpg" alt="Fotogoniómetro"> 
                   <h4>Fotogoniómetro</h4>
                   <p>Fotómetro de celda móvil automatizado cuya función es determinar el comportamiento espacial de intensidades luminosas de una fuente de luz artificial. Está constituido por un brazo móvil de 6m con doble sensor de iluminancia y un soporte móvil para especímenes.</p>
               </div>
           </div>


           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
               <img src="img/ciclo_de_choque_termico.jpg" alt="ciclo_de_choque_termico"> 
                   <h4>Ciclo de choque termico</h4>
                   <p>Es un equipo para ensayos de envejecimiento acelerado, consta de dos cámaras térmicas entre las cuales se desplaza automáticamente una canastilla que transporta objetos bajo prueba para someterlas a choque térmico de entre -10 °C y 50 °C. Permite configurar diferentes ciclos y tiempos de exposición.</p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
               <img src="img/sobretenciones.png" alt="Sobretensiones transitorias"> 
                   <h4>Sobretensiones transitorias</h4>
                   <p>Banco de pruebas que permite aplicar a lámparas, componentes eléctricos y electrónicos sobretensiones transitorias amortiguadas de 0.5µs a una frecuencia de 100kHz y sobretensiones de impulso por rayo de hasta 6kV a 3kA con onda combinada de 1.2/50 µs, lo anterior evalúa su confiabilidad ante fallos en la red eléctrica.</p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
               <img src="img/ciclo_de_conmutacion.png" alt="Logo"> 
                   <h4>Ciclo de conmutacion</h4>
                   <p>Sistema electrónico automatizado con control por computadora que tiene por objetivo ejecutar ensayos de envejecimiento acelerado a lámparas y luminarios, a través de ciclos automatizados de encendido y apagado, monitoreando su corriente de carga para verificar su condición de funcionamiento.</p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
               <img src="img/salud_visual.png" alt="Logo"> 
                   <h4>Salud visual</h4>
                   <p>Objetivo del servicio: Realizar el estudio y evaluación de las condiciones de iluminación en el centro de trabajo para identificar áreas de oportunidad en la mejora del desempeño visual, evitando riesgos y demostrando cumplimiento de la norma NOM-025-STPS.</p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
                   <h4>SOBRE NOSOTROS</h4>
                   <p>
                    INSTITUTO NACIONAL DE ASTROFÍSICA, ÓPTICA Y ELECTRÓNICA (INAOE)
                    Somos un Centro Público de Investigación del Consejo Nacional de Ciencia y Tecnología (CONACYT), enfocado a la solución de problemas científicos y tecnológicos del país a través de la investigación básica y aplicada así como el desarrollo tecnológico y la innovación.
                    </p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
                   <h4>MISIÓN</h4>
                   <p>
                   Contribuir como centro público de investigación a la generación, avance y difusión del conocimiento para el desarrollo del país y de la humanidad, por medio de la identificación y solución de problemas científicos y tecnológicos y de la formación de especialistas en las áreas de Astrofísica, Óptica, Electrónica, Ciencias Computacionales y áreas afines.
                    </p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
                   <h4>VISIÓN</h4>
                   <p>
                   El INAOE será un centro público de investigación con un alto liderazgo a nivel internacional en el ámbito de la investigación científica, el desarrollo tecnológico y la formación de recursos humanos dentro de las áreas de Astrofísica, Óptica, Electrónica, Ciencias Computacionales y áreas afines, comprometido con el desarrollo nacional a través de la promoción de valores sociales de solidaridad, creatividad y alta competitividad.
                    </p>
               </div>
           </div>

           <div class="row">
           <div class="col-md-4">
               <div class="service-card">
                   <h4>LIEE</h4>
                   <p>
                                        El laboratorio surge como resultado de un proyecto de Bono de Transferencia Tecnológica del Fondo Sectorial de Innovación (FINNOVA), el cual tuvo como objetivo integrar 5 bancos de ensayos para ejecutar métodos de prueba en conformidad con las normas NOM-030-ENER y NOM-031-ENER, relativas a la descripción de magnitudes mínimas aceptables para fuentes de luz integradas por LEDs para aplicaciones en interiores y exteriores.

                      El Laboratorio de Iluminación y Eficiencia Energética del INAOE tiene el propósito de fomentar en la sociedad la cultura de la iluminación, en términos de eficiencia, calidad y suficiencia.


                      Proveer a diseñadores de sistemas de iluminación, a fabricantes y comercializadores de fuentes de luz artificial, servicios de ingeniería especializada en materia de ensayos espectrofotométricos, eficiencia energética y envejecimiento acelerado, así como consultoría y capacitación, en conformidad con estándares nacionales e internacionales.


                      El laboratorio de Iluminación y eficiencia energética se consolidará como un laboratorio de ensayos líder en el mercado mexicano. Generaremos utilidades de manera sustentable, logrando satisfacer y retener al cliente ofreciendo un servicio excelente por medio de procesos confiables y transparentes, enfocados a una calidad excelente.


                      El Laboratorio de Iluminación y Eficiencia Energética se compromete a proporcionar servicios de ensayos de medición y de integridad de componentes a fuentes de luz artificial conforme a las normas ISO/IEC 17025 y NMX-EC-17025-IMNC vigentes, brindar métodos de ensayos precisos y confiables realizados por especialistas en la materia, procurando la mejora continua en el marco de la gestión de la calidad y de los riesgos en todas las actividades del laboratorio, así como garantizar el aseguramiento de la emisión de resultados confiables, con el objetivo de satisfacer los requisitos de nuestros clientes.                    </p>
               </div>
           </div>
           <!-- Otros servicios -->
       </div>
   </div>

   <!-- Pie de página -->
   <div class="footer">
       <p>&copy; INAOE. Todos los derechos reservados.</p>
   </div>

   <!-- Scripts -->
   
</body>
</html>