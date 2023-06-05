<?php include_once 'inc/head.php';
include 'connection.php';
$con = OpenCon();

$query = "SELECT * FROM `school_teachers`";
$run = mysqli_query($con, $query);


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // deletig record
    $query = "DELETE FROM `school_teachers` WHERE id=$id";

    mysqli_query($con, $query);

    header('location:contact_view_list.php');
}


// delete_contact_person
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
                <a href="contact_list.php" class="list ">Contact us</a>
                <a href="gallery_list.php" class=" ">Gallery</a>
                <a href="alumini_list.php" class="list ">Alumini List</a>
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
                        <a href="gallery_list.php" class="active ">Gallery</a>
                        <a href="alumini_list.php" class="list ">Alumini List</a>
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
                    <div class="col-md-11">
                        <div class="card my-5 shadow">
                            <nav class="navbar navbar-light  venue-registration border-bottom">
                                <a class="h4 text-dark font-weight-bold pt-2">Contact Person List </a>
                                <form class="form-inline">
                                    <a href="contact_person.php" class="btn btn-primary">Add New Person</a>
                                </form>
                            </nav>

                            <div class="card-body ">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="border">
                                            <tr>
                                                <th scope="col" class="border-right text-center">Contact Person</th>
                                                <th scope="col" class="border-right text-center">Designation</th>
                                                <th scope="col" class="border-right text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                            while ($data = mysqli_fetch_assoc($run)) {
                                            ?> <tr class="border-bottom">
                                                    <td class="border-right border-left text-center"><?php echo $data['contact_name']; ?></td>
                                                    <td class="border-right text-center"> <?php echo $data['designation']; ?> </td>
                                                    <td class="border-right text-center">
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="contact_view_list.php?id=<?php echo $data['id']; ?>" type="submit" name="delete_contact_person" class="btn btn-danger">
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