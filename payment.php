<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 


  <link rel="stylesheet" type="text/css" href="inc/css/style.css">
</head>
<body>


  <?php include_once 'inc/header.php'; ?> 
  <?php include_once 'inc/navbar.php'; ?> 


  <section class="fee">
    <div class="container">
      <div class="row justify-content-center py-5">
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Make Payment</h3>
            </div>
            <div class="card-body">
              <form class="m-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Student name <span class="font-weight-bold text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name Here" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Enter Amount <span class="font-weight-bold text-danger">*</span></label>
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount Here" required="">
                </div>

                <!--  <input type="submit" name="submit" class="btn btn-success" value="Pay" onclick="payment()"/> -->
                <input class="btn btn-success mt-2" type="button" value="Proceed" name="submit" onclick="payment()"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





</section> 

<?php include_once 'inc/footer.php'; ?>







<script type="text/javascript">

 function payment(){
  var name = $("#name").val();
  var amount = $("#amount").val();
   var options = {
    "key": "rzp_live_mUFaTSANpv0QiA", 
    "amount": amount*100 , 
    "currency": "INR",
    "name": "Insan School",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "handler": function (response){
      
      // console.log(response);

      jQuery.ajax({

        type:'POST',
        url: 'payemnt_process.php',
        data: "payment_id="+ response.razorpay_payment_id+"&name="+name+"&amount="+amount,
        success: function(result){
          window.location.href="admission-form.php"
        }

      });
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
 }


  
</script>
</body>
</html>