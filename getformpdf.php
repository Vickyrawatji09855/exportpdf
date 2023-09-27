<?php
 session_start();
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
 
    if(isset($_POST['phone'])){
      
      $sql="Select `phone` from `pdfwa` where `phone`='$phone' ";
      $res=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($res);
      echo $count;
      if($count){
        $sql="DELETE FROM `pdfwa` WHERE `pdfwa`.`phone`='$phone' ";
        $res_del=mysqli_query($conn,$sql);
      }
        $sql="INSERT INTO `pdfwa` (`name`, `phone`, `description`, `image`, `checkbox`, `radio`) VALUES ('$name', '$phone', '$desc', '$destination', '$checkbox', '$radio') ";
        $res_ins=mysqli_query($conn,$sql);


    }
    
    
}

header("location:getformdatatopdf.php");

?>



