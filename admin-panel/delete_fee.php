<?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `std_payment` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:admission_fee.php');




 ?>