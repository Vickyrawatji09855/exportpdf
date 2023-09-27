


<?php

if(isset($_GET['submit'])){
    

include_once('libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Employee List',1,0,'C');
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

/* email code  */

// send email

/* pdf code    */
$conn = mysqli_connect("127.0.0.1:8111", "root", "", "vicky");
$display_heading = array('id'=>'ID', 'fname'=> 'FName', 'lname'=> 'LName','email'=> 'Email',);
 
$result = mysqli_query($conn, "SELECT `id`, `title`, `description`, `status`, `dest` FROM `category` ") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM `category` ");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
// foreach($header as $heading) {
// $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
// }
$i=0;
foreach($result as $row) {

$pdf->Ln();

foreach($row as $column)
if($i==4){
    $pdf->Image('stop.jpg', 0,0,30,20,'jpg');
}
$pdf->Cell(40,12,$column,1);
$i++;
}

$pdf->Output('D','export.pdf');

//get pdf file
$pdf_file = file_get_contents('export.pdf');

//save pdf file to another page
file_put_contents('pdf', $pdf_file);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
