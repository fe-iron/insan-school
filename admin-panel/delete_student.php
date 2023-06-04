  <?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `school_admission_form` WHERE Sl_No=$id ";

    mysqli_query($con, $query);

    header('location:student_admission_list.php');




 ?>