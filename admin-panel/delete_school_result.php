 <?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `school_result` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:school_result_table.php');




 ?>