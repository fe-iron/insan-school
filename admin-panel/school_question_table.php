<?php include_once 'inc/head.php';
session_start();
include 'connection.php';
$con = OpenCon();

$query = "SELECT * FROM `prev_questions`";
$run = mysqli_query($con, $query);

?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>
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
        <a href="gallery_list.php" class=" ">Gallery</a>
        <a href="alumini_list.php" class="list">Alumini List</a>
        <a href="result_upload.php" class="list">Result Upload</a>
        <a href="news_table_list.php" class="">News & Updates</a>
        <a href="donation_list.php" class="">Donation </a>

        <a href="question_upload.php" class="active">Prev Question</a>
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
            <a href="contact_list.php" class="list">Contact us</a>
            <a href="gallery_list.php" class="">Gallery</a>
            <a href="alumini_list.php" class="list">Alumini List</a>
            <a href="result_upload.php" class="list">Result Upload</a>
            <a href="news_table_list.php" class="">News & Updates</a>
            <a href="donation_list.php" class="">Donation </a>

            <a href="question_upload.php" class="active">Prev Question Upload</a>
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
                <a class="h4 text-dark font-weight-bold pt-2">News And Updates </a>
                <form class="form-inline">
                  <a href="question_school.php" class="btn btn-primary">Upload Result</a>
                </form>
              </nav>

              <div class="card-body ">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="border">
                      <tr>
                        <th scope="col" class="border-right">Sl No.</th>
                        <th scope="col" class="border-right">Result</th>
                        <th scope="col" class="border-right">Date</th>
                        <th scope="col" class="border-right text-center">Opreation<!-- <a href="" class="btn btn-primary">Edit/Update</a> --></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      while ($data = mysqli_fetch_assoc($run)) {
                      ?>
                        <tr class="border-bottom">
                          <td class="border-right border-left"> <?php echo $data['sl']; ?> </td>
                          <td class="border-right"> <a href="../prev_questions/<?php echo $data['result']; ?>" download style="text-decoration: none; font-size: 15px; color: black"><?php echo $data['class']; ?> Class Result <span class="text-danger">(Click To Download)</span></a></td>
                          <td class="border-right"> <?php echo $data['year']; ?> </td>
                          <td class="border-right text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="delete_prev_questions.php?id=<?php echo $data['sl']; ?>" type="submit" class="btn btn-danger">
                                Delete
                              </a>
                            </div>
                          </td>
                        </tr> <?php
                            }
                              ?>
                    </tbody>
                  </table>
                </div>
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