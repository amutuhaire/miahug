<?php 
include_once 'controller.php';

// registering a custodian
if (isset($_POST['submitcustodian'])) {
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

	
}
// registering university
elseif (isset($_POST['Register University'])) {
	$name = "";
	$name = $_POST['Uname'];
	$imagename=$_FILES["myimage"]["name"]; 

	//Get the content of the image and then add slashes to it 
	$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

	//Insert the image name and image content in image_table
	$insert_image="INSERT INTO university VALUES('$name','$imagetmp','$imagename')";

	mysql_query($insert_image);

	
}






?>