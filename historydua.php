<?php
@include 'config.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>History</title>

<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!--Source: http://codepen.io/JFarrow/pen/nJgRga-->
<style type="text/css">

	@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
	@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

	.fa-2x{
		font-size: 2em;
	}
	.fa{
		position: relative;
		display: table-cell;
		width: 60px;
		height: 36px;
		text-align: center;
		vertical-align: middle;
		font-size:20px;
	}
	.main-menu:hover,nav.main-menu.expanded{
		width:250px;
		overflow:visible;
	}

	.main-menu{
		background:#8A1010;
		border-right:1px solid #e5e5e5;
		position:absolute;
		top:0;
		bottom:0;
		height:100%;
		left:0;
		width:60px;
		overflow:hidden;
		-webkit-transition:width .05s linear;
		transition:width .05s linear;
		-webkit-transform:translateZ(0) scale(1,1);
		z-index:1000;
	}


	.main-menu>ul{
		margin: 7px 0;
	}

	.main-menu li{
		position: relative;
		display: block;
		width: 250px;
	}

	.main-menu li>a {
		position:relative;
		display:table;
		border-collapse:collapse;
		border-spacing:0;
		color:whitesmoke;
 		font-family: arial;
		font-size: 14px;
		text-decoration:none;
		-webkit-transform:translateZ(0) scale(1,1);
		-webkit-transition:all .1s linear;
		transition:all .1s linear;
  
		}

	.main-menu .nav-icon {
		position:relative;
		display:table-cell;
		width:60px;
		height:36px;
		text-align:center;
		vertical-align:middle;
		font-size:18px;
	}

	.main-menu .nav-text {
		position:relative;
		display:table-cell;
		vertical-align:middle;
		width:190px;
  		font-family: 'Titillium Web', sans-serif;
	}

	.main-menu>ul.logout{
		position:absolute;
		left:0;
		bottom:0;
	}

	.no-touch .scrollable.hover {
		overflow-y:hidden;
	}

	.no-touch .scrollable.hover:hover {
		overflow-y:auto;
		overflow:visible;
	}

	a:hover,a:focus {
		text-decoration:none;
	}

	nav {
		-webkit-user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		-o-user-select:none;
		user-select:none;
	}

	nav ul,nav li {
		outline:0;
		margin:0;
		padding:0;
	}

	.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
		color:#fff;
		background-color:#5fa2db;
	}

	.area {
		float: left;
		background: #e2e2e2;
		width: 100%;
		height: 100%;
	}

	@font-face {
  		font-family: 'Titillium Web';
  		font-style: normal;
  		font-weight: 300;
  		src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
	}

	.container {
  		background: white;
  		min-height: 100vh;
  		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	}


    .my-custom-scrollbar {
		position: relative;
		height: 200px;
		overflow: auto;
	}

	.table-wrapper-scroll-y {
		border-spacing: 1;
		background: white;
		width: 100%;
		border-collapse: collapse;
		display: block;
	}
	.table-wrapper-scroll-y thead{
		background: #8A1010;
		color: whitesmoke;
		padding-left:8px;
	}

	#content {
  		background-color: whitesmoke;
  		border: none;
 		/*padding: 0.5rem;*/
  		display: flex;
	}

	#left {
  		background-color: #8A1010;
  		border: none;
  		padding: 0.5rem;
  		flex-grow: 1;
  		color: #fff;
	}

	#right {
  		background-color: #8A1010;
  		border: none;
  		padding: 0.5rem;
  		flex-grow: 1;
  		text-align: right;
  		color: #fff;
	}
	

	input#myInput { width: 220px; }

	.order{
		display: flex;
  		justify-content: center;
	}

	#order-now { float: center; border: none; color: whitesmoke; }
    
    .space{
  	width: 4px;
  	height: auto;
  	display: inline-block;
	}
</style>

</head>
<body>

<!-- navigation bar -->
<div class="area"></div><nav class="main-menu">
            <ul>
            	<li>
                    <a>
                        <img style="width:25%;" src="./images/fau.png" alt="FAU Icon">
                    </a>
                  
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="devicedua.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Device
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            History
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="Reservation.php">
                       <i class="fa fa-shopping-cart fa-2x"></i>
                        <span class="nav-text">
                            Reservation
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="Users.php">
                        <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Users
                        </span>
                    </a>
                </li>
                
            </ul>

            <ul class="logout">
                <li>
                   <a href="login.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>

<!--	Main Dashboard -->
		<div class= 'container'> 
			<section id = 'first'>
				<br><h1 style="color:#8A1010;font-size:25px; text-align:center; "><b>History</b></h1>
				<h3 style="color:#8A1010; font-size:12px; text-align:center;"> <i>Welcome to the administrator interface! <br> Here is the history management.</i></h3><br>


				<div id="content">
  				
  				
  				<div id="left">
  					<!-- for the calendar
     				<div id="object1">Kalender</div>-->
  				</div>
  				<!-- for the search function-->
  				<div id="right" >
    				 <input 
  						type="text" 
  						id="myInput" 
  						onkeyup="myFunction()" 
  						placeholder="Search for..." 
  						title="Type here">
  				</div>

  				</div>
			</section>
  			<section id= 'second'>
    			
    			<br><div class="table-wrapper-scroll-y my-custom-scrollbar">
    			<table class="table table-bordered table-hover mb-0" id="myTable">
		    	<thead>
		     	<tr>
		        	
		        	<th>User ID</th>
		    		<th>Serial Number</th>
		        	<th>Created at</th>
		        	<th>Reserved from</th>
		        	<th>Reserved until</th>
		        	<th>Comment</th>
		        	<th>Action</th>
		      		</tr>
		    	</thead>
		    		<tbody id="get_product">
		      	<!-- call the data-->
		      	<?php 


		      	$result = mysqli_query($db,"SELECT * FROM reservation AS res JOIN devices AS dev ON dev._ID = res.device_ID");
		      	$row = "";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					//echo "<td>" ;
					//print_r($row);
					//echo "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['serial_number'] . "</td>";
					echo "<td>" . $row['created_at'] . "</td>";
					echo "<td>" . $row['reserved_from'] . "</td>";
					echo "<td>" . $row['reserved_until'] . "</td>";
					echo "<td>" . $row['comment'] . "</td>";
					echo "<td><button class='editbtn' type= 'submit' style='background-color: #8A1010 ; border: none; color: white;'> edit </button></td>";
					echo "</tr>";


					
				}
				
					 
		      	?>
		    	</tbody>
		  		</table>
		  		</div>
  			</section>


  			<!-- insert new row and Export-->
  			<div class="order">
  				
  					<br>
  					<a href="exportHistory.php"><button class = "btn btn-primary" id="order-now" type="submit" name="order" value="Reservation" style="background-color: #8A1010 ;"> Export as .xlsx</button></a>
  					
  			</div>
  
		</div>


		<script>
		function myFunction() {
        var input, filter, table, tr, td, i, ii;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.querySelectorAll("tbody tr:not(.header)");
        for (i = 0; i < tr.length; i++) {
            var tds = tr[i].getElementsByTagName("td");
            var found = false;
            for (ii = 0; ii < tds.length && !found; ii++) {
                if (tds[ii].textContent.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            tr[i].style.display = found?"":"none";
        	}
    	}

		</script>



</body>
</html>