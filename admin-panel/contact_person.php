<?php include_once 'inc/head.php';
session_start();

include 'connection.php';
$con = OpenCon(); ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>


    <?php
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $position = $_POST['position'];

        $query = "INSERT INTO `school_teachers`( `contact_name`, `designation`) VALUES ('$name','$position')";
        $run = mysqli_query($con, $query);

        if ($run === TRUE) {
            $_SESSION['msg'] = "Successfully Inserted in Database!";
        } else {
            $_SESSION['error'] = "OOPS, Data not inserted! Try again";
        }
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
                <a href="gallery_list.php" class="list">Gallery</a>
                <a href="alumini_list.php" class="list">Alumini List</a>
                <a href="result_upload.php" class="list ">Result Upload</a>
                <a href="news_table_list.php" class="">News & Updates</a>
                <a href="donation_list.php" class="">Donation </a>
                <a href="contact_person.php" class="active">Contact Persons </a>
                
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
                        <a href="gallery_list.php" class="">Gallery</a>
                        <a href="alumini_list.php" class="list">Alumini List</a>
                        <a href="result_upload.php" class="list ">Result Upload</a>
                        <a href="news_table_list.php" class="">News & Updates</a>
                        <a href="donation_list.php" class="">Donation </a>
                        <a href="contact_person.php" class="active">Contact Persons </a>
                        
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
                                <a class="h4 text-dark font-weight-bold pt-2">Contact Persons</a>
                                <form class="form-inline">
                                    <a href="contact_view_list.php" class="btn btn-primary">View contact List</a>
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

                                <form method="post">
                                    <div class="form-row pt-3">
                                        <div class="col-md mb-3">
                                            <label for="Venue" class="font-weight-bold">Contact Person Name*</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter name Here" required="required">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md">
                                            <label for="Venue" class="font-weight-bold">Person Designation*</label>
                                            <input type="text" name="position" class="form-control" placeholder="Entre Designation" required="required">
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