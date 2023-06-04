<!DOCTYPE html>
<html>

<head>
  <title>Admission</title>
  <meta charset="utf-8">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="inc/css/admission.css">

  <!-- html2canvas library -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

  <!-- jsPDF library -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

  <script type="text/javascript" src="script.js"></script>
</head>

<body>

  <?php include_once 'inc/header.php'; ?>
  <?php include_once 'inc/navbar.php'; ?>

  <?php
  include 'admin-panel/connection.php';
  $con = OpenCon();

  $query = "SELECT * FROM `school_admission_form`";
  $run = mysqli_query($con, $query);


  if (isset($_POST['submit'])) {

    $class = $_POST['class'];
    $tc_no = $_POST['tc'];
    $student_name = $_POST['Student_name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $admission_date = $_POST['date'];
    $address = $_POST['address'];
    $Mobile1 = $_POST['Mobile1'];
    $Mobile2 = $_POST['Mobile2'];
    $dob = $_POST['dob'];
    $adhar = $_POST['aadhar'];
    $email = $_POST['email'];
    $ifsc = $_POST['ifsc'];
    $bank = $_POST['Bank'];
    $account = $_POST['account'];
    $mother = $_POST['mother'];
    $Siblings_brother = $_POST['brother'];
    $Siblings_sister = $_POST['sister'];
    $gender = $_POST['gender'];
    $student = $_POST['student_type'];
    $mothertongue = $_POST['mothertongue'];
    $nationality = $_POST['nationality'];
    $meter = $_POST['meter'];
    $centimeter = $_POST['centimeter'];
    $illness = $_POST['illness'];
    $suggestion = $_POST['suggestion'];
    $imagesname = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tempname, "student-image/$imagesname");
    $signature = $_FILES['signature']['name'];
    $signaturetemp = $_FILES['signature']['tmp_name'];
    move_uploaded_file($signaturetemp, "student-signature/$signature");




    // $query="INSERT INTO `school_admission_form`( `class`, `admission_date`, `tc_no`, `student_name`, `fname`, `mname`, `address`, `mobile1`, `mobile2`, `dob`, `adhar`, `email`, `account`, `ifsc`, `bank`, `day_scholar`, `border`, `own`, `step`, `brother`, `sister`, `male`, `female`, `mothertongue`, `nationality`, `illness`, `meter`, `centimeter`, `suggestion`)  VALUES ('$class', '$admission_date','$tc_no', '$student_name','$fname', '$mname', '$address', '$Mobile1','$Mobile2','$dob','$adhar','$email','$account','$ifsc','$bank','$day_scholar','$border','$mother_own','$mother_step','$Siblings_brother','$Siblings_sister','$male','$female','$mothertongue','$nationality','$illness','$meter','$centimeter','suggestion')";






    $query = " INSERT INTO `school_admission_form`( `class`, `admission_date`, `tc_no`, `student_name`, `fname`, `mname`, `address`, `mobile1`, `mobile2`, `dob`, `adhar`, `email`, `account`, `ifsc`, `bank`, `brother`, `sister`, `mothertongue`, `nationality`, `illness`, `meter`, `centimeter`, `suggestion`, `photo`, `signature`, `mother`, `gender`, `student_type`) VALUES ('$class', '$admission_date','$tc_no', '$student_name','$fname','$mname','$address','$Mobile1','$Mobile2','$dob','$adhar','$email','$account','$ifsc','$bank','$Siblings_brother','$Siblings_sister','$mothertongue','$nationality','$illness','$meter','$centimeter','$suggestion','$imagesname','$signature','$mother','$gender','$student')";

    $run = mysqli_query($con, $query);
  }

  ?>







  <section class="py-5 admission-form">

    <div class="container " style="padding: 20px 30px;" id="invoice">
      <div class="row justify-content-center">
        <div class="col-md border">
          <div class="table-responsive">
            <table class="table table-bordered">

              <tbody>
                <tr style="border-bottom: 1px solid #d2cbcb;">
                  <td style="width: 163px;"><img src="images/logo.png" style="width: 120px"></td>
                  <td style="text-align: center;">
                    <h1 style="font-family:'roboto', sans-serif!important; letter-spacing: 1.5px;">Insan School</h1>
                    <h5 style="font-family:'roboto', sans-serif!important; letter-spacing: 1.5px;">Shaikshanagar Kishangange </h5>
                    <h5 style="font-family:'roboto', sans-serif!important; letter-spacing: 1.5px;font-style: italic;font-weight: bold;">Admission Form 2021-22</h5>
                  </td>
                  <td style="text-align: right;"><img src="images/qr-code-1.png" style="width: 110px"></td>
                </tr>

                <tr>
                  <td colspan="2">

                    <table class="table table-borderless">

                      <tbody>

                        <tr>
                          <td style="padding: .5rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px; font-weight: bold; border-bottom: 1px solid #d2cbcb;">Class Applied For: <?php echo $_POST['class'];; ?></td>

                          <td style="padding: .5rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px; font-weight: bold; border-bottom: 1px solid #d2cbcb;">Last School TC No: <?php echo $_POST['tc']; ?></td>
                        </tr>
                        <tr>
                          <td colspan="2" style="padding: .5rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px; font-weight: bold; border-bottom: 1px solid #d2cbcb;">Personal Inforrmation</td>
                        </tr>
                        <tr>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Name Of Student</td>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['Student_name']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Father's Name</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['fname']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Mother's Name</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['mname']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Date Of Birth</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['dob']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Mobile No</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['Mobile1']; ?>, <?php echo $_POST['Mobile2']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Email Id</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['email']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Gender</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['gender']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem .9rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Aadhar card No</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['aadhar']; ?></td>
                        </tr>

                        <tr>
                          <td colspan="2" style="padding: .5rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px; font-weight: bold; border-bottom: 1px solid #d2cbcb;">Other Inforrmation</td>
                        </tr>


                        <tr>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Mother</td>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['mother']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Mode Of Student</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['student_type']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Mother's Tongue</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['mothertongue']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Nationality</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['nationality']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Height</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['meter']; ?>meter <?php echo $_POST['centimeter']; ?>centimeter</td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Email Id</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['email']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem .7rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Siblings</td>
                          <td style="padding: .33rem 1rem .7rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['brother']; ?> Brother, <?php echo $_POST['sister']; ?> Sister</td>
                        </tr>
                        <tr>
                          <td colspan="2" style="padding: .5rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px; font-weight: bold; border-bottom: 1px solid #d2cbcb;">Bank Inforrmation ( Student )</td>
                        </tr>

                        <tr>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Account Number</td>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['account']; ?></td>
                        </tr>

                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">IFSC CODE</td>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['ifsc']; ?></td>
                        </tr>
                        <tr>
                          <td style="padding: .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;">Bank Name</td>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['Bank']; ?></td>
                        </tr>
                        <tr>
                          <td colspan="2" style="padding:.7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px; font-weight: bold; border-bottom: 1px solid #d2cbcb;">Address</td>
                        </tr>

                        <tr>
                          <td style="padding: .7rem 1rem .33rem 1rem;
                      vertical-align: top;
                      font-size: 13.5px; font-family:'roboto', sans-serif; letter-spacing:1px;"><?php echo $_POST['address']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td style="display: flex;justify-content: center;align-items: center; flex-direction: column;">
                    <?php
                      $data = mysqli_fetch_assoc($run);
                    ?>

                    <img src="student-image/<?php echo $_FILES['photo']['name']; ?>" style="width: 140px;height: ; margin-top: 50px;">
                    <img src="student-signature/<?php echo $_FILES['signature']['name']; ?>" style="width: 140px;">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md">
          <h5 style="color: red;">Note: Submit thr donnloaded copy of application form to the Admission Cell</h5>
          <button onclick="generatePDF()" class="btn btn-warning">Download Application Form</button>
          <a href="payment.php" class="btn btn-secondary ml-3">Make Payment Here</a>
        </div>
      </div>
    </div>
  </section> <?php include_once 'inc/footer.php'; ?>
</body>

</html>