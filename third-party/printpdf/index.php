<?php
require_once('pdflayer.class.php');
$html2pdf = new pdflayer();
$url = 'https://sattvacfolaravel.myfilings.in/admin/show-invoice/NTA=';
$html2pdf->set_param('document_url',$url);
//start the conversion
$html2pdf->convert();
//display the PDF file
$html2pdf->display_pdf();