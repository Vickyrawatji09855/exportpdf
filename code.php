<?php
require 'vendor/autoload.php';
session_start();
$conn=mysqli_connect('127.0.0.1:8111','root','','note');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['import_file_btn'])){
    $_SESSION['check']="hello again";
    $allowed_ext= ['xls','csv','xlsx'];
    $fileName=$_FILES['import_file']['name'];
    $checking=explode(".",$fileName);
    $file_ext=end($checking);

    if(in_array($file_ext,$allowed_ext)){
        $targetPath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data= $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row){
            $id=$row['0'];
            $fname=$row['1'];
            $lname=$row['2'];
            $email=$row['3'];
            $checknotes="SELECT `id` from `notes` where `id`='$id' ";
            $check_result=mysqli_query($conn,$checknotes);
            if(mysqli_num_rows($check_result)>0){
                //Already exist
                $up_query="UPDATE `notes` SET `fname`='$fname', `lname`='$lname', `email`='$email' where `id`='$id' ";
                $up_result=mysqli_query($conn,$up_query);
                
            }else{
                //new record has to insert
                $in_query= "INSERT INTO `notes` (`id`,`fname`,`lname`,`email`) VALUES ('$id','$fname','$lname','$email') ";
                $in_result= mysqli_query($conn,$in_query);
            }
        }
        header('location: index.php');
    }else{
        $_SESSION['status']="Invalid File";
        header("Location: importform.php");
        exit(0);
    }
}
?>