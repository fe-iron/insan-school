<?php
session_start();

include 'admin-panel/connection.php';
$con = OpenCon();


$query = "SELECT * FROM `school_teachers`";
$run = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="inc/css/contact.css">
</head>

<body>

  <?php include_once 'inc/header.php'; ?>
  <?php include_once 'inc/navbar.php'; ?>


  <section class="padding-contact">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-white font-weight-bold">Contact Us</h2>
          <p class="text-white">We are here to listen You.</p>
          <a href="images/Admission-form/insan-school.pdf"><button type="button" class="btn btn-success">Apply Now</button></a>
          <a href="images/Admission-form/insan-degree-college.pdf" class="ml-2"><button type="button" class="btn btn-dark">Apply Now</button></a>

        </div>
      </div>
    </div>
  </section>



  <section class=" my-4 contact-detail">
    <div class="container detail">
      <div class="row py-4">
        <div class="col-md-7 border p-3 contact-person">
          <div>
            <h3 class="pb-3">Contact Persons</h3>
            <?php
                while ($data = mysqli_fetch_assoc($run)) { ?>
                  <p><?php echo $data['contact_name']; ?>: <b class="float-right"><?php echo $data['designation']; ?></b></p>      
                <?php
                }
            ?>
            <!-- <p>Director: <b class="float-right">DR. UMAR SHEES BHAI</b></p>
            <p>Secretary Taleemi Mission Corps: <b class="float-right">REZA SYED HAFEEZ BHAI</b></p>
            <p>Assistance Director: <b class="float-right">SHEFA SYED HAFEEZ BHAI</b></p>
            <p>Assistance Deputy Director: <b class="float-right">MD SHAUKAT ALI BHAI</b></p>
            <p>Assistance Deputy Director: <b class="float-right">A. SUBHAN RAHMANI BHAI</b></p>
            <p>Principal Insan Degree College: <b class="float-right">RAVINDRA SRI VASTAVA BHAI</b></p>
            <p>Headmistress Insan High School: <b class="float-right">SHAKIRA JAMAL BAJI</b></p>
            <p>In-charge Insan Primary School: <b class="float-right">NIGAR SYED HASAN BAJI</b></p>
            <p>In-charge Head Office Administrative Block: <b class="float-right">JAMIL AHMAD BHAI</b></p>

            <p>Finance In-charge: <b class="float-right">RAGHUVANSH PRASAD BHAI</b></p>
            <p>In-charge Insan Girls Senior Secondary School: <b class="float-right">MD JAMEEL AHMAD</b></p>
            <p>Co-ordinator CDE AMU ,Kishanganj: <b class="float-right">MD ABUZAR SIRAJI BHAI</b></p> -->
            <p class="text-center font-weight-bold">(GENERAL ENQUIRY 9798822319/9470706314)</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="bd-example py-5 pl-lg-4">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card">
                    <img src="images/contact-images/umar-shees-bhai1.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">DR. UMAR SHEES BHAI</h5>
                      <p>Director</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/reza-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text "> REZA SYED HAFEEZ BHAI</h5>
                      <p>Secretary Taleemi Mission Corps</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/shefa-bhai.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">SHEFA SYED HAFEEZ BHAI</h5>
                      <p>Assistance Director</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/shukat-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MD SHAUKAT ALI BHAI</h5>
                      <p>Assistance Deputy Director</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/subhan-bhai.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text "> A. SUBHAN RAHMANI BHAI</h5>
                      <p>Assistance Deputy Director</p>
                    </div>
                  </div>
                </div>



                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/shakira-jamal.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">SHAKIRA JAMAL BAJI</h5>
                      <p> Headmistress Insan High School</p>
                    </div>
                  </div>
                </div>


                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/ravindra-sir.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">RAVINDRA SRI VASTAVA BHAI</h5>
                      <p>Principal Insan Degree College</p>
                    </div>
                  </div>
                </div>


                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/nigar-baji.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">NIGAR SYED HASAN BAJI</h5>
                      <p>In-charge Insan Primary School</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/jamil-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text "> MD JAMEEL AHMAD BHAI</h5>
                      <p>In-charge Insan Girls Senior Secondary School</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/jameel-ahmaed.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MD. JAMIL AHMAD BHAI</h5>
                      <p>In-charge Head Office Administrative Block</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/prasad-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">RAGHUVANSH PRASAD BHAI</h5>
                      <p>Finance In-charge</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/abuzer-siraji.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MD ABUZAR SIRAJI BHAI</h5>
                      <p>Co-ordinator CDE AMU ,Kishanganj</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/md-shees.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MD SHEES BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/saba-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">SABA SYED HAFEEZ BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/mehta-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">DR. SURESH CHANDRA MEHTA BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/nigar-baji.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">NIGAR SYED HASAN BAJI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/shafiqu-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">SHAFIQUE NAIYER BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/ahad-bhai.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">ABDUL AHAD BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/mazahir-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MAZAHIRUL HASAN BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/jahangir-bhai.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MD JAHANGIR MALLICK BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/ashfaque-bhai.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MD ASHFAQUE BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/masoo-yusuf.jpeg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">MASOOD YUSUF BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card">
                    <img src="images/contact-images/shakoor-bhai.jpg" class=" card-img-top img-fluid" alt="">
                    <div class="card-body text-center">
                      <h5 class="card-text ">ABDUSH SHAKOOR BHAI</h5>
                      <p>Patron</p>
                    </div>
                  </div>
                </div>


              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End of row 1 -->
      <hr>
      <div class="row my-4 ">
        <div class="col-md">
          <h4 class="my-4">Way to Google map</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3582.728804178473!2d87.93892!3d26.10777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e516a60ac717f1%3A0x92b4522d44b1f6aa!2sSri+mobile!5e0!3m2!1sen!2sin!4v1562393460836!5m2!1sen!2sin" width="100%" height="450" frameborder="0" class="border" style="border:0" allowfullscreen></iframe>
          <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1660.0260877310484!2d87.94917359430812!3d26.09814985095253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e516bfd524e57f%3A0xd1be8e53c38ccf44!2sKishanganj!5e0!3m2!1sen!2sin!4v1559074648735!5m2!1sen!2sin" width="100%" height="450px;" class="border" style="border:0;" allowfullscreen></iframe> -->
        </div>

        <div class="col-md">
          <div>
            <h4 class="my-4">Do You Have Any Question?</h4>
            <form method="post" action="">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="name">Name </label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Contact Number</label>
                  <input type="tel" class="form-control" name="contact" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Your Query Subject" required>
              </div>
              <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Insan school,Kishangan Bihar" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Message</label>
                  <textarea name="message" class="form-control" cols="10" rows="5" required></textarea>
                </div>
              </div>
              <input type="submit" name="submit" class="btn btn-success mb-4" value="SUBMIT">
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <?php include_once 'inc/footer.php'; ?>
</body>

</html>