<?php include_once 'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>


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
          $_SESSION['msg'] = "Successfully saved data in Database!";
        } else {
          echo "Returned rows are: " . $run->num_rows;
          $_SESSION['error'] = "OOPS, Data not inserted! Try again";
        }
      }
    } else {
      // echo $kyc;
      $_SESSION['error'] = 'Image Saving Failed! try again';
    }

    // move_uploaded_file($tempname, "../gallery_list/$imagesname");
  }



  ?>


  <section>


    <!-- large-screen-sidebarstarts -->
    <div class="sidebar">
      <div class="logo">
        <h3 class="">
          <img src="../images/logo.png">
        </h3>
      </div>
      <div class="" id="sidebar-here">
        <a href="index.php" class="list ">Admission Form List</a>
        <a href="admission_fee.php" class="">Admission Fee</a>
        <a href="contact_list.php" class="list">Contact us</a>
        <a href="gallery_list.php" class="active ">Gallery</a>
        <a href="alumini_list.php" class="list">Alumini List</a>
        <a href="result_upload.php" class="list ">Result Upload</a>
        <a href="news_table_list.php" class="">News & Updates</a>
        <a href="donation_list.php" class="">Donation </a>
        <a href="contact_person.php" class="">Contact Persons </a>
       
        <a href="question_upload.php" class="">Prev Question</a>
      </div>
    </div>

    <!-- large-screen-sidebar-ends -->





    <!-- small-screen-sidebar starts -->
    <div class="small-screen-sidebar">
      <div id="mySidenav" class="sidenav">
        <div class="logo bg-color-sidenav">
          <div class="d-flex bd-highlight">
            <div class=" bd-highlight">
              <h3 class="">
                <img src="../images/logo.png">
              </h3>
            </div>
            <div class="p-2 bd-highlight">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
          </div>
        </div>
        <div class="pt-0" id="sidebar-here">
          <div class="pt-3" id="sidebar-here">
            <a href="index.php" class="list ">Admission Form List</a>
            <a href="admission_fee.php" class="">Admission Fee</a>
            <a href="contact_list.php" class="list ">Contact us</a>
            <a href="gallery_list.php" class="active">Gallery</a>
            <a href="alumini_list.php" class="list">Alumini List</a>
            <a href="result_upload.php" class="list ">Result Upload</a>
            <a href="news_table_list.php" class="">News & Updates</a>
            <a href="donation_list.php" class="">Donation </a>
            <a href="contact_person.php" class="">Contact Persons </a>
           
        <a href="question_upload.php" class="">Prev Question</a>
          </div>
        </div>
      </div>
    </div>
    <!-- large-screen-sidebar-starts -->

    <div class="content">

      <?php include_once 'inc/header.php'; ?>




      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card my-5 shadow">
              <nav class="navbar navbar-light  venue-registration border-bottom">
                <a class="h4 text-dark font-weight-bold pt-2">Gallery List</a>
                <form class="form-inline">
                  <a href="gallery_image_list.php" class="btn btn-primary">View Image List</a>
                </form>
              </nav>

              <div class="card-body ">
                <div class="col-md-12">
                  <h4 class="mx-4 text-success"><?php
                                                if (isset($_SESSION['msg'])) {
                                                  echo $_SESSION['msg'];
                                                  unset($_SESSION['msg']);
                                                }
                                                ?>
                  </h4>
                  <h4 class="mx-4 text-danger"><?php
                                                if (isset($_SESSION['error'])) {
                                                  echo $_SESSION['error'];
                                                  unset($_SESSION['error']);
                                                }
                                                ?></h4>
                </div>

                <form method="post" enctype="multipart/form-data" action=" ">
                  <div class="form-row pt-3">
                    <div class="col-md mb-3">
                      <label for="Venue" class="font-weight-bold">Upload Image*</label>
                      <input type="file" name="photo" class="form-control" placeholder="Upload Image Here" id="venue-name" required="required">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md">
                      <label for="Venue" class="font-weight-bold">Image Description*</label>
                      <input type="text" name="img_description" class="form-control" placeholder="Entre Image Description" id="venue-name" required="required">
                    </div>
                    <div class="col-md">
                    </div>
                  </div>

                  <input class="btn btn-success mt-3" type="submit" value="Submit" name="submit">

                  <!-- <a href="" class="btn btn-primary my-3">Submit</a> -->
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <script type="text/javascript">
    function openNav() {
      document.getElementById("mySidenav").style.width = "200px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

</body>

</html>