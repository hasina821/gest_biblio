<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{

     function BasicTable($header, $data)
     {
         // En-tête
         foreach($header as $col)
             $this->Cell(40,7,$col,1);
         $this->Ln();
         // Données
         foreach($data as $row)
         {
               $this->Cell(40,6,$row['designation'],1);
               $this->Cell(40,6,$row['auteur'],1);
               $this->Cell(40,6,$row['date_edition'],1);
               $this->Cell(40,6,$row['date_pret'],1);
          $this->Ln();
         }
     }
     
}

$pdf = new PDF();
$header = array('DESIGNATION','AUTEUR','DATE_EDITION','DATE_PRET');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$list);
$pdf->Output();
?>