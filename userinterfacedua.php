<?php
@include 'config.php';
	/*if(isset($_POST['searchbtn'])){


	$select = "SELECT * FROM reservation;
	$result = mysqli_query($db, $select);

	if(mysqli_num_rows($result) > 0){
		$error[] = 'user already exist!';
	}élse{
		$insert = "INSERT INTO  reservation()";
	}

	};*/
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Interface</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	<!--css for filter
		<script src="js/jquery.min.js"></script>-->
		<link rel="stylesheet" href="path/to/css/smart-forms.css">
    	<link rel="stylesheet" href="path/to/css/font-awesome.min.css">
    	<link rel="stylesheet" href="jquery.datetimepicker.css"/>
    	


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
			height: 400px;
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
		

		input#clear { color: whitesmoke; }
		input#search { color: whitesmoke; }
		
		.order{
			display: flex;
	  		justify-content: center;
		}

		#order-now { float: center; border: none; color: whitesmoke; }


		.content {
		  		background-color: #8A1010;
		  		border: none;
		 		padding: 0.5rem;
		  		//display: flex;
		  		text-align: center;
		  		color: white;
		  		height: 150px;

		}

		
	</style>

</head>
<body>

<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css"/>
<script src="js/jquery.datetimepicker.js"></script>


<!-- navigation bar -->
<div class="area"></div><nav class="main-menu">
            <ul>
            	<li>
                    <a>
                        <img style="width:100%;" src="./images/fau.png" alt="FAU Icon"> 
                        <span class="nav-text" style="color: whitesmoke;">
                            Reservation
                        </span>
                    </a>
                  
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
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
				<br>
				<h1 style="color:#8A1010; font-size:25px; text-align:center; "><b>Reservation for Special IT Equipment</b></h1>
				<h3 style="color:#8A1010; font-size:12px; text-align:center;"> <i>Please choose the date, time, and the equipment type! <br> The non IT-Equipments (exp.Laptop) aren't available for booking.  Please contact your Administrator!</i></h3><br>

				<div class="content">
	  				

				      
		     				
		     				
				            <br>
				           		<form method="POST">
					            <label for="reservedFrom" style=" font-size:15px; font-weight: bold;">Reserved from:  </label>
					            <a><input type='datetime' name = "date_f" readonly= 'readonly' placeholder="select..." id="date_from"  /><input type="time" id="time_from" name="time_f" min="06:00" max="23:00" required></a></td>
					            <label for="reservedUntil"style=" font-size:15px; font-weight: bold;">Reserved until:  </label>
					            <a ><input type='datetime' name = "date_u" readonly= 'readonly' placeholder="select..." id="date_until"/><input type="time" id="time_until" name="time_u" min="06:00" max="23:00" required></a></td><br>
					           	<label for="name"style=" font-size:15px; font-weight: bold;">Equipment type: </label>

					           	<!--https://stackoverflow.com/questions/29881606/filtering-my-sql-through-php-using-drop-down-menu-and-text-field-->
								<select id="e_name" name="name">
								  <option value="choose">-Choose the equipment type-</option>
								  <option value="dockingstation">Docking Station</option>
								  <option value="printer">Printer</option>
								  <option value="monitor">Monitor</option>
								  <option value="cablehdmi">HDMI Cable</option>
								</select>

								<!--<input id="datetimepicker" type="text" >-->
					      		<a href="#"><input class = "btn" id="search" type="submit" name="searchbtn" value="Check Availibility" onclick="myFunction()"></a>


				       			</form>
				       
		    				
		  				
				       			<!--<input id="datetimepicker" type="text" >-->
					      		<a href="userinterfacedua.php"><input class = "btn" id="clear" type="submit" name="clearbtn" value="Clear Filter"  ></a>
				      		
				      
  				</div>

			</section>


  			<section id= 'table'>
    			<form method="post">
	    			<br>
	    			<div class="table-wrapper-scroll-y my-custom-scrollbar">
		    			<table class="table table-bordered table-hover mb-0" id="tblCustomers">
				    	<thead>
				    	<thead>
				     	<tr>
				        	<th>Serial Nr.</th>
				        	<th>Name</th>
				        	<th>Model</th>
				        	<th>IP</th>
				        	<!--<th>Reserved from</th>
				        	<th>Reserved until</th>-->
				        	<th>Action <br> <i style="font-size:11px;">Please choose one!</i></th>
				        	
				      		</tr>
				    	</thead>
				    		<tbody >

				      	<!-- call the data-->
				      	<?php 


				      	$result = mysqli_query($db,"SELECT * FROM devices WHERE equipment_type = '0' ");
				      	
						


							while($row = mysqli_fetch_array($result))
							{
							echo "<tr>";
							echo "<td>" . $row['serial_number'] . "</td>";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['model'] . "</td>";
							echo "<td>" . $row['ip'] . "</td>";
								
							//echo "<td><input type='text' id = 'df'  value = 'text'/></td>";
							//echo "<td><input type='text' id = 'du' value = 'text'/></td>";
									
								
								
							echo "<td><form method='post'>
										  <input type='checkbox' id = 'yes' name='yes' value='Yes' onchange='inputChanged(event)'>
										  <label for='yes'> Yes</label><br>
						
										  </form></td>";	
							echo "</tr>";
							
							}

				      	?>
				    	</tbody>
				  		</table>

			  		</div>

			  		<br><br>
		  			<!-- insert the data and send them an email-->
		  			<div class="order">
		  				
		  				<!--<p><button class = "btn btn-primary" id="order-now" type="submit" name="order" value="Reservation" style="background-color: #8A1010 ;" onclick="showTableData()"> Order now </button><br></p>-->
		  				 <p><input type="button" id="bt" value="Show Table Data" style="background-color: #8A1010 ;" onclick="showTableData()" /></p>
		  			</div>

		  		</form>
  			</section>
  				<p id="info"></p>
  
		</div>

		<!-- javascript for the reserved until-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    	<link rel="Stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    	<script src="/path/to/cdn/jquery.min.js"></script>
    	
    	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    	<script type="text/javascript">

        $(function () {

            $("#tblCustomers tbody input[type=datetime]").datepicker();
            $("input[type=datetime]").datepicker();

        });
    	</script>

		

		
			
		<script>


			function myFunction(){

				
				const e_type = document.getElementById('e_name');

				
				const filter = e_type.value.toUpperCase();
		        const table = document.getElementById("tblCustomers");
		        const tr = table.querySelectorAll("tbody tr:not(.header)");

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


		        /*//get the data
				const date_f = document.getElementById('date_from').value;
				const time_f = document.getElementById('time_from').value;
				const date_u = document.getElementById('date_until').value;
				const time_u = document.getElementById('time_until').value;
				const dtfrom= date_f + " " + time_f;
				const dtuntil= date_u + " " + time_u;
		        var src = document.getElementById("df"),
        		dst = document.getElementById("du");

        		for (i = 0; i < table.length; i++) {
	        		src.value = dtfrom;
	        		dst.value = dtuntil;
	        	}*/


		    }
			
		</script>

		<script type="text/javascript">

			//to choose only the selected checkbox
			function inputChanged(event) {
			  event.target.parentElement.parentElement.className =
			    event.target.checked ? 'selected' : '';
			}

		    function showTableData() {
		        document.getElementById('info').innerHTML = "";
		        var myTab = document.getElementById('tblCustomers');
		        var all = [];
		       

		       

		        /*const date_f = document.getElementById('date_from').value;
				const time_f = document.getElementById('time_from').value;
				const date_u = document.getElementById('date_until').value;
				const time_u = document.getElementById('time_until').value;
				const dtfrom= date_f + " " + time_f;
				const dtuntil= date_u + " " + time_u;*/


		        // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
		        for (i = 1; i < myTab.rows.length; i++) {

		            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
		            var objCells = myTab.rows.item(i).cells;

		            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
		            for (var j = 0; j < objCells.length-1; j++) {
		            	
						
		            		info.innerHTML = info.innerHTML + ' ' + objCells.item(j).innerHTML;
		            	
		                
		            }
		            info.innerHTML = info.innerHTML + '\n'; 
		           
		            all = info.innerHTML;
		        }

		      
		        window.alert(all);

		      
		    }
		
		</script>
</body>
</html>