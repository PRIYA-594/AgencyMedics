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
$sql = " SELECT * FROM doctor ORDER BY id DESC ";
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
    <a class="active" href="Hospital.php">Home</a>
        <a href="hospital3.php">Hospital</a>
        <a href="Nurse3.php">Nurse</a>
        <a href="doctor2.php">Doctor</a>
        <a class="dactive" href="Main.php">Exit</a>
        <div class="search-container">
        <form action="phpSearchHospital.php" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
	</div>
	</header>
	<center>
	<main>
		<center><h1>Doctor Details</h1>
   
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
                  <tr><td>Name:</td><td><?php echo $rows['name'];?></td></tr>
                  <tr><td>AGE:</td><td><?php echo $rows['age'];?></td></tr>
                  <tr><td>Gender:</td><td><?php echo $rows['gender'];?></td></tr>
                  <tr><td>DOB:</td><td><?php echo $rows['dob'];?></td></tr>
                  <tr><td>Nation:</td><td><?php echo $rows['nation'];?></td></tr>
                  <tr><td>Religion:</td><td><?php echo $rows['religion'];?></td></tr>
                  <tr><td>PHONE NO:</td><td><?php echo $rows['phone'];?></td></tr>
                  <tr><td>MAIL:</td><td><?php echo $rows['mail'];?></td></tr>
                  <tr><td>Address:</td><td><?php echo $rows['address'];?></td></tr>
                  <tr><td>Experience:</td><td><?php echo $rows['lnk'];?></td></tr>
                  <tr><td>School:</td><td><?php echo $rows['school'];?></td></tr>
                  <tr><td>College:</td><td><?php echo $rows['clg'];?></td></tr>
                  <tr><td>Qualification:</td><td><?php echo $rows['qualification'];?></td></tr>
                  <tr><td>Other Skills:</td><td><?php echo $rows['file'];?></td>
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