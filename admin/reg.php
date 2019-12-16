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


$result = "insert into custodian(Firstname, Lastname, gender, telephone, email, password, hostel) values('$fname', '$lname', '$gender', '$contact', '$email', '$pass', '$hostel')";
if(mysqli_query($conn, $result)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);






?>