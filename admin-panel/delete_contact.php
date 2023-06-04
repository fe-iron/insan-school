  <?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `contact` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:contact_list.php');




 ?>