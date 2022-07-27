<?php
	@include 'config.php';

	if(isset($_POST['create'])){

		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$pass= password_hash($password, PASSWORD_DEFAULT);

		$select = "SELECT * FROM user WHERE email_adress = '$email' && password = '$password' ";

		$result = mysqli_query($db, $select);

		  if(mysqli_num_rows($result) > 0){

		      $error[] = 'user already exist!';

		  }else{

		       $insert = "INSERT INTO user(first_name, surname, email_adress, password, role, status) VALUES('$firstname','$surname', '$email','$pass', '99', '1')";
		       mysqli_query($db, $insert);
		       header('location:login.php'); 
		  }

	};


	
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<style type="text/css">
				body{
					background-color: white;	
				}

		.container{
			background-color: whitesmoke;
			color: black;
			margin: auto;
			width: 300px;
			padding: 14px 20px;
			border-radius: 5px;
			box-shadow: 2px 2px 4px 2px lightgrey;
			margin-left: 35%;
			border: 4px black;
		text-align:center;
		}

		input[type=submit] {
		  width: 100%;
		  background-color: #8A1010;
		  color: whitesmoke;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  font-weight: bold;
		  text-align:center;
		}

	</style>
</head>

<body>
	<br><br><br>
	<div>
		<form action = "registration.php" method= "post">
			<div class="container">
				<div class = "row">
					<div class="col-sm-14">

						<br>
						<h1 style="color:#8A1010;font-size:20px; "><b>Sign Up</b></h1>
						<p><i>Please fill in the blanks</i></p>
				
						<label for="firstname"><b>Firstname*</b></label><br>
						<input class = "form-control" type="text" name="firstname" placeholder = "enter your firstname here" required><br>

						<label for="surname"><b>Surname*</b></label><br>
						<input class = "form-control" type="text" name="surname" placeholder = "enter your surname here" required><br>

						<label for="email"><b>E-Mail*</b></label><br>
						<input class = "form-control" type="email" name="email" placeholder = "enter your email here" required><br>

						<label for="password"><b>Password*</b></label><br>
						<input class = "form-control" type="password" name="password" placeholder = "enter your password here" required> <br> 

						<input class = "btn btn-primary" type="submit" name="create" value="Submit">

						<p style="color:#8A1010;font-size:15px; "><b><i>already have an account?</i></b> <br> <a href="login.php"><b>Log in now</b></a></p>

					</div>
				</div>
			</div>
		</form>
	</div>

</body>
</html>