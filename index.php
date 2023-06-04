



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
    <link rel="stylesheet" type="text/css" href="inc/css/style.css">
  </head>
  <body> <?php include_once 'inc/header.php'; ?> <?php include_once 'inc/navbar.php'; ?> <section class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li><li data-target="#carouselExampleIndicators" data-slide-to="2"></li></ol> -->
        <div class="carousel-inner carousel-fade">
          <div class="carousel-item active">
            <img src="images/carousel/s1.jpg" class="d-block w-100" alt="..." class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="images/carousel/s2.jpg" class="d-block w-100" alt="..." class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="images/carousel/s3.jpg" class="d-block w-100" alt="..." class="img-fluid">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- End of Slider -->
    <!-- <div class="moving-links bg-warning text-white">
      <marquee direction="scroll"  onmouseover="stop()" onmouseout="start()">
        <ul class="list-inline mt-2">
          <li class="list-inline-item pl-5">
            <a href="http://biharboardonline.bihar.gov.in/" class="text-white">Bihar School Examination board</a>
          </li>
          <li class="list-inline-item pl-5">
            <a href="http://www.mmhapu.bih.nic.in/" class="text-white">Moulana Mazharul haque University</a>
          </li>
          <li class="list-inline-item pl-5">
            <a href="www.cdeamu.ac.in/" class="text-white">Aligarh Muslim University</a>
          </li>
        </ul>
      </marquee>
    </div> -->
    <section class="pt-5 pb-2 important-notice" id="notice">
      <div class="container">
        <div class="row">
          <div class="col-md mb-3">
            <div class="card" style="">
              <div class="card-header">
                <h4 class="mb-0">News & Updates</h4>
              </div>
              <div class="card-body">
                <marquee direction="up" onmouseover="stop()" onmouseout="start()" height="150">
                  <ol class="mx-4">
                    <?php

                        $con = mysqli_connect('localhost','root','','insan-school');
                        $query = "SELECT * FROM `news_update`";
                        $run = mysqli_query($con, $query);

                        while($data = mysqli_fetch_assoc($run))
                        {
                            ?> 

                           <li style="margin-top: 8px;"> 
                                <?php echo $data['news']; ?> <span style="color: orange;">(  <?php echo $data['news_date']; ?>  )</span>
                    </li> 
                
                <?php
                 }
                 ?>
                    
                  </ol>
                </marquee>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>
    <section class="features text-center">
      <h2 class=" mt-5">Our Features</h2>
      <p class="mx-4 card-text">
        <b>Insan Banege Hum Insan Banayenge Jeene Ke Tareeqe Ab Sekhenge Sikhayenge.</b>
      </p>
      <div class="container">
        <div class="row">
          <div class="col-md  pb-3">
            <div class="card">
              <img src="images/home/humanity.jpeg" class="img-fluid my-2">
              <h5 class="card-title">Education and Humanity </h5>
              <div class="card-body text-justify">
                <p class="card-text">“…Education is not just bookish knowledge, philosophies, and theories. Education should be action and community oriented. It should provide peaceful solutions to social and global challenges and bring remedies to many of their ills. It should be a means to bring compassion and understanding, integrations and equalities, social justice and equal opportunities, reform and uplift. <br> Therefore, education should be a means to serve others. Therefore, education should be a model to bring about a better, kinder, and just world.” Therefore, education should be a means to serve others. Therefore, education should be a model to bring about a better, kinder, and just world.” <b>Syed Bhai (Padma Shri Dr. Syed Hasan), Founder</b>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md  pb-3">
            <div class="card">
              <img src="images/home/smiling.jpeg" class="img-fluid my-2">
              <h5 class="card-title">Information</h5>
              <div class="card-body text-justify">
                <p class="card-text">The founder , managerial and parental body of all the above institutions is Taleemi Mission Corps Shiksha nagar kishanganj, a registered society.</p>
                <p class="card-text">The Taleemi Mission Corps and its running institutions is the Minority Certified by National Commission for Minority Educational Institutions , New Delhi</p>
              </div>
            </div>
          </div>
          <div class="col-md  pb-3">
            <div class="card">
              <img src="images/home/sayed-bhai-img.jpeg" class="img-fluid my-2">
              <h5 class="card-title">Philosophy of Work </h5>
              <p class="text-center card-text">
                <b>(Dr. Syed Hasan Bhai)</b>
              </p>
              <div class="card-body text-justify">
                <p class="card-text">“Our institution is community centered. We believe in total development. We feel that education should lead to self-development. This development should take place by means of self-help and self-reliance. In a way, education means independence. It should make us free from others. We should become capable of running our own affairs without the help of others as far as it is possible. </p>
                <p class="card-text">Hence, we the educators are here to facilitate and to assist this process of development.”</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main d-none d-lg-block d-xl-block">
      <div class="container">
        <div class="row">
          <section class="educational">
            <h2 class="text-center my-5">We Provide Educational Solution</h2>
            <div class="card-section">
              <div class="card-deck px-4 py-3">
                <div class="card my-2 ">
                  <img src="images/department/insan-primary1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="btn btn-warning btn-block">Insan Primary School</h5>
                    <p class="card-text text-justify pt-3">Students can take admission from nursery to class III, there are special teachers for the kids. Students fall under this category are considered in Insan Primary School. PG and Prep students are studies under special surveillance of teachers.</p>
                  </div>
                </div>
                <div class="card my-2">
                  <img src="images/department/insan-inter.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="btn btn-warning btn-block"> Insan Middle School</h5>
                    <p class="card-text text-justify pt-3">Students can take admission from class IV to class VIII, there are well qualified teachers for the middle school. This is the time when the students are learning stuffa that will take them to the next level. So after accordance we have the best teachers of Kishanganj.</p>
                  </div>
                </div>
                <div class="card my-2">
                  <img src="images/department/insan-high-school.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="btn btn-warning btn-block">Insan High School</h5>
                    <p class="card-text text-justify pt-3">Students can take admission in class IX and X, students of the above classes are considered as high school students.The best and experienced teachers guide the students. It is affiliated with Bihar Board. </p>
                  </div>
                </div>
              </div>
              <!-- End of card deck 1 -->
              <div class="card-deck px-4 py-3">
                <div class="card my-2">
                  <img src="images/department/insan-high.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="btn btn-warning btn-block">Insan Girls Senior Secondary School</h5>
                    <p class="card-text text-justify pt-3">A section where only girls can study from ix to xii in all three streams Arts, Science and Commerce.Very soon to start with Bihar Board.</p>
                  </div>
                </div>
                <div class="card my-2">
                  <img src="images/department/insan-degree.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="btn btn-warning btn-block">Insan Inter College</h5>
                    <p class="card-text text-justify pt-3">Insan Inter College is affiliated to Bihar Board with all three streams of Arts,Science and Commerce.</p>
                  </div>
                </div>
                <div class="card my-2">
                  <img src="images/department/degree-collgege.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="btn btn-warning btn-block">Insan Degree College</h5>
                    <p class="card-text text-justify pt-3">Insan Degree College is affiliated to Maulana Mazharul Haque Arabic and Persian University, Patna. We offers regular courses of B.A., B. Com, B.B.A., B.C.A., Panchayati Raj, Accountancy, B.L.I.S., B.J.M.C.</p>
                  </div>
                </div>
              </div>
              <!-- End of card deck 2 -->
            </div>
            <!-- End of card section -->
          </section>
          <!-- End of educational section -->
        </div>
        <!-- End of col-md-3 main-->
      </div>
      <!-- End of row main -->
      <!-- End of conatiner fluid main -->
    </section>
    <section class="main1 d-lg-none d-xl-none">
      <h2 class="text-center my-5">We Provide Educational Solution</h2>
      <div class="container educational">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 ">
              <img src="images/department/insan-primary1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan Primary School</h5>
                <p class="card-text text-justify pt-3">Students can take admission from nursery to class III, there are special teachers for the kids. Students fall under this category are considered in Insan Primary School. PG and Prep students are studies under special surveillance of teachers.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/insan-inter.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block"> Insan Middle School</h5>
                <p class="card-text text-justify pt-3">Students can take admission from class IV to class VIII, there are well qualified teachers for the middle school. This is the time when the students are learning stuffa that will take them to the next level. So after accordance we have the best teachers of Kishanganj.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/insan-high-school.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan High School</h5>
                <p class="card-text text-justify pt-3">Students can take admission in class IX and X, students of the above classes are considered as high school students.The best and experienced teachers guide the students. It is affiliated with Bihar Board. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/ungraded.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan ungraded primary school</h5>
                <p class="card-text text-justify pt-3">This section are for those students who are of any age group and wants to continue their study and if they haven't started yet then it is a good chance for them to study at no fee i.e. , free of cost.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/insan-high.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan Girls Senior Secondary School</h5>
                <p class="card-text text-justify pt-3">A section where only girls can study from ix to xii in all three streams Arts, Science and Commerce.Very soon to start with Bihar Board.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/insan-degree.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan Inter College</h5>
                <p class="card-text text-justify pt-3">Insan Inter College is affiliated to Bihar Board with all three streams of Arts,Science and Commerce.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/degree-collgege.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan Degree College</h5>
                <p class="card-text text-justify pt-3">Insan Degree College is affiliated to Maulana Mazharul Haque Arabic and Persian University, Patna. We offers regular courses of B.A., B. Com, B.B.A., B.C.A., Panchayati Raj, Accountancy, B.L.I.S., B.J.M.C.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2">
              <img src="images/department/talimi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="btn btn-warning btn-block">Insan Idara Taleemi Point</h5>
                <p class="card-text text-justify pt-3">Here different types of training and social service programs are held time to time to introduce new opportunities and social awareness. So Insan Public School organizes such type of program to let their students and staffs aware of the new and useful things.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonial my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-center m-auto">
            <h2 class="pt-5">OFFICIAL PERSONS</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators ">
                <li data-target="#myCarousel" data-slide-to="0" class="active">
                  <i class="fas fa-circle"></i>
                </li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
                <li data-target="#myCarousel" data-slide-to="10"></li>
                <li data-target="#myCarousel" data-slide-to="11"></li>
              </ol>
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner">
                <div class="item carousel-item active">
                  <div class="img-box">
                    <img src="images/umar-shees-bhai.jpeg" alt="">
                  </div>
                  <p class="overview pt-4">
                    <b>Dr. UMAR SHEES BHAI</b>
                  </p>
                  <p>Director </p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/reza-bhai.jpg" alt="">
                  </div>
                  <p class="overview pt-4">
                    <b> REZA SYED HAFEEZ BHAI</b>
                  </p>
                  <p>Secretary Taleemi Mission Corps</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/shefa-bhai.jpeg" alt="" class="img-fluid">
                  </div>
                  <p class="overview pt-4">
                    <b>SHEFA SYED HAFEEZ BHAI</b>
                  </p>
                  <p>Assistant Director</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/shukat-bhai.jpg" alt="" class="img-fluid">
                  </div>
                  <p class="overview pt-4">
                    <b>MD SHAUKAT ALI BHAI</b>
                  </p>
                  <p>Assistant Deputy Director</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/subhan-bhai.jpeg" alt="" class="img-fluid">
                  </div>
                  <p class="overview pt-4">
                    <b>A. SUBHAN RAHMANI BHAI</b>
                  </p>
                  <p> Assistant Deputy Director </p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/shakira-jamal.jpg" alt="" class="img-fluid">
                  </div>
                  <p class="overview pt-4">
                    <b>SHAKIRA JAMAL BAJI</b>
                  </p>
                  <p> Headmistress Insan High School</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/ravindra-sir.jpeg" alt="" class="img-fluid">
                  </div>
                  <p class="overview pt-4">
                    <b>RAVINDRA SRI VASTAVA BHAI </b>
                  </p>
                  <p> Principal Insan Degree College</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/nigar-baji.jpg" alt="" class="img-fluid">
                  </div>
                  <p class="overview pt-4">
                    <b> NIGAR SYED HASAN BAJI</b>
                  </p>
                  <p>In-charge Insan Primary School</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/jameel-ahmaed.jpg" alt="">
                  </div>
                  <p class="overview pt-4">
                    <b>MD. JAMIL AHMAD BHAI</b>
                  </p>
                  <p>In-charge Head Office Administrative Block</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/jamil-bhai.jpg" alt="">
                  </div>
                  <p class="overview pt-4">
                    <b> MD JAMEEL AHMAD BHAI</b>
                  </p>
                  <p>In-charge Insan Girls Senior Secondary School</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/prasad-bhai.jpg" alt="">
                  </div>
                  <p class="overview pt-4">
                    <b> RAGHUVANSH PRASAD BHAI</b>
                  </p>
                  <p>Finance In-charge</p>
                </div>
                <div class="item carousel-item">
                  <div class="img-box">
                    <img src="images/abuzer-siraji.jpeg" alt="">
                  </div>
                  <p class="overview pt-4">
                    <b> ABUZAR SIRAJI BHAI</b>
                  </p>
                  <p>Co-ordinator, CDE AMU Kishanganj</p>
                </div>
              </div>
              <!-- Carousel controls -->
              <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <?php include_once 'inc/footer.php'; ?>
  </body>
</html>