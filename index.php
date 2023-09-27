<?php
include_once("connection.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$sql="SELECT * FROM `notes` ";
$res=mysqli_query($connString,$sql);
$count=mysqli_num_rows($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Example of PDF file using PHP and MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
 
</head>
<body>
<div class="container" style="padding-top:50px">
<h2>Generate PDF file from MySQL Using PHP</h2>
<form class="form-inline" method="post" action="generate_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate PDF</button>
</form>

<form class="form-inline" method="post" action="generate_exl.php">
<button type="submit" id="pdf" name="generate_exl" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate Excel</button>
</form>

<form class="form-inline" method="post" action="phpmail.php">
<button type="submit" id="pdf" name="generate_exl" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
send mail</button>
</form>

</fieldset>
</div>

<div class="table " style="margin-top: 10px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
    
        while($row=mysqli_fetch_assoc($res)){
            echo ' <tr>';
            echo'<th scope="row">'.$row['id'].'</th>';
            echo '<td>'.$row['fname'].'</td>';
            echo '<td>'.$row['lname'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '</tr>';
        }
?>

  </tbody>
</table>
</div>
</body>
</html>

