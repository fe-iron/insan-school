<?php

include 'admin-panel/connection.php';
$con = OpenCon();
$query = "SELECT * FROM `prev_questions`";
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
  <link rel="stylesheet" type="text/css" href="inc/css/style.css">
</head>

<body> <?php include_once 'inc/header.php'; ?> <?php include_once 'inc/navbar.php'; ?> <section class="paddding-result">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <h3 class="py-2 text-white font-weight-bold">Previous Year Question Paper</h3>
          <p class="text-white">All The students of Insan School and College Can Check thier results here.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 result-content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Previous Years Questions</h5>
            </div>
            <div class="card-body">
              <ul class="mx-5"> <?php

                                while ($data = mysqli_fetch_assoc($run)) {
                                ?> <li style="margin-top: 8px;">
                    <a href="prev_questions/<?php echo $data['result']; ?>" download style="text-decoration: none; font-size: 15px; color: black"> <?php echo $data['class']; ?> Class Question (  <?php echo $data['year']; ?>  ) <span class="text-success float-right">(Click To Download)</span>
                    </a>
                  </li> <?php
                                }
                        ?> </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> <?php include_once 'inc/footer.php'; ?>
</body>

</html>