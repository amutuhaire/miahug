<?php 
    //Making a conection
    $conn = mysqli_connect("localhost","root","","");
            
    //Incase of connection error
    if (!$conn)
        die("Connection Error: " .mysqli_connect_error());
?>