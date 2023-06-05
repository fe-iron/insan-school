<?php include_once'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>



  <?php 

  $con = mysqli_connect('localhost','root','','insan-school');


  if (isset($_POST['submit'])) {

    $id=$_GET['id'];
    $news= $_POST['news'];
    $news_date= $_POST['news_date'];

    $query="UPDATE `news_update` SET `sl`='$id',`news`='$news',`news_date`='$news_date' WHERE sl=$id ";


    $run=mysqli_query($con,$query);

   
    header('location:news_table_list.php');
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
       <a href="gallery_list.php" class="list ">Gallery</a>
       <a href="alumini_list.php" class="list">Alumini List</a>
       <a href="result_upload.php" class="list ">Result Upload</a>
       <a href="news_table_list.php" class="active">News & Updates</a>
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
       <a href="contact_list.php" class="list active">Contact us</a>
       <a href="gallery_list.php" class="list ">Gallery</a>
       <a href="alumini_list.php" class="list active">Alumini List</a><a href="resul_upload.php" class="list ">Result Upload</a>
       <a href="news_table_list.php" class="active">News & Updates</a>
       <a href="donation_list.php" class="">Donation </a>
       <a href="contact_person.php" class="">Contact Persons </a>
       
        <a href="question_upload.php" class="">Prev Question</a>
     </div>
   </div>
 </div>
</div>
<!-- large-screen-sidebar-starts -->

<div class="content">

  <?php include_once'inc/header.php'; ?>

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card my-5 shadow">
          <nav class="navbar navbar-light  venue-registration border-bottom">
            <a class="h4 text-dark font-weight-bold pt-2">News And Updates </a>
          </nav>

          <div class="card-body ">
            <div class="col-md-12">

            </div>

            <form action="" method="post">
              <div class="form-row pt-3">
                <div class="col-md mb-3">
                  <label for="Venue" class="font-weight-bold">Enter News and Updates*</label>
                  <input type="text" name="news" class="form-control" placeholder="Enter News" id="venue-name" required="required">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md">
                  <label for="Venue" class="font-weight-bold">Enter News Date*</label>
                  <input type="date" name="news_date" class="form-control" placeholder="Enter News Date" id="venue-name" required="required">
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

