<?php

@include 'config.php';

    $id=$_GET['id'];
   
  
    $query=mysqli_query($db,"SELECT * FROM user WHERE _ID = '$id'");

    while($row = mysqli_fetch_array($query))
    {
   // $row=mysqli_fetch_array($query);

        $first_name = $row['first_name'];
        $surname = $row['surname'];
        $role = $row['role'];
        $email_adress = $row['email_adress'];
        $created_at = $row['created_at'];
        $updated_at = $row['updated_at'];
        $status = $row['status'];
        $password = $row['password'];

    }

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
    
    <form action="updateUser.php?id=<?php echo $id; ?>" method= "post">
        
                    <div class="container">
                        <br><h2 style="color:#8A1010; font-size:20px; text-align: center; font-weight: bold;">Edit Row</h2>
                        <div class = "row">
                            <div class="col-sm-14">
                                <label style=" font-size:15px; font-weight: bold;">First Name: </label>
                                <input class = "form-control" type="text" value= "<?php echo $first_name ?>" name="first_name">
                                
                                <label style=" font-size:15px; font-weight: bold;">Surname: </label>
                                <input class = "form-control" type="text" value="<?php echo $surname; ?>" name="surname">

                                <label style=" font-size:15px; font-weight: bold;">Role: </label>
                                <input class = "form-control" type="text" value="<?php echo $role ?>" name="role">

                                <label style=" font-size:15px; font-weight: bold;">Email: </label>
                                <input class = "form-control" type="text" value="<?php echo $email_adress ?>" name="email_adress">

                                <!--<label style=" font-size:15px; font-weight: bold;">Created at: </label>
                                <input class = "form-control" type="text" value="<?php echo $created_at ?>" name="created_at">

                                <label style=" font-size:15px; font-weight: bold;">Update at: </label>
                                <input class = "form-control" type="text" value="<?php echo $updated_at ?>" name="updated_at">

                                <label style=" font-size:15px; font-weight: bold;">Status: </label>
                                <input class = "form-control" type="text" value="<?php echo $status ?>" name="status">-->

                                <label style=" font-size:15px; font-weight: bold;">Password: </label>
                                <input class = "form-control" type="text" value="<?php echo $password ?>" name="password">

                               <br><input class = "btn btn-primary" type="submit" name="create" value="Edit">
                                <p style="text-align: center;"> <a href="users.php" >Back</a></p>

                            </div>
                        </div>
                    </div>  
               
    </form>
</body>
</html>