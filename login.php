<?php
@include 'config.php';

session_start();

if(isset($_POST['login'])){

  /** $firstname = $_POST['firstname'];
	$surname = $_POST['surname'];*/
	$email = $_POST['email'];
	$pass = $_POST['password'];

		$select = " SELECT * FROM user WHERE email_adress = '$email' ";

	 //$select = "SELECT * FROM user";
   $result = mysqli_query($db, $select);


   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $hash_pwd = $row['password'];
      $hash = password_verify($pass, $hash_pwd);

     
           
      echo $hash;
		      if($hash == '0'){

					   
		     
					      if($row['role'] == '1'){

					        
					         header('location:dashboard.php');
					        

					      }elseif($row['role'] == '0'){

					        
					         header('location:userinterfacedua.php');
					        
					      }elseif($row['role'] == '99'){

					        
					         echo "You don't have the right yet. Please wait for the confirmation!";
					      }


					}else{
					   echo 'Incorrect password! Please try again or click on forget password!';
					     
					}

		}

	};
	


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	<style type="text/css">
	body{
			background-color: white;	
		}	
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		text-align:center;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: darkred;
		border: none;
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

	#box{

		background-color: whitesmoke;
		margin: auto;
		width: 300px;
		padding: 20px;
		text-align:center;
	}

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</style>	
</head>
<body>
	<br><br><br>

	<div id="box">
		
		<form method="post">
			<div style="color:#8A1010;font-size:20px; "><b>Login</b></div><br>

			<input id="text" type="text" name="email" placeholder = "enter your email here"><br><br>
			<input id="text" type="password" name="password" placeholder = "enter your password here" ><br><br>

			<button class = "btn btn-primary" type="submit" name="login" value="Log in" style="background-color: #8A1010 ;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Log in</button>

			<p> <a href="registration.php"><i style="color:#8A1010;font-size:11px;">Click to Register</i></a><br><a href="mailto:youremail ?>?subject= Reset%20Password&body=Please%20access%20this%20site:%20localhost/Praktikum/send_mail.php%20to%20reset%20your%20password." ><i style="color:#8A1010;font-size:11px;">Forget Password?</i></a></p>
			

		</form>
		<!--<button class = "btn btn-primary" type="submit" name="forget" value="Forget Password" style="background-color: whitesmoke ; color:  #8A1010; border:  none;font-size:12px;"><i>Forget Password?</i></button>-->
	</div>
</body>
</html>