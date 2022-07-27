<?php

@include 'config.php';

    $id=$_GET['id'];
   
  
    $query = mysqli_query($db,"SELECT * FROM devices WHERE _ID = '$id'");

    while($row = mysqli_fetch_array($query))
    {

        $serialnumber = $row['serial_number'];
        $model = $row['model'];
        $name = $row['name'];
        $equipment_type = $row['equipment_type'];
        $ip = $row['ip'];
        $purchase_date = $row['purchase_date'];
        $purchase_price = $row['purchase_price'];
        $created_at = $row['created_at'];
        $updated_at = $row['updated_at'];
        $status = $row['status'];
        $comment = $row['comment'];


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
    
    <form action="updateDevice.php?id=<?php echo $id; ?>" method= "post">
        
                    <div class="container">
                        <br><h2 style="color:#8A1010; font-size:20px; text-align: center; font-weight: bold;">Edit Row</h2>
                        <div class = "row">
                            <div class="col-sm-14">
                                <label style=" font-size:15px; font-weight: bold;">Serial Number: </label>
                                <input class = "form-control" type="text" value= "<?php echo $serialnumber ?>" name="serialnumber">
                                
                                <label style=" font-size:15px; font-weight: bold;">Model: </label>
                                <input class = "form-control" type="text" value="<?php echo $model; ?>" name="model">

                                <label style=" font-size:15px; font-weight: bold;">Name: </label>
                                <input class = "form-control" type="text" value="<?php echo $name ?>" name="name"> 

                                <label style=" font-size:15px; font-weight: bold;">Equipment Type: </label>
                                <input class = "form-control" type="text" value="<?php echo $equipment_type ?>" name="equipment_type">

                                <label style=" font-size:15px; font-weight: bold;">IP: </label>
                                <input class = "form-control" type="text" value="<?php echo $ip ?>" name="ip">

                                <label style=" font-size:15px; font-weight: bold;">Purchase Date: </label>
                                <input class = "form-control"  value="<?php echo $purchase_date ?>" name="purchase_date">

                                <label style=" font-size:15px; font-weight: bold;">Purchase Price: </label>
                                <input class = "form-control" type="text" value="<?php echo $purchase_price ?>" name="purchase_price">

                             

                                <label style=" font-size:15px; font-weight: bold;">Comment :</label>
                                <input class = "form-control" type="text" value="<?php echo $comment ?>" name="comment"><br>

                               <br><input class = "btn btn-primary" type="submit" name="create" value="Edit">
                                <p style="text-align: center;"> <a href="devicedua.php" >Back</a></p>

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