<?php

//View: application/views/pdfreport.php
//var_dump($product_code);
if(isset($product_code)) {

	tcpdf();
	//$this->load->library('Pdf');
	$obj_pdf = new TCPDF('L', PDF_UNIT, 'A9', true, 'UTF-8', false);
	$obj_pdf->SetCreator(PDF_CREATOR);
	$title = "COD PRODUS 43";
	$obj_pdf->SetTitle($title);
	$obj_pdf->setPrintHeader(false);
	$obj_pdf->setPrintFooter(false);
	//$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
	//$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	//$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	//$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	//$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$obj_pdf->SetFont('helvetica', '', 12);
	$obj_pdf->setFontSubsetting(false);
	$obj_pdf->AddPage();

	ob_start();
		//// we can have any view part here like HTML, PHP etc
		//$content = ob_get_contents();
		$content = "<p>COD PRODUS</p>";
		$content .= "<p>$product_code</p>";
	ob_end_clean();
	$obj_pdf->writeHTML($content, true, false, true, false, '');

	//$obj_pdf->Output(base_url('files/output.pdf'), 'D');
	$obj_pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'evic/files/output.pdf', 'F');
	echo 'TRUE';
}

?>