<?php
@include 'config.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

		<!-- Bootstrap core CSS -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

		
		

		<!-- css fpor the calender-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:400,700">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!-- Core Stylesheet -->
		<link rel="stylesheet" href="evo-calendar.css" />
		<!-- Optional Themes -->
		<link rel="stylesheet" href="evo-calendar.midnight-blue.css" />
		<link rel="stylesheet" href="evo-calendar.orange-coral.css" />
		<link rel="stylesheet" href="evo-calendar.royal-navy.css" />
		<!-- JavaScript -->
		<script src="jquery.min.js"></script>
		<script src="evo-calendar.js"></script>

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
				
			  margin: 20px;
			  background-color: #EEEDE9;
			  -webkit-font-smoothing: antialiased;
			  text-rendering: optimizeLegibility;
			  font-size: 96.5%;
			  font-family: Helvetica, Arial, sans-serif;

		  	
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
			input#search { color: whitesmoke; }
			
			/*calendar*/

			.clearfix{
				clear: none;
			}
			.calendar{
			  position: absolute;
			  border-radius: 4px;
			  overflow: hidden;
			  width: 800px;
			  height: 450px;
			  left: 50%;
			  margin-left: -400px;
			  margin-top: -225px;
			  top: 50%;
			  background-color: #ffffff;
			  color: #333333;
			}

			.calendar h1, .calendar h2{
			  font-weight: 300;
			  font-size: 26px;
			  line-height: 28px;
			  text-transform: uppercase;
			  margin: 0px 0px 20px 0px;
			}

			.calendar h1 span{
			  display: block;
			}

			.calendar .col{
			  position: relative;
			  float: left;
			  height: 100%;
			}

			.calendar .col .content{
			  padding: 40px;
			}

			.calendar ul{
			  margin: 0px;
			}

			.calendar ul li{
			  list-style: none;
			}

			.calendar .leftCol{
			  width: 40%;
			  background-color: #8A1010;
			}

			.calendar .noteList li{
			  color: #ffffff;
			  margin-bottom: 10px;
			}

			.calendar .notes p,
			.calendar .notes input,
			.calendar .noteList li{
			  font-weight: 300;
			  font-size: 14px;
			}

			.calendar .notes p{
			  border-bottom: solid 1px rgba(255,255,255,0.4);
			}

			.calendar .notes input{
			  background-color: #8A1010;
			  color: #ffffff;
			  border: none;
			  width: 200px;
			}

			.calendar .addNote,
			.calendar .removeNote{
			  float: right;
			  color: rgba(255,255,255,0.4);
			  font-weight: bold;
			  margin-left: 20px;
			}

			.calendar .addNote:hover,
			.calendar .removeNote:hover{
			  color: #ffffff;
			}

			.calendar .addNote{
			  font-size: 16px;
			}

			.calendar .leftCol h1{
			  color: #ffffff;
			  margin-bottom: 40px;
			}

			.calendar .rightCol{
			  width: 60%;
			}

			.calendar .rightCol h2{
			  color: #C7BEBE;
			  text-align: right;
			  margin-bottom: 70px;
			}

			.calendar .months li,
			.calendar .weekday li,
			.calendar .days li{
			  float: left;
			  text-transform: uppercase;
			}

			.calendar .months li a,
			.calendar .weekday li a,
			.calendar .days li a{
			  display: block;
			  color: #747978;
			}

			.calendar .months li a{
			  font-size: 10px;
			  color: #C7BEBE;
			  text-align: center;
			  width: 32px;
			  margin-bottom: 20px;
			}

			.calendar .months li .selected{
			  font-weight: bold;
			  color: #747978;
			}

			.calendar .weekday li a{
			  width: 55px;
			  text-align: center;
			  margin-bottom: 20px;
			  font-size: 12px;
			}

			.calendar .days li{
			  width: 55px;
			}

			.calendar .days li a{
			  width: 36px;
			  height: 24px;
			  text-align: center;
			  margin: auto auto;
			  font-size: 12px;
			  font-weight: bold;
			  border-radius: 12px;
			  margin-bottom: 10px;
			  padding-top: 10px;
			}


			.calendar .days li a:hover{
			  background-color: #EEEDE9;
			}

			.calendar .days li .selected{
			  background-color: #8A1010!important;
			  color: #ffffff;
			}

			.calendar .days li .event{
			  color: #F5A1A3;
			}

			.calendar input{
			  font-family: Helvetica, Arial, sans-serif;
			}

			.calendar h1, h2, h3, h4, h5, p{
				margin-bottom: 10px;
			}

			.calendar p{
			  line-height: 20px;
			}

			.calendar a{
				 text-decoration: none;
  				 color: #FF462B;
			}


			.animate{
			  -webkit-transition: all 0.3s ease-in-out;
			  -moz-transition: all 0.3s ease-in-out;
			  transition: all 0.3s ease-in-out;
			}


			/* placeholder color */
			::-webkit-input-placeholder {color: #ffffff; }
			:-moz-placeholder {color: #ffffff; }
			::-moz-placeholder {color: #ffffff; }
			:-ms-input-placeholder {color: #ffffff; }

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
	                    <a href="#">
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
	                    <a href="historydua.php">
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
					<br><h1 style="color:#8A1010;font-size:25px; text-align:center; "><b>Inventory Management Tool</b></h1>
					<h3 style="color:#8A1010; font-size:12px; text-align:center;"> <i>Welcome to the administrator dashboard! <br> Please choose the date to check the availability of the equipments!</i></h3><br><br>

					<!--<div id="content">
	  				 for the calendar
	  				
		  				<div id="left">
		     				
		     				
		  				</div>
		  				<!-- for the search function
		  				<div id="right" >
		    				
		  				</div>
	    		
	  				</div>-->


	  				<div class="calendar">

				      <div class="col leftCol">
				        <div class="content">
				          <h1 class="date">Friday<span>July 12th</span></h1>
				          <div class="notes">
				            <p>
				              <input type="text" value="" placeholder="Select Equipment Type"/>
				              <a href="#" title="Add note" class="addNote animate">+</a>
				            </p>
				            <ul class="noteList">
				              <li>Beamer<a href="#" title="Remove note" class="removeNote animate">x</a></li>
				            </ul>
				          </div>
				        </div>
				      </div>

				      <div class="col rightCol">
				        <div class="content">
				          <h2 class="year">2022"</h2>
				          <ul class="months">
				            <li><a href="#" title="Jan" data-value="1">Jan</a></li>
				            <li><a href="#" title="Feb" data-value="2">Feb</a></li>
				            <li><a href="#" title="Mar" data-value="3">Mar</a></li>
				            <li><a href="#" title="Apr" data-value="4">Apr</a></li>
				            <li><a href="#" title="May" data-value="5">May</a></li>
				            <li><a href="#" title="Jun" data-value="6">Jun</a></li>
				            <li><a href="#" title="Jul" data-value="7" class="selected">Jul</a></li>
				            <li><a href="#" title="Aug" data-value="8">Aug</a></li>
				            <li><a href="#" title="Sep" data-value="9" >Sep</a></li>
				            <li><a href="#" title="Oct" data-value="10">Oct</a></li>
				            <li><a href="#" title="Nov" data-value="11">Nov</a></li>
				            <li><a href="#" title="Dec" data-value="12">Dec</a></li>
				          </ul>
				          <div class="clearfix"></div>
				          <ul class="weekday">
				            <li><a href="#" title="Mon" data-value="1">Mon</a></li>
				            <li><a href="#" title="Tue" data-value="2">Tue</a></li>
				            <li><a href="#" title="Wed" data-value="3">Wed</a></li>
				            <li><a href="#" title="Thu" data-value="4">Thu</a></li>
				            <li><a href="#" title="Fri" data-value="5">Fri</a></li>
				            <li><a href="#" title="Say" data-value="6">Sat</a></li>
				            <li><a href="#" title="Sun" data-value="7">Sun</a></li>
				          </ul>
				          <div class="clearfix"></div>
				          <ul class="days">
				            <script>
				              for( var _i = 1; _i <= 31; _i += 1 ){
				                var _addClass = '';
				                if( _i === 12 ){ _addClass = ' class="selected"'; }
				                
				                switch( _i ){
				                  case 8:
				                  case 10:
				                  case 27:
				                    _addClass = ' class="event"';
				                  break;
				                }

				                document.write( '<li><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
				              }
				            </script>
				          </ul>
				          <div class="clearfix"></div>
				        </div>
				      </div>

				      <div class="clearfix"></div>

				    </div>
				</section>

				<section>
					<div id="evoCalendar">
						<!--https://www.jqueryscript.net/time-clock/event-calendar-evo.html-->

					</div>
				</section>

				<!--<section id = 'diagramm'>
					<br>
					<div id="digram">
						<p style="text-align: center; font-weight: bold;">"Here should be diagramm for analysis "</p>
					</div>
					<br>
				</section>


	  			<section id= 'third'>
    		
    			
    			<div class="table-wrapper-scroll-y my-custom-scrollbar">
    			<table class="table table-bordered table-hover mb-0"  id="myTable">
		    	<thead>
		     	<tr>
		        	<th>Serial Nr.</th>
		        	<th>Model</th>
		        	<th>Name</th>
		        	<th>Equipment Type</th>
		        	<th>IP</th>
		        	<th>Purchase Date</th>
		        	<th>Purchase Price</th>
		        	<th>Status</th>
		        	<th>Comment</th>
		        	
		      	</tr>
		    	</thead>
		    	<tbody id="get_product">
		      	
		      	<!-- call the data
		      	<?php 


		      	$result = mysqli_query($db,"SELECT * FROM devices WHERE status != '0'");


				while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $row['serial_number'] . "</td>";
				echo "<td>" . $row['model'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['equipment_type'] . "</td>";
				echo "<td>" . $row['ip'] . "</td>";
				echo "<td>" . $row['purchase_date'] . "</td>";
				echo "<td>" . $row['purchase_price'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				echo "<td>" . $row['comment'] . "</td>";
				
				echo "</tr>";
				}

		      	?>

		    	</tbody>
		  		</table>
		  		</div>
		  		<br>
  			</section>-->

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