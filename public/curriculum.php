<?php
//============================================================+
// File name   : curriculum.php
// Begin       : 2018-06-23
// Last Update : 2018-06-30
//
// Description : Informe Curriculum Vitae for TCPDF class
//
// Author: David Villegas Aguilar
//
// (c) Copyright:
//               David Villegas A.
//               celular: 976400180
//               www.davidaguilar.cl
//               david.villegas.aguilar@gmail.com
//============================================================+
/**
 * Creado Curriculum Vitae PDF documento usando TCPDF
 * @package david
 * @abstract TCPDF - Curriculum Vitae
 * @author David Villegas A.
 * @since 2018-06-23
 */

require_once 'vendor/TCPDF/tcpdf.php';
date_default_timezone_set("America/Santiago");

class MYPDF extends TCPDF {
	public function Header() {
		//$image_file = K_PATH_IMAGES.'logo_example.jpg';
		//$this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$style = array(
			'border' => 2,
			'vpadding' => 'auto',
			'hpadding' => 'auto',
			'fgcolor' => array(0,0,0),
			'bgcolor' => false, //array(255,255,255)
			'module_width' => 1, // width of a single module in points
			'module_height' => 1 // height of a single module in points
		);

		$this->SetXY(30,15);
		$this->SetFont('helvetica', 'I', 8);
		$this->Cell(0, 15, 'Curriculum Vitae David Villegas Aguilar', 0, false, 'C', 0, '', 0, false, 'M', 'M');
		$this->write2DBarcode('www.dyi.cl', 'QRCODE,L', 170, 5, 50, 50, $style, 'N');
	}
	public function Footer() {
		$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$this->SetXY(30,-15);
		$this->SetFont('helvetica', 'I', 8);
		$this->Cell(0, 0,'Impreso: '.$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y H:i:s'), 0, false, 'L', 0, '', 0, false, 'T', 'M');
		$this->Cell(0, 0, 'Pagina '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
	}
}

$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('David Villegas Aguilar');
$pdf->SetTitle('Curriculum Vitae David Villegas');
$pdf->SetSubject('Curriculum Vitae');
$pdf->SetKeywords('TCPDF, PDF, curriculum, vitae, david');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/spa.php')) {
	require_once(dirname(__FILE__).'/lang/spa.php');
	$pdf->setLanguageArray($l);
}
// ---------------------------------------------------------
// add a page
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 0, 'DAVID MOISES VILLEGAS AGUILAR', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', 'I', 14);
$pdf->Cell(0, 0, 'INGENIERO EN INFORMATICA', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', 'I', 12);
$pdf->Cell(0, 0, 'Curso de Certificación CISCO CCNA1 y CCNA2', 0, 1, 'C', 0, '', 0);
// $pdf->Cell(0, 0, 'Certificado Microsoft Technology Associate MTA', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, 'Pagina web: www.dyi.cl', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'Rut: 15.979.446-6', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'Heroes de la Concepcion - Iquique', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'Telefono: (+56) 9 76400180', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'david.villegas.aguilar@gmail.com', 0, 1, 'C', 0, '', 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'ANTECEDENTES ACADEMICOS', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(140, 5, 'Universidad Tecnológica de Chile sede Arica', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2010', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Titulo Profesional: Ingeniero en Informática', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, '', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(140, 5, 'Instituto Profesional Santo Tomas sede Santiago', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2015 - 2017', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificación: Instructo IT Essencials, Ccna1 y Ccna2', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, '', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(140, 5, 'Instituto Profesional Santo Tomas sede Iquique', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2015 - 2016', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificación MTA: Software Development Fundamentals', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, 'Certificación MTA: Database Administration Fundamentals', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, 'Certificación MTA: Networking Fundamentals', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, 'Certificación MTA: Security Fundamentals', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);

$resumen = 'Experiencia profesional en desarrollo Informáticos basado en lenguaje PHP, JavaScript, CSS, Diseño de Base de Datos Mysql, Postgresql, con estudios y certificación MTA Microsoft. Además de planificar, coordinar y liderar proyectos, con capacidad de análisis para resolución de problemas y facilidad para trabajar en equipo. Experiencia de trabajo en Universidad Santo Tomas sede Iquique, estructurando desarrollo y realizando talleres de Pensamiento Computacional a la comunidad.';
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(10, 5, '', 0, 'R', 0, 0, '' ,'', true);
$pdf->MultiCell(160, 0, $resumen, 0, 'C', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'ANTECEDENTES LABORALES', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->MultiCell(120, 5, 'Hospital Dr. Ernerto Torres Galdames', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, 'Oct. 2017 - a la fecha', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Desarrollador y Programador de Sistemas', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, ' - Analista de Sistemas, orientado a procesos Back-end', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Desarrollador en Lenguaje Php y JavaScript', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Conocimiento en Framework para Php, JavaScript y diseño web', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Instituto Profesional Santo Tomas', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, 'Mar. 2015 - a la fecha', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Docente area Informatica y Computación', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, ' - Profesor en Catedra y Taller para ramos de Programación Orientada a Objetos.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Profesor en ramos de Diseño de Base de Datos.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Instructor Cisco curso certificado en IT Essencial, CCNA1 y CCNA2', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Proctor Microsoft con Membresia de Santo Tomas para Certificación MTA.', 0, 'L', 0, 1, '', '', true);

// add a page
$pdf->AddPage();
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Clinica Privada Playa Brava', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, 'Oct. 2016 - Oct. 2017', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(140, 5, 'Iquique, Chile', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Encargado de Informática, Programador y Conectividad', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, ' - Desarrollo y mantencion de sistemas informatico basado en Php, JavaScript, CSS.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Diseñar la estrategia y presupuesto informatico anual de la empresa.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Aplicar las politicas de seguridad y recuperación en equipo de conectividad.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Dirigir el desarrollo de las TIC, de acuerdo con los requerimientos del quehacer operativo de la empresa.', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Universidad de Tarapaca', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, 'May. 2013 - Ene. 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Encargado de Soporte y Computación', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, 'Administración de sistemas informáticos.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Gestión de recursos computacionales.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Supervisar a equipo de trabajo de soporte y redes.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Gestión en solicitudes de compras de recursos informaticos para area de soporte.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Planificación de trabajos y procesos administrativos.', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Colegio Alta Cordillera', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, 'Mar. 2012 - Dic. 2012', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Asistente Sala de Computacion y Enlace.', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, ' - Encargado de mantener laboratorio de computación y recursos informaticos.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Realizar plan de trabajo de mantención preventiva y correctiva a equipamiento.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Gestion de horarios de sala de enlace.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Supervisar actividades realizadas en sala de computación.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Colaborar en cualquier actividad relacionado a equipos tecnologicos.', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Universidad de Tarapaca', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, 'Jun. 2010 - Ene. 2011', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Encargado de Laboratorios.', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, ' - Supervisión de los recursos computacionales y equipos de la red local en el laboratorio del Departamento de Psicologia.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Soporte tecnico en Laboratorios de Computación.', 0, 'L', 0, 1, '', '', true);
// add a page
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'OTROS ESTUDIOS Y CERTIFICACIONES', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->MultiCell(140, 5, 'Certificado Microsoft MTA: Security Fundamentals', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Julio 2016', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Microsoft', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado IT Essentials', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Enero 2017', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Cisco Systems - Cisco Networking Academy', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Routing & Switching CCNA 1', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Enero 2016', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Cisco Systems - Cisco Networking Academy', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Co-creación, diseñamos con/para las personas.', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Julio 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'UOC - Universitat Oberta de Catalunya, e-Learning', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Microsoft MTA: Networking Fundamentals', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Agosto 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Microsoft', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Microsoft MTA: Software Development Fundamentals', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Agosto 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Microsoft', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Microsoft MTA: Database Fundamentals', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Agosto 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Microsoft', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Microsoft MTA: Windows Operating Fundamentals', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Agosto 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Microsoft', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Certificado Routing & Switching CCNA 2', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Enero 2016', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Empresa: Cisco Systems - Cisco Networking Academy', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'OTROS ANTECEDENTES', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, ' - Licencia de Conducir clase B', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, ' - Vehiculo Particular', 0, 1, 'L', 0, '', 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'REFERENCIAS', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', 'BI', 12);
$pdf->Cell(0, 0, 'Patricio Bulnes Opazo', 0, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, 'Administrador de Red Local, Universidad Tecnologica de Chile sede Arica', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, 'Fono: 2583900 - Arica', 0, 1, 'L', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'BI', 12);
$pdf->Cell(0, 0, 'Carlos Vergara Ramirez, Ingeniero en Informatica', 0, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, 'Jefe de Carrera Ingenieria en Informatica, Instituto Profesional Santo Tomas sede Iquique', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, 'Fono: 2512271 - Iquique', 0, 1, 'L', 0, '', 0);
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'I', 10);
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$pdf->Cell(0, 0, "Actualizado, ".$meses[date("n")-1]." del ".date("Y"), 0, 1, 'C', 0, '', 0);

$pdf->Output('davidvillegascv.pdf', 'I');
?>
