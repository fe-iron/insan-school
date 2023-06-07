<?php include_once 'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>

  <?php

  include 'connection.php';
  $con = OpenCon();

  if (isset($_POST['submit'])) {
    $class = $_POST['class'];
    $year = $_POST['year'];
    $result = $_FILES['result']['name'];
    $tempresult = $_FILES['result']['tmp_name'];
    move_uploaded_file($tempresult, "../result_file/$result");
    $query = "INSERT INTO `school_result`(`class`, `result`, `year`) VALUES ('$class','$result','$year')";

    $run = mysqli_query($con, $query);
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
      <div class="pt-3" id="sidebar-here">
        <a href="index.php" class="list ">Admission Form List</a>
        <a href="admission_fee.php" class="">Admission Fee</a>
        <a href="contact_list.php" class="list ">Contact us</a>
        <a href="gallery_list.php" class="list ">Gallery</a>
        <a href="alumini_list.php" class="list ">Alumini List</a>
        <a href="result_upload.php" class="list active">Result Upload</a>
        <a href="news_update.php" class="list">News & Updates</a>
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
            <a href="gallery_list.php" class="list ">Gallery</a>
            <a href="alumini_list.php" class="list ">Alumini List</a>
            <a href="result_upload.php" class="list active">Result Upload</a>
            <a href="news_update.php" class="list ">News & Updates</a>
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
                <a class="h4 text-dark font-weight-bold pt-2">Upload School Results </a>
                <form class="form-inline">
                  <a href="school_result_table.php" class="btn btn-primary">View Result List</a>

                </form>
              </nav>

              <div class="card-body ">
                <div class="col-md-12">
                  <!--  -->
                </div>

                <form enctype="multipart/form-data" method="post">
                  <div class="form-row pt-3">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Class*</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="class">
                          <option selected="">Select Class</option>
                          <option value="1">1 Class</option>
                          <option value="2">2 Class</option>
                          <option value="3">3 Class</option>
                          <option value="4">4 Class</option>
                          <option value="5">5 Class</option>
                          <option value="6">6 Class</option>
                          <option value="7">7 Class</option>
                          <option value="8">8 Class</option>
                          <option value="9">9 Class</option>
                          <option value="10">10 Class</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md mb-3">
                      <label for="Contact" class="font-weight-bold">Selecct Pdf Fele*</label>
                      <input type="file" name="result" class="form-control" placeholder="Select File" id="Contact-number" required="required">
                    </div>
                    <div class="col-md mb-3">
                      <label for="Email" class="font-weight-bold">Year*</label>
                      <input type="date" name="year" class="form-control" placeholder="Enter Year" id="email-id" required="required">
                    </div>


                  </div>

                  <input class="btn btn-success my-2" type="submit" value="Submit" name="submit">
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