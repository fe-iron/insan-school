<?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `donation` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:donation_list.php');




 ?>