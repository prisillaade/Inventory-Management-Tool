<?php
	include('config.php');
	$id=$_GET['id'];
 
    	$serialnumber = $_POST['serial_number'];
        $model = $_POST['model'];
        $name = $_POST['name'];
        $equipment_type = $_POST['equipment_type'];
        $ip = $_POST['ip'];
        $purchase_date = $_POST['purchase_date'];
        $purchase_price = $_POST['purchase_price'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];
        //$status = $_POST['status'];
        $comment = $_POST['comment'];
      
 
	mysqli_query($db,"update `devices` set model='$model', name = '$name', equipment_type = '$equipment_type',  ip = '$ip', purchase_date = '$purchase_date',  purchase_price = '$purchase_price',  comment = '$comment' where _ID='$id'");
	header('location:devicedua.php');
?>