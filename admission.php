<!DOCTYPE html>
<html>
<head>
  <title>Admission</title>
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
  <link rel="stylesheet" type="text/css" href="inc/css/admission.css">
</head>
<body> 
   <?php include_once 'inc/header.php'; ?>
 <?php include_once 'inc/navbar.php'; ?>

 <section class="paddding-gallery">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="py-2 text-white font-weight-bold">Photo Gallery</h3>
        <p class="text-white">A Camera that puts a world of possiblities at your fingertips.</p>
        <!--  <button  type="button" class="btn btn-success" >Apply Now</button> -->
        <a href="images/Admission-form/insan-school.pdf"><button  type="button" class="btn btn-success" >Apply Now</button></a>

      </div>
    </div>
  </div>
</section>
<!-- end of upper  section -->

<section class="py-5">


  <div class="container">
    <div class="row">
      <div class="col-md"></div>
    </div>
  </div>

  <div class="container border-admssion">
    <h4 class="text-center font-weight-bold ">Admssion Form ( School & College )</h4>
    <div class="row pt-5 justify-content-center">
      <div class="col-md">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">School Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">College Form</a>
          </li>
        </ul>
        <div class="tab-content pt-4" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div  class="container">
              <div class="row">
                <div class="col-md p-0">
                  <form action="admission-form.php" enctype="multipart/form-data" method="post" >
                    <h5 class="pb-3" style="font-family: 'Raleway', sans-serif;letter-spacing: 1.5px;">Note <span class="text-danger h4">*</span>: Fill The Form Very Carefully</h5>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputState">Class Apply For <span class="text-danger h4">*</span></label>
                        <select id="inputState" class="form-control" name="class" required="">
                          <option selected>Select</option>
                          <option value="1">1st Class </option>
                          <option value="2">2nd Class </option>
                          <option value="3">3rd Class </option>
                          <option value="4">4th Class </option>
                          <option value="5">5th Class </option>
                          <option value="6">6th Class </option>
                          <option value="7">7th Class </option>
                          <option value="8">8th Class </option>
                          <option value="9">9th Class </option>
                          <option value="10">10th Class </option>
                        </select>
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputPassword4">Date Of Addmission <span class="text-danger h4">*</span></label>
                        <input type="date" class="form-control" id="inputPassword4" required="required" placeholder="Enter Date" name="date">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputPassword4">Last School TC No <span class="text-danger h4">*</span></label>
                        <input type="Number" class="form-control" id="inputPassword4" required="required" placeholder="Enter TC Number" name="tc">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputEmail4">Name Of Student <span class="text-danger h4">*</span></label>
                        <input type="text" class="form-control" id="inputEmail4" required="required" placeholder="Enter Name" name="Student_name">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputPassword4">Father's Name <span class="text-danger h4">*</span></label>
                        <input type="text" class="form-control" id="inputPassword4" required="required" placeholder="Enter Father Name" name="fname">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputPassword4">Mother's Name <span class="text-danger h4">*</span></label>
                        <input type="text" class="form-control" id="inputPassword4" required="required" placeholder="Enter Mother Name" name="mname">
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-md mb-3">
                        <label  for="inputAddress">Address <span class="text-danger h4">*</span></label>
                        <input type="text" class="form-control" id="inputAddress" required="required" placeholder="1234 Main St" name="address">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputAddress2">Mobile No <span class="text-danger h4">*</span></label>
                        <input type="tel" class="form-control" id="inputAddress2" required="required" placeholder="Enter Mobile No." name="Mobile1">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputAddress2">Mobile No (Alternate)</label>
                        <input type="tel" class="form-control" id="inputAddress2"  placeholder="Enter Mobile No" name="Mobile2">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputCity">Date Of Birth <span class="text-danger h4">*</span></label>
                        <input type="date" class="form-control" id="inputCity" required="required" placeholder="Date Of Birth" name="dob">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputState">Aadhar Card Number <span class="text-danger h4">*</span></label>
                        <input id="inputState" type="Number" class="form-control" required="required" placeholder="Enter Aadhar Card Number" name="aadhar">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputZip">Email Id <span class="text-danger h4">*</span></label>
                        <input type="email" class="form-control" id="inputZip" required="required" placeholder="Enter Email Id" name="email">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputCity">Account Number( Student Bank ) <span class="text-danger h4">*</span></label>
                        <input type="Number" class="form-control" id="inputCity" required="required" placeholder="Account Number" name="account">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputState">IFSC Code <span class="text-danger h4">*</span></label>
                        <input type="Number" id="inputState" class="form-control" required="required" placeholder="IFSC Code" name="ifsc">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputZip">Bank Name <span class="text-danger h4">*</span></label>
                        <input type="text" class="form-control" id="inputZip" required="required" placeholder="Enter Bank Name" name="Bank">
                      </div>
                    </div>

                    <label >Mode Of Student</label>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="student_type" id="exampleRadios1" value="day_scholar">
                          <label  class="form-check-label" for="exampleRadios1">
                            Day Scholar <span class="text-danger h4">*</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group col-md mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="student_type" id="exampleRadios2" value="border">
                          <label  class="form-check-label" for="exampleRadios2">
                            Border <span class="text-danger h4">*</span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <label >Mother Type</label>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mother" id="exampleRadios3" value="own">
                          <label  class="form-check-label" for="exampleRadios3">
                            Own
                          </label>
                        </div>
                      </div>
                      <div class="form-group col-md mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mother" id="exampleRadios4" value="step">
                          <label  class="form-check-label" for="exampleRadios4">
                            Step
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-row mb-3">
                      <label >Number Of Siblings</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="">Brother and Sister</span>
                        </div>
                        <input type="Number" class="form-control" required="required" placeholder="Enter Brother " name="brother">
                        <input type="Number" class="form-control" required="required" placeholder="Enter Sister"   name="sister">
                      </div>
                    </div>

                    <label >Genrder <span class="text-danger h4">*</span></label>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="exampleRadios5" value="male">
                          <label  class="form-check-label" for="exampleRadios5">
                            Male
                          </label>
                        </div>
                      </div>
                      <div class="form-group col-md mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="exampleRadios6" value="female">
                          <label  class="form-check-label" for="exampleRadios6">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputCity">Mother tongue</label>
                        <input type="text" class="form-control" id="inputCity" required="required" placeholder="Mother tongue" name="mothertongue">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputState">Nationality</label>
                        <input type="text" id="inputState" class="form-control" required="required" placeholder="Nationality" name="nationality">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputZip">Any Illness/Precaution</label>
                        <input type="text" class="form-control" id="inputZip" required="required" placeholder="Enter Any Illness/Precaution" name="illness">
                      </div>
                    </div>

                    <div class="form-row mb-3">
                      <label >Height</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="">Enter Height</span>
                        </div>
                        <input type="Number" class="form-control" required="required" placeholder="Meter" name="meter">
                        <input type="Number" class="form-control" required="required" placeholder="Centimeter" name="centimeter">
                      </div>
                    </div>

                    <div class="form-row mb-3">
                      <div class="form-group col-md mb-3">
                        <label  for="exampleFormControlTextarea1">Any Suggestion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="suggestion">Message</textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md mb-3">
                        <label  for="inputCity">Upload Photo (Form Size) <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="inputCity" required="required" placeholder="Upload Photo" name="photo">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label  for="inputState">Upload Signature <span class="text-danger">*</span></label>
                        <input type="file" id="inputState" class="form-control" required="required" placeholder="Upload Signature" name="signature">
                      </div>
                      
                    </div>

                    <div class="form-row">
                     <div class="form-group col-md mb-2">
                        <input type="submit" name="submit" id="" value="Submit" class="btn btn-success" >
                     </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">We will Update Soon</div>
        </div>
      </div>
    </div>
  </div>
</section> 
<?php include_once 'inc/footer.php'; ?>
</body>
</html>