<!DOCTYPE html>
<html>
<head>
	<title>Hospital Staffing Solution Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<style>
	 .divhead
     {
      background-image: url("back.jpg");
      background-repeat: no-repeat;
      background-size: 100% 500px;
	  height: 200px;
	  background-color: aqua;
	  padding-top: 30px;
        
     }
		button{
			height: max-content;
			width:max-content;
			padding: 20px;
			
		}
		.cor
		{
			position: absolute;
			right:100px;
			font-size: 5px;
	
		}
		.cen
		{
			position: absolute;
			left:100px;
			font-size: 10px;
		
		}
		button{
			width:250px;
		}
		body{
  background-image: url("backgr.jpg");
      background-repeat:repeat;
	  background-size: auto;
	
    
}
	</style>
</head>
<body>
	<div id="fixedhead">
	<div class="divhead">
        <center>
            <h1 class="divheading">AgencyMedics</h1>
        </center>
    </div>
		<nav>
			<ul>
				<li><a href="Main.php">Home</a></li>
				<li><a href="Aboutus.php">About Us</a></li>
				<li><a href="Services.php">Services</a></li>
				<li><a href="jobs.php">Jobs</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
			</ul>
		</nav>
	</div>
	<div class="head">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<h1 id="inhead">Hospital Staffing Solutions</h1>
		<h2 id="inheader">Your Trusted Partner in Healthcare Staffing</h2>


	<main>
		<center>
			<div class="cen">
		<table>
			<tr>
				<td>
					<button id="exp"><a href="loginpg.php">Login</a></button>
				</td>
				<td>         </td>
				<td>
					<button id ="exp"><a href="logini.php">SignIn</a></button>
				</td>
			</tr>
		</table>
		</div>
		</center>
		
		<div class="cor">
			<center>
			<table>
				<tr>
					<td>
						<button id="exp"><a href="Hospital.php">Hospital</a></button><br>
					</td>
					<td>
						<button id="exp"><a href="Pharmacy1.php">Pharmacy</a></button><br>
					</td>
					</tr>
					<tr>
					<td>
						<button id="exp"><a href="Main1.php">Patient</a></button><br>
					</td>
					<td>  
						<button id="exp"><a href="Doctor.php">Doctor</a></button><br>
					</td>
				</tr>
				<tr>
					<td>
						<button id ="exp"><a href="Nurse.php">Nurse</a></button><br>
					</td>
				</tr>
			</table>
		</center>
		</div>
			
	</main>
	
	<footer>
		<p id="fixedend">&copy; 2023 Hospital Staffing Solutions. All rights reserved.</p>
	</footer>
	</div>
	
</body>
</html>