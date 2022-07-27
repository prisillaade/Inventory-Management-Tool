<?php
	include('config.php');
	$id=$_GET['id'];

		$first_name = $_POST['first_name'];
        $surname =  $_POST['surname'];
        $role =  $_POST['role'];
        $email_adress =  $_POST['email_adress'];
        $created_at =  $_POST['created_at'];
        $updated_at =  $_POST['updated_at'];
        $status =  $_POST['status'];
        $password =  $_POST['password'];

    
		mysqli_query($db,"UPDATE `user` SET status = '0'  WHERE _ID='$id'");
		header('location:users.php');
	
?>