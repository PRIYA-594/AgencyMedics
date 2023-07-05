<!DOCTYPE html>
<html>
<head>
	<title>Hospital User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <style>
        td{
            text-align: center;
            padding: 20px;
            border-spacing: 20px;
        }
    </style>
	<style>
	 .divhead
     {
      background-image: url("back.jpg");
      background-repeat: no-repeat;
      background-size: 100% 200px;
        height: 200px;
        padding-top: 10px;
        padding-bottom: 10px;
        width:100%;
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
    <div class="topnav">
        <a class="active" href="Main1.php">Home</a>
        <a href="Nurse1.php">Nurse Recruiting</a>
        <a href="doctor1.php">Doctor Recruiting</a>
        <a href="Pharmacy.php">Pharmacy</a>
		<a href="hospital1.php">Hospital</a>
        <a href="DoctorApp.php">Appointment Booking</a>
        <a class="dactive" href="Main.php">Exit</a>
        <div class="search-container">
        <form action="phpSearchOption.php" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
		<!--<nav>
			<ul>
				<li><a href="Main.php">Home</a></li>
				<li><a href="Aboutus.php">About Us</a></li>
				<li><a href="Services.php">Services</a></li>
				<li><a href="jobs.php">Jobs</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
			</ul>
		</nav>-->
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<h1 id="inhead">Hospital Staffing Solutions</h1>
		<h2 id="inheader">Your Trusted Partner in Healthcare Staffing</h2>
	</header>
	
	<main>
		<center>
		<table>
			<tr>
                <td>
                    <h1>Patient        </h1>
                </td>
				<td>
					<button id="exp" class="exp"><a href="innerPatient.php">Click Here To Update</a></button>
				</td>
            </tr>
		</table>
		</center>
	</main>
	
	<footer>
		<p id="fixedend">&copy; 2023 Hospital Staffing Solutions. All rights reserved.</p>
	</footer>
	
</body>
</html>