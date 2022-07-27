<?php

@include 'config.php';

    $id=$_GET['id'];
   

    if(isset($_POST['create'])){

        $first_name = $_POST['first_name'];
        $surname =  $_POST['surname'];
        $role =  $_POST['role'];
        $email_adress =  $_POST['email_adress'];
        $status =  $_POST['status'];
        $password =  $_POST['password'];

        $select = "SELECT * FROM user ";

        $result = mysqli_query($db, $select);

      /*if(mysqli_num_rows($result) > 0){

            $error[] = 'device is already exist.';

      }else{*/

           $insert = "INSERT INTO user(first_name, surname, role, email_adress, status, password ) VALUES('$first_name', '$surname', '$role', '$email_adress', '$status', '$password')";
           mysqli_query($db, $insert);
           header('location:users.php');
      //}

    };

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Row</title>

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <style>
        
        body{
            background-color: white;    
            }

        .container{
            background-color: whitesmoke;
            color: black;
            margin: auto;
            width: 400px;
            padding: 14px 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 4px 2px lightgrey;
            margin-left: 35%;
            border: 4px black;
            text-align:left;
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
     <br> <br>
    <form action="addUser.php?id=<?php echo $id; ?>" method= "post">
       
                    <div class="container">
                        <br><h2 style="color:#8A1010; font-size:20px; text-align: center; font-weight: bold;">Add New Entry</h2>
                        <div class = "row">
                            <div class="col-sm-14">
                                <label style=" font-size:15px; font-weight: bold;">First Name: </label>
                                <input class = "form-control" type="text" placeholder = "enter first name here" name="first_name">
                                
                                <label style=" font-size:15px; font-weight: bold;">Surname: </label>
                                <input class = "form-control" type="text" placeholder = "enter surname here" name="surname">

                                <label style=" font-size:15px; font-weight: bold;">Email: </label>
                                <input class = "form-control" type="text" placeholder = "enter email address here" name="email_adress">

                                <label style=" font-size:15px; font-weight: bold;">Password: </label>
                               <input class = "form-control" type="text" placeholder = "enter password here" name="password"><br>

                                <label style=" font-size:15px; font-weight: bold;">Role: </label>
                                 <select id="role" name="role">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                                <!--<input class = "form-control" type="text" placeholder = "enter person role here" name="role">-->

                                <label style=" font-size:15px; font-weight: bold;">Status: </label>
                                <select id="status" name="status">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select><br>
                                <!--<input class = "form-control"  type="text" placeholder = "enter status here"  name="status">-->

                                

                               <br><input class = "btn btn-primary" type="submit" name="create" value="Edit">
                                <p style="text-align: center;"> <a href="users.php" >Back</a></p>

                            </div>
                        </div>
                    </div>  
               
    </form>

    <!-- javascript for the reserved until-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <link rel="Stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
        <script type="text/javascript">
        $(function () {
            $("input[type=datetime]").datepicker();
        });
        </script>
</body>
</html>