<?php
$user = 'root';
$password = '';
$database = 'agencyhut';
$servername='localhost:3308';
$mysqli = new mysqli($servername, $user,
                $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
$sql = " SELECT * FROM pharmacy ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
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
        table
        {
          border: 2px dotted black;
          text-align: left;
          width: 700px;
          
        }
        tr,td
        {
          border: 1px dotted black;
        }
        .mov
        {
          
          width:max-content;
          height: fit-content;
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
	<div>
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
	</div>
	</header>
	<center>
	<main>
		<center><h1>Pharmacy Details</h1>
   
            <table>
                <tr><td>
            <div class="par">
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
                  <center>
                  <table style="2px dotted black;">
                
                  <tr><td>ID:</td><td><?php echo $rows['id'];?></td></tr>
                  <tr><td>Name:</td><td><?php echo $rows['Name'];?></td></tr>
                  <tr><td>Location:</td><td><?php echo $rows['Loc'];?></td></tr>
                  <tr><td>PHONE:</td><td><?php echo $rows['phone'];?></td></tr>
                  <tr><td>Mail:</td><td><?php echo $rows['mail'];?></td></tr>
                  <tr><td>Order:</td><td><?php echo $rows['ord'];?></td>
            </tr>
                  </table>
                  </center>
                </div>
              </div>
              </div><br><br>
            </div>
                </div>
            <?php
                }
            ?>
            </div>
        </td>
              </tr>
            </table>
            </center>
            <br><br><br><br><br><br><br><br><br>
	</main>
	</center>
	<footer>
		<p id="fixedend">&copy; 2023 Hospital Staffing Solutions. All rights reserved.</p>
	</footer>
	
</body>
</html>