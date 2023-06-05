



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
        <a href="admission_fee.php" class="">Admission Fee</a>
        <a href="contact_list.php" class="list ">Contact us</a>
        <a href="gallery_list.php" class="list ">Gallery</a>
        <a href="alumini_list.php" class="list active">Alumini List</a>
        <a href="result_upload.php" class="list ">Result Upload</a>
        <a href="news_table_list.php">News & Updates</a>
        <a href="donation_list.php" class="">Donation </a>
        <a href="contact_person.php" class="">Contact Persons </a>
        
       <a href="question_upload.php" class="">Prev Question</a>
     </div>
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
            <a href="admission_fee.php" class="">Admission Fee</a>
            <a href="contact_list.php" class="list ">Contact us</a>
            <a href="gallery_list.php" class="list ">Gallery</a>
            <a href="alumini_list.php" class="list active">Alumini List</a>
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
    <div class="content"> <?php include_once'inc/header.php'; ?> <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-11">
            <div class="card my-5 shadow">
              <nav class="navbar navbar-light  venue-registration border-bottom">
                <a class="h4 text-dark font-weight-bold pt-2">Insan School/College Alumin Directory </a>
              </nav>
              <div class="card-body alumini_list"> 
                <?php

                        $con = mysqli_connect('localhost','root','','insan-school');
                        $query = "SELECT * FROM `alumini`";
                        $run = mysqli_query($con, $query);

                        while($data = mysqli_fetch_assoc($run))
                        {
                            ?> 
                <div class="card mb-3">
                  <div class="row no-gutters p-0">
                    <div class="col-md-4 card-image p-3">
                      <img src="../alumini/<?php echo $data['photo'];?>" class="" alt="..." style="width:250px;height: auto;">
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <p>Name: <span class="float-right"> <?php echo $data['name']; ?> </span>
                        </p>
                        <p>Father's Name: <span class="float-right"> <?php echo $data['fname']; ?> </span>
                        </p>
                        <p>Profession: <span class="float-right"> <?php echo $data['profession']; ?> </span>
                        </p>
                        <p>Duration of Study From: <span class="float-right"> <?php echo $data['durationDatefrm']; ?> </span>
                        </p>
                        <p>Duration of Study To: <span class="float-right"> <?php echo $data['durationDateto']; ?> </span>
                        </p>
                        <p>Class From: <span class="float-right"> <?php echo $data['classfrm']; ?> </span>
                        </p>
                        <p>Class To: <span class="float-right"> <?php echo $data['classto']; ?> </span>
                        </p>
                        <p>Address: <span class="float-right"> <?php echo $data['native_place']; ?> </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div> 
                <?php
                 }
                 ?> </div>
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