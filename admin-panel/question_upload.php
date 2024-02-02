<?php include_once 'inc/head.php'; ?>
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
                <a href="alumini_list.php" class="list ">Alumini List</a>
                <a href="result_upload.php" class="list ">Result Upload</a>
                <a href="news_update.php" class="list">News & Updates</a>
                <a href="donation_list.php" class="">Donation </a>
                <a href="contact_person.php" class="">Contact Persons </a>

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
                        <a href="contact_list.php" class="list ">Contact us</a>
                        <a href="gallery_list.php" class="list ">Gallery</a>
                        <a href="alumini_list.php" class="list ">Alumini List</a>
                        <a href="result_upload.php" class="list">Result Upload</a>
                        <a href="news_update.php" class="list ">News & Updates</a>
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
                    <div class="col-md-7">
                        <div class="card my-5 shadow">
                            <nav class="navbar navbar-light  venue-registration border-bottom">
                                <a class="h4 text-dark font-weight-bold pt-2">Previous Year Questions Upload </a>
                            </nav>
                            <div class="card-body ">
                                <div class="col-md-12 text-center">
                                    <!--  -->
                                    <a href="question_school.php" class="btn btn-success mr-3">
                                        Upload School Questions
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        Upload College Questions
                                    </a>
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