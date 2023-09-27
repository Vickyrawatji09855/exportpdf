<?php
 session_start();
 include_once('libs/fpdf.php');
 $conn = mysqli_connect("127.0.0.1:8111", "root", "", "note");

if(isset($_POST['submit'])){
  if(isset($_FILES['image'])){
     $files=$_FILES['image'];
     $fname=$files['name'];
     $destination = 'images/' . $fname;
  }
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $desc=$_POST['desc'];
  $checkbox= implode(',',$_POST['vehicle']);
  $radio=$_POST['fav'];


class PDF extends FPDF
{
function Header()
{
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Form Datails',1,0,'C');
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

$pdf = new PDF();

$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

$pdf->Text(20,50,'Name : ');
$pdf->Text(50,50,$name);

$pdf->Text(20,60,'Phone');
$pdf->Text(50,60,$phone);

$pdf->Text(20,70,'Description');
$pdf->Text(50,70,$desc);

$pdf->Text(20,80,'Image');
$pdf->Image($destination, 50, 74, 15, 0);

$pdf->Text(20,90,'Checkbox');
$pdf->Text(50,90,$checkbox);

$pdf->Text(20,100,'Radio');
$pdf->Text(50,100,$radio);



$pdf->Output('I','export.pdf');


}
?>
