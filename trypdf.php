<?php

include_once('libs/fpdf.php');
$conn = mysqli_connect("127.0.0.1:8111", "root", "", "vicky");
// Create a new FPDF object
$pdf = new FPDF();

// Set the document properties

$pdf->SetTitle('Table Data with Image');
$pdf->SetAuthor('Bard');
$pdf->SetCreator('Bard');

// Add a page
$pdf->AddPage();

// Set the font and size
$pdf->SetFont('Arial', 'B', 16);

// Print the header
$pdf->Image('STAR.JPG', 0, 0, -300);

$pdf->Cell(80);
$pdf->Cell(40, 10, 'Table Data with Image', 'B', 2, 'C');
$pdf->Ln();

// Set the font and size
$pdf->SetFont('Arial', 'B', 12);

// Create the table header
$pdf->Cell(40, 10, 'Name', 1, 0, 'L');
$pdf->Cell(40, 10, 'Image', 1, 0, 'L');
$pdf->Ln();

// Get the data from the database
$sql = "SELECT `title`, `dest` FROM `category` ";
$result = $conn->query($sql);
// $pdf->Image('STAR.JPG', 10, 10, -300);
// Loop through the data and print each row to the PDF
while ($row = $result->fetch_assoc()) {
    // Print the name
    $pdf->Cell(40, 10, $row['title'], 1, 0, 'L');
    // Print the image
    // $pdf->Image($row['dest'], 0, 0, 20, 20);
   
    $pdf->Ln();
}
// Close the PDF file
$pdf->Output('table_data_with_image.pdf', 'I');
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
