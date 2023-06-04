		<?php



$con = mysqli_connect('localhost','root','','insan-school');


if (isset($_POST['payment_id']) && isset($_POST['amount'])  && isset($_POST['name'])) {

	$payment_id = $_POST['payment_id'];
	$amount = $_POST['amount'];
	$name = $_POST['name'];

	mysqli_query($con,"insert into std_payment( amount, student_name) VALUES ('$amount','$name')");


	# code...
}



?>