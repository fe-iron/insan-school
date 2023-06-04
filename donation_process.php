<?php



$con = mysqli_connect('localhost','root','','insan-school');


if (isset($_POST['payment_id'])&& isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['amount'])  ) {

	$payment_id = $_POST['payment_id'];
	$amount = $_POST['amount'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];


	$query="INSERT INTO `donation`( `name`, `email`, `address`, `amount`) VALUES ('$name','$email','$address','$amount')";


	$run= mysqli_query($con,$query);

	
}
?>







<!-- 


payment_id: pay_HnO8mwOY8LHpIR
name: naqui
email: insanschool@gmail.com
address=Bijhara kurum
amount: 5 -->