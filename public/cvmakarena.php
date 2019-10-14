<?php
//============================================================+
// File name   : curriculum.php
// Begin       : 2018-06-23
// Last Update : 2018-07-27
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
require_once dirname(__FILE__,2).'/route.php';
require_once Route::ruta.'/storage/tcpdf/tcpdf.php';
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
		$this->Cell(0, 15, 'Curriculum Vitae Makarena Ramos Malebran', 0, false, 'C', 0, '', 0, false, 'M', 'M');
		$this->write2DBarcode('www.davidaguilar.cl/cvmakarena.php', 'QRCODE,L', 170, 5, 50, 50, $style, 'N');
	}
	// Page footer
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
$pdf->SetTitle('Makarena Ramos Curriculum Vitae');
$pdf->SetSubject('Curriculum Vitae');
$pdf->SetKeywords('TCPDF, PDF, curriculum, vitae, makarena, ramos');

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
$pdf->Cell(0, 0, 'MAKARENA ELIZABETH RAMOS MALEBRAN', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', 'I', 14);
$pdf->Cell(0, 0, 'PSICOPEDAGOGA', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'PROFESOR DE EDUCACION BASICA', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'LICENCIADO EN EDUCACION', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', 'I', 12);
$pdf->Cell(0, 0, 'Diplomado en Psicomotricidad', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'cursando. Diplomado de Planificación y Desarrollo Curricular', 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, 'Rut: 16.592.874 - 1', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'Heroes de la Concepcion 2727 - Iquique', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'Telefono Móvil. (+56) 9 85230876', 0, 1, 'C', 0, '', 0);
$pdf->Cell(0, 0, 'makarena.ramos@gmail.com', 0, 1, 'C', 0, '', 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'ANTECEDENTES ACADEMICOS', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(140, 5, 'Universidad de Tarapacá', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2014', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Diplomado: Psicomotricidad Aplicado a la Educación', 0, 'L', 0, 1, '', '', true);

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, '', 0, 1, 'C', 0, '', 0);
$pdf->MultiCell(140, 5, 'Universidad Santo Tomas, sede Iquique', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2017', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cursando Diplomado de Planificación y Desarrollo Curricular', 0, 'L', 0, 1, '', '', true);

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, '', 0, 1, 'C', 0, '', 0);
$pdf->MultiCell(140, 5, 'Universidad de Tarapacá sede Iquique', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2007 - 2011', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Titulo: Psicopedagoga', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Registro Mineduc.', 0, 'R', 0, 1, '' ,'', true);

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, '', 0, 1, 'C', 0, '', 0);
$pdf->MultiCell(140, 5, 'Universidad de Tarapacá sede Iquique', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, '2007 - 2010', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Titulo: Profesor de Educación Básica', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, 'Titulo: Licenciado en Educación', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);

$resumen = '6 años de experiencia en Proyecto de Integración Escolar y en la actualidad me desempeño como Docente Universitaria de la carrera de Psicopedagogía y Supervisora de práctica de la carrera de Técnico en	Educación Especial.
						Soy Profesora Básica con experiencia en segundo Ciclo y Psicopedagoga con experiencia en Proyecto de Integración Escolar, atendiendo a niños y jóvenes con diferentes diagnósticos de tipo permanente y Transitorio. Además, trabaje colaborativamente con docente de segundo ciclo y Educación Media como también desarrollando escuelas para padres.';
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(10, 5, '', 0, 'R', 0, 0, '' ,'', true);
$pdf->MultiCell(160, 0, $resumen, 0, 'C', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'ANTECEDENTES LABORALES', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->MultiCell(120, 5, 'Instituto Profesional y CFT Santo Tomas', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, '2018 - a la fecha', 0, 'R', 0, 1, '' ,'', true);

$pdf->MultiCell(140, 5, 'Cargo: Docente Universitario de la carrera de Psicopedagogía.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(140, 5, 'Cargo: Docente Supervisora de practicas de la carrera de Técnico en Educación Especial.', 0, 'L', 0, 1, '', '', true);

// add a page
$pdf->AddPage();
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Corona School', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, '2012 - 2017', 0, 'R', 0, 1, '' ,'', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Psicopedagoga', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, 'Atención a alumnos con los siguientes diagnósticos', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Déficit atencional.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Dificultades específicas de aprendizaje.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Déficit intelectual leve.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Asperger.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Coeficiente intelectual limítrofe.', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(120, 5, 'Colegio Macaya', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(60, 5, '2011', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(140, 5, 'Iquique, Chile', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Cargo: Profesora Educación Básica', 0, 'L', 0, 1, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(180, 5, ' - Profesor Jefe de primer año A.', 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(180, 5, ' - Reemplazos de primer a octavo años en todos los subsectores.', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'OTROS ESTUDIOS Y CERTIFICACIONES', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->MultiCell(140, 5, 'Capacitación: Método Lemalin para la enseñanza de la lectura y la escritura.', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Octubre 2016', 0, 'R', 0, 1, '' ,'', true);
$pdf->Ln(5);
$pdf->MultiCell(180, 5, 'Asesoría Educacionales Lemalin', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Capacitación: Evaluación de los Aprendizajes', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Julio 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Asistencia Técnica Educativa MR Consultores', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Evaluación e intervención para el trastorno del espectro autista', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Abril 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->MultiCell(180, 5, 'Agrupación Asperger Iquique', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Dificultades Neuropsicológicas en niños con trastorno especifico del aprendizaje.', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Octubre 2013', 0, 'R', 0, 1, '' ,'', true);
$pdf->Ln(5);
$pdf->MultiCell(180, 5, 'Centro de Capacitación Mahuida', 0, 'L', 0, 1, '', '', true);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Niños con necesidades educativas especiales; estrategias para responder a la diversidad en el marco de la normativa Ministerial vigente.', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Noviembre 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->Ln(10);
$pdf->MultiCell(180, 5, 'Centro de Capacitación Mahuida', 0, 'L', 0, 1, '', '', true);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiCell(140, 5, 'Una mirada a la neurobiología de los trastornos del desarrollo de la niñez.', 0, 'L', 0, 0, '', '', true);
$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(40, 5, 'Abril 2015', 0, 'R', 0, 1, '' ,'', true);
$pdf->Ln(5);
$pdf->MultiCell(180, 5, 'Centro de Capacitación Mahuida.', 0, 'L', 0, 1, '', '', true);

// add a page
$pdf->AddPage();
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, 'PRACTICA PROFESIONAL', 0, 1, 'C', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, 'Practicas en Primer y Segundo ciclo en colegios municipales.', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, 'Practicas en Colegios Subvencionados', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, ' - Little Collage.', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, ' - Colegio Academia Tarapacá.', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, ' - Academia Iquique sede bulnes.', 0, 1, 'L', 0, '', 0);
$pdf->Cell(0, 0, ' - Colegio San Martin.', 0, 1, 'L', 0, '', 0);

$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 0, "REFERENCIAS", 0, 1, 'C', 0, '', 0);
$pdf->SetFont('helvetica', 'BI', 12);
$pdf->Cell(0, 0, "Jacqueline Williams Rodríguez", 0, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, "Directora, Colegio Corona School – Fono: +569 44632639 – Iquique", 0, 1, 'L', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'BI', 12);
$pdf->Cell(0, 0, "Karla Valenzuela Boguer", 0, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, "Coordinadora Proyecto de Integración – Colegio Corona School – Fono: +569 85489182", 0, 1, 'L', 0, '', 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'BI', 12);
$pdf->Cell(0, 0, "Verónica Araya Henriquez", 0, 1, 'L', 0, '', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 0, "Inspectora General, Colegio María Reina – Fono: +569 72942363 – Iquique", 0, 1, 'L', 0, '', 0);
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'I', 12);
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$pdf->Cell(0, 0, "Actualizado, ".$meses[date("n")-1]." del ".date("Y"), 0, 1, 'C', 0, '', 0);

$pdf->Output("makarena_ramos.pdf", "I");
?>
