<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Curriculum Vitae">
  <meta name="author" content="David Villegas Aguilar">
  <link rel="icon" type="image/svg" href="/img/less.svg"/>
  <title>Curriculum Vitae - David Villegas Aguilar</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <style>
    .flotante {
      display:scroll;
          position:fixed;
          bottom:90px;
          right:0px;
    }
    .bg-primary {
      background-color: #007bff !important;
    }
    .text-primary {
      color: #007bff !important;
    }
    a {
      color: #007bff;
    }
  </style>
</head>

<body id="page-top">
  <div class="flotante" >
    <!--<button id="btncorreo" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mdl_correo_enviar"> <i class="fas fa-envelope"></i> Mensaje</button>-->
    <a href="#" id="lnkwhatsapp" class="btn btn-success btn-block"><i class='fab fa-whatsapp'></i>Whatsapp</a>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">David Villegas Aguilar</span>
      <!--<span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>-->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#resumen">Resumen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experiencia">Experiencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#educacion">Educación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#intranet">Habilidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="curriculum.php" target="_black">Imprimir Curriculum</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="resumen">
      <div class="w-100">
        <h1 class="mb-0">David 
          <span class="text-primary">Villegas Aguilar</span>
        </h1>
        <div class="subheading mb-5">Av. Heroes de la Concepcion · Iquique - Chile · (+56) 976400180 ·
          <a href="mailto:david.villegas.aguilar@gmail.com"> david.villegas.aguilar@gmail.com</a>
        </div>
        <p class="mb-5">
          Experiencia profesional en desarrollo informatico basado en lenguajes Php, Javascript, Css, diseño de Base de Datos, Mysql y Oracle, con estudios y cursos MTA Microsoft.
          Experiencia laboral en Universidad Santo Tomas, Universidad de Tarapaca, Clinica Privada Playa Brava y Hospital Iquique.
        </p>
        <div class="social-icons">
          <a href="https://www.facebook.com/david.villegas.aguilar" target="_black">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://twitter.com/moises_aguilar" target="_black">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.linkedin.com/in/david-villegas-aguilar-695b3721" target="_black">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/davidvaguilar" target="_black">
            <i class="fab fa-github"></i>
          </a>
          <a href="mailto:david.villegas.aguilar@gmail.com" target="_black">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experiencia">
      <div class="w-100">
        <h2 class="mb-5">Experiencia</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Desarrollador de Sistema</h3>
            <div class="subheading mb-3">Hospital Iquique - Dr. Ernesto Torres Galdames</div>
            <p>
              <ul>
            		<li>Análisis de sistemas orientado a procesos</li>
	              <li>Programación de sistemas en lenguaje Php y Javascript.</li>
	              <li>Dominio de sistema control de versiones Git.</li>
              </ul>
            </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Octubre 2017 - Presente</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Docente educacion superior</h3>
            <div class="subheading mb-3">Instituto Profesional Santo Tomas</div>        
            <p>
              <ul>
                <li>Cátedras y laboratorios en ramos de programación orientado a objetos y diseño de base de datos.</li>
                <li>Instructor curso Cisco Certificado en IT Essencials, CCNA1 y CCNA2.</li>
                <li>Proctor Microsoft con membrecía Santo Tomas para certificación MTA Microsoft.</li>
              </ul>
            </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Marzo 2015 - Presente</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Encargado de Informatica y Conectividad</h3>
            <div class="subheading mb-3">Clinica Playa Brava</div>
            <p>
              <ul>
                <li>Mantención de sistema informático basado en PHP, JavaScript y CSS.</li>
                <li>Diseñar estrategias y desarrollo de presupuesto Informático.</li>
                <li>Aplicar las políticas de seguridad y recuperación en equipo computacionales.</li>
                <li>Mantención de sistemas computacionales y redes de comunicación.</li>
                <li>Gestionar contratos de servicio de internet y telefonía para disminuir costos operativos en un 20%.</li>
              </ul>
            </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Octubre 2016 - Octubre 2017</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Universidad de Tarapaca</h3>
            <div class="subheading mb-3">Encargado de Soporte y Computacion</div>
            <p>
              <ul>
                <li>Administrador de sistemas informáticos.</li>
                <li>Gestión de recursos informáticos.</li>
                <li>Supervisor de equipo de trabajo de trabajo y redes.</li>
                <li>Gestión de solicitudes de compras de recursos informáticos.</li>
              </ul>
            </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Mayo 2013 - Enero 2015</span>
          </div>
        </div>
      </div>
    </section>

    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="educacion">
      <div class="w-100">
        <h2 class="mb-5">Educacion  &amp; Certificaciones</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">TITULADO DE INGENIERO EN INFORMATICA</h3>
            <div class="subheading mb-3">Universidad Tecnologia de Chile</div>
            <!--<div>Computer Science - Web Development Track</div>
            <p>GPA: 3.23</p>-->
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Marzo 2005 - Diciembre 2010</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">IT Essentials</h3>
            <div class="subheading mb-3">Cisco Systems - Cisco Networking Academy</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Enero 2017 - Febrero 2017</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
          <h3 class="mb-0">Microsoft MTA: Security Fundamentals</h3>
          <div class="subheading mb-3">verify.certiport.com = xxxxx-xxxx</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Julio 2016</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
          <h3 class="mb-0">Routing &amp; Switching CCNA 1</h3>
          <div class="subheading mb-3">Cisco Systems - Cisco Networking Academy</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Enero 2016 - Febrero 2016</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
          <h3 class="mb-0">Microsoft MTA: Networking Fundamentals</h3>
          <div class="subheading mb-3">verify.certiport.com = xxxxx-xxxx</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Agosto 2015</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
          <h3 class="mb-0">Microsoft MTA: Software Development Fundamentals</h3>
          <div class="subheading mb-3">verify.certiport.com = xxxxx-xxxx</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Agosto 2015</span>
          </div>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="intranet">
      <div class="w-100">
        <h2 class="mb-5">Habilidades</h2>
        <div class="subheading mb-3">Lenguajes &amp; Herramientas de Programación</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <!--<li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>-->
          <!--<li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>-->
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <!--<li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>-->
          <!--<li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>-->
          <!--<li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>-->
          <!--<li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>-->
          <!--<li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>-->
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>
        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Unit Test &amp; Debugging</li>      
          <li>
            <i class="fa-li fa fa-check"></i>
            Desarrollo Agil &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <!--<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>-->

    <!--<hr class="m-0">-->

    <!--<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Google Analytics Certified Developer</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Mobile Web Specialist - Google Certification</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            2<sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - James Buchanan High School - Hackathon 2006</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            3<sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2005</li>
        </ul>
      </div>
    </section>-->


    @include('contacto.create')
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>
  <script>
    $("#lnkwhatsapp").click(function(){
      $("#lnkwhatsapp").attr({
        "href": "https://api.whatsapp.com/send?phone=56976400180",
        "target" : "_blank"
      });
    });

  </script>
</body>
</html>
