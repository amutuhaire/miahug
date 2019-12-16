<?php 
include_once 'controller.php';
$fname = "";
$lname = "";
$hostel = "";
$email ="";
$tel ="";
$pass ="";


$pass = $_POST['psw'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname']; 
$hostel = $_POST['hostel'];
$email = $_POST['email'];
$contact = $_POST['usrtel'];
$gender = $_POST['gender'];


$result = mysqli_query($conn,  "insert into custodian");






?>