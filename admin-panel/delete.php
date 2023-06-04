  <?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `news_update` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:news_table_list.php');




 ?>