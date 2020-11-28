<?php
require_once('assets/fpdf/fpdf.php');

class PDF extends FPDF
{

    // Cabecera de página
    public function Header()
    {
        $fechaActual = date('d-m-Y');

        // Logo


        // Arial bold 15
        $this->SetFont('Helvetica', 'B', 26);
        // Movernos a la derecha

        // Título
        $this->SetTextColor(50, 127, 178);
        $this->SetFillColor(255, 255, 255);
        $this->Ln(10);
        $this->Cell(60);
        $this->Cell(80, 10, 'Dream Store', 0, 0, 'C', true);

        $this->SetFont('Helvetica', '', 14);
        $this->SetTextColor(84, 84, 84);
        $this->SetFillColor(255, 255, 255);
        $this->Cell(50, 10, $fechaActual, 0, 1, 'R');
        $this->Ln(30);

        $this->SetFont('Arial', 'B', 20);
        $this->SetTextColor(50, 127, 178);
        $this->SetFillColor(255, 255, 255);
        $this->Cell(70, 10, 'Recibo de compra', 0, 1, 'C');

        $this->Image('assets/fpdf/logo.png', 10, 10, 30);



        // Salto de líne
        $this->Ln(15);
    }

    // Pie de página
    public function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('times', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
// Creación del objeto de la clase heredada
