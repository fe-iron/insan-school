  <?php

  // include 'connection.php';
  // $con = OpenCon();

  // $id = $_GET['id'];

  // $query = " DELETE FROM `gallery` WHERE sl=$id ";

  // $run = mysqli_query($con, $query);

  // if ($run === TRUE) {
  //   $_SESSION['msg'] = "Successfully Deleted!";
  // } else {
  //   $_SESSION['error'] = "OOPS, Image not Deleted! Try again";
  // }
  // header('location:gallery_image_list.php');




  ?>



<?php

include 'connection.php';
$con = OpenCon();

if (isset($_POST['submit'])) {

  $img1 = $_FILES['photo']['name'];
  // $tempname = $_FILES['photo']['tmp_name'];

  $target_dir = "../gallery_list/";

  // Valid file extensions
  $extensions_arr = array("jpg", "jpeg", "png");

  //saving  image
  $img1 = $_FILES['photo']['name'];
  // echo $_FILES['photo']['name'];
  $target_file1 = $target_dir . basename($_FILES['photo']['name']);
  // Select file type
  $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));


  // Check extension
  if (in_array($imageFileType1, $extensions_arr)) {
    // Upload file
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_dir . $img1)) {
      // Insert record
      $description = $_POST["img_description"];

      $query = "INSERT INTO `gallery`( `img`, `Description`) VALUES ('$img1','$description')";
      $run = mysqli_query($con, $query);
      if ($run === TRUE) {
        echo "Successfully saved data in Database!";
      } else {
        echo "Returned rows are: " . $run->num_rows;
        echo "OOPS, Data not inserted! Try again";
      }
    }
  } else {
    // echo $kyc;
    echo 'Image Saving Failed! try again';
  }

  // move_uploaded_file($tempname, "../gallery_list/$imagesname");
}



?>