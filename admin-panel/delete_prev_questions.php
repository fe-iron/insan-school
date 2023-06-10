<?php

include 'connection.php';
$con = OpenCon();
session_start();
$id = $_GET['id'];

$query = " DELETE FROM `prev_questions` WHERE sl=$id";

mysqli_query($con, $query);
$_SESSION['msg'] = "Successfully Inserted in Database!";
header('location:school_question_table.php');




?>