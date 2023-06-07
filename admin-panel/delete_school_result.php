 <?php

    include 'connection.php';
    $con = OpenCon();

    $id = $_GET['id'];

    $query = " DELETE FROM `school_result` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:school_result_table.php');




    ?>