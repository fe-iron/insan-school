



<?php include_once'inc/head.php'; ?>
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
        <a href="admission_fee.php" class="active">Admission Fee</a>
        <a href="contact_list.php" class="list ">Contact us</a>
        <a href="gallery_list.php" class="list ">Gallery</a>
        <a href="alumini_list.php" class="list ">Alumini List</a>
        <a href="result_upload.php" class="list ">Result Upload</a>
        <a href="news_table_list.php">News & Updates</a>
        <a href="donation_list.php" class="">Donation </a>
        <a href="contact_person.php" class="">Contact Persons </a>
      </div>
    </div>
    <!-- large-screen-sidebar-ends -->
    <!-- small-screen-sidebar starts -->
    <div class="small-screen-sidebar">
      <div id="mySidenav" class="sidenav">
        <div class="logo bg-color-sidenav">
          <!--  <a href="index.php"><img src="images/wmk-final.png" height="60" width="100"><span class="float-right"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></span></a> -->
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
            <a href="admission_fee.php" class="active">Admission Fee</a>
            <a href="contact_list.php" class="list ">Contact us</a>
            <a href="gallery_list.php" class="list ">Contact us</a>
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

  <?php include_once'inc/header.php'; ?>

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="card my-5 shadow">
          <nav class="navbar navbar-light  venue-registration border-bottom">
            <a class="h4 text-dark font-weight-bold pt-2">Admission Fee List </a>
          </nav>

          <div class="card-body ">
            
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="border">
                  <tr>
                    <th scope="col" class="border-right text-center">SL No.</th>
                    <th scope="col" class="border-right text-center">Student Name</th>
                    <th scope="col" class="border-right text-center">Paid Fee ( INR )</th>
                    <th scope="col" class="border-right text-center">Operation</th>
                    
                    
                  </tr>
                </thead>
                <tbody> 
                  <?php

                  $con = mysqli_connect('localhost','root','','insan-school');
                  $query = "SELECT * FROM `std_payment`";
                  $run = mysqli_query($con, $query);

                  while($data = mysqli_fetch_assoc($run))
                  {
                    ?> <tr class="border-bottom">
                      <td class="border-right text-center border-left"> <?php echo $data['sl']; ?> </td>
                      <td class="border-right text-center"> <?php echo $data['student_name']; ?> </td>
                      <td class="border-right text-center"> <?php echo $data['amount']; ?> <span style="    font-size: 15px;position: absolute;margin-top: 1px;margin-left: 3px;">/-</span> </td>
                      <td class="border-right text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="delete_fee.php?id=<?php echo $data['sl'];?>" type="submit" class="btn btn-danger">
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