<?php

class PDF extends FPDF
{
// Page header
function Header()
{
	$this->SetFont('Arial','I',12);
	// Logo
	$this->Cell(40,10,'Manawatu Flowers' ,0,0,'C');	
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Move to the right
	$this->Cell(20);
	// Title
	$this->Cell(80,10,'Auction Summary ' . date("d-m-Y"),1,0,'C');
	// Line break
	$this->Ln(20);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

?>