<?php
	include('config.php');
	$id=$_GET['id'];
 
	    $serialnumber = $_POST['serial'];
        $email = $_POST['email'];
        $reserved_from = $_POST['reserved_from'];
        $reserved_until= $_POST['reserved_until'];
  
 
	mysqli_query($db,"update `reservation` set serial ='$serialnumber', email = '$email', reserved_from = '$reserved_from',  reserved_until = '$reserved_until' where _ID='$id'");
	header('location:reservation.php');
?>