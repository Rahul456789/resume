<?php
require('fpdf/fpdf.php');

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$summary = $_POST['summary'];
$degree = $_POST['degree'];
$major = $_POST['major'];
$university = $_POST['university'];
$graduation_date = $_POST['graduation-date'];
$company = $_POST['company'];
$position = $_POST['position'];
$start_date = $_POST['start-date'];
$end_date = $_POST['end-date'];
$description = $_POST['description'];

// Create PDF object
$pdf = new FPDF();
$pdf->AddPage();

// Add resume content
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Phone: ' . $phone, 0, 1);
$pdf->Cell(0, 10, 'Address: ' . $address, 0, 1);
$pdf->Cell(0, 10, 'Summary: ' . $summary, 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Education', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Degree: ' . $degree, 0, 1);
$pdf->Cell(0, 10, 'Major: ' . $major, 0, 1);
$pdf->Cell(0, 10, 'University: ' . $university, 0, 1);
$pdf->Cell(0, 10, 'Graduation Date: ' . $graduation_date, 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Experience', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Company: ' . $company, 0, 1);
$pdf->Cell(0, 10, 'Position: ' . $position, 0, 1);
$pdf->Cell(0, 10, 'Start Date: ' . $start_date, 0, 1);
$pdf->Cell(0, 10, 'End Date: ' . $end_date, 0, 1);
$pdf->Cell(0, 10, 'Description: ' . $description, 0, 1);

// Output PDF
$pdf->Output();
?>