<?php include_once 'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>



  <?php

  $con = mysqli_connect('localhost', 'root', '', 'insan-school');
  include 'connection.php';
  $con = OpenCon();

  if (isset($_POST['submit'])) {

    $id = $_GET['id'];

    $description = $_POST["img_description"];

    $query = "UPDATE `gallery` SET `sl`='$id',`Description`='$description' WHERE sl=$id ";


    $run = mysqli_query($con, $query);


    if ($run === TRUE) {
      $_SESSION['msg'] = "Successfully Deleted!";
    } else {
      $_SESSION['error'] = "OOPS, Image not Deleted! Try again";
    }
    header('location:gallery_image_list.php');
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
      </div>
    </div>

    <!-- large-screen-sidebar-ends -->





    <!-- small-screen-sidebar starts -->
    <div class="small-screen-sidebar">
      <div id="mySidenav" class="sidenav">
        <div class="logo bg-color-sidenav">

          <!--  <a href="index.php"><img src="images/wmk-final.png" height="60" width="100"> <span class="float-right"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></span></a> -->

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
            <a href="gallery_list.php" class="list active">Gallery</a>
            <a href="alumini_list.php" class="list ">Alumini List</a>
            <a href="result_upload.php" class="list ">Result Upload</a>
            <a href="news_table_list.php" class="">News & Updates</a>
            <a href="donation_list.php" class="">Donation </a>
            <a href="contact_person.php" class="">Contact Persons </a>
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
                <a class="h4 text-dark font-weight-bold pt-2">Edit Gallery List</a>
              </nav>

              <div class="card-body ">
                <div class="col-md-12">

                </div>

                <form action="" method="post">

                  <div class="form-row">
                    <div class="col-md">
                      <label for="Venue" class="font-weight-bold">Image Description*</label>
                      <input type="text" name="img_description" class="form-control" placeholder="Entre Image Description" id="venue-name" required="required">
                    </div>
                  </div>

                  <input class="btn btn-success mt-3" type="submit" value="Update" name="submit">
              </div>



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