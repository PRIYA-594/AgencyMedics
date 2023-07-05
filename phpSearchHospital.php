<?php

$search = $_POST['search'];



$servername = "localhost:3308";
$username = "root";
$password = "";
$db = "agencyhut";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from hospital where name like '%$search%'";

$result = $conn->query($sql);

$sql2 = "select * from details where name like '%$search%'";

$res2 = $conn->query($sql2);
$sql3 = "select * from doctor where name like '%$search%'";

$res3 = $conn->query($sql3);

$conn->close();

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
    <a class="active" href="Hospital.php">Home</a>
        <a href="hospital3.php">Hospital</a>
        <a href="Nurse3.php">Nurse</a>
        <a href="doctor2.php">Doctor</a>
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
		<center><h1>Hospital Details</h1>
   
            <table>
                <tr><td>
            <div class="par">
            <?php
                    if ($result->num_rows > 0){
                        while($rows = $result->fetch_assoc() ){
                            echo " Your Searched result is as follows...."

                    
            ?>
                  <center>
                  <table style="2px dotted black;">
                
                  <tr><td>ID:</td><td><?php echo $rows['id'];?></td></tr>
                  <tr><td>Name:</td><td><?php echo $rows['Name'];?></td></tr>
                  <tr><td>Location:</td><td><?php echo $rows['Location'];?></td></tr>
                  <tr><td>PHONE:</td><td><?php echo $rows['phone'];?></td></tr>
                  <tr><td>Mail:</td><td><?php echo $rows['mail'];?></td></tr>
                  <tr><td>No of Nurses:</td><td><?php echo $rows['Nurses'];?></td>
                  <tr><td>No of Doctors:</td><td><?php echo $rows['Doctors'];?></td>
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
            }
            else {
                echo "0 records";
            }
            ?>
            </div>
        </td>
              </tr>
            </table>
            </center>
            <br><br><br><br><br><br><br><br><br>

            <center><h1>Nurse Details</h1>
   
            <table>
                <tr><td>
            <div class="par">
            <?php
                    if ($res2->num_rows > 0){
                        while($rows = $res2->fetch_assoc() ){
                            echo " Your Searched result is as follows...."

                    
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
            }
            else {
                echo "0 records";
            }
            ?>
            </div>
        </td>
              </tr>
            </table>
            </center>
            <br><br><br><br><br><br><br><br><br>


                  <center><h1>Doctor Details</h1>
   
   <table>
       <tr><td>
   <div class="par">
   <?php
           if ($res3->num_rows > 0){
               while($rows = $res3->fetch_assoc() ){
                   echo " Your Searched result is as follows...."

           
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
   }
   else {
       echo "0 records";
   }
   ?>
   </div>
</td>
     </tr>
   </table>
   </center>
   <br><br><br><br><br><br><br><br><br>

   <!--<center><h1>Pharmacy Details</h1>

   <table>
       <tr><td>
   <div class="par">
   <?php
          /* if ($res1->num_rows > 0){
               while($rows = $res1->fetch_assoc() ){
                   echo " Your Searched result is as follows...."

           
   ?><center>
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
       /*}
   }
   else {
       echo "0 records";
   }*/
   ?>*/
   </div>
</td>
     </tr>
   </table>
   </center>
   <br><br><br><br><br><br><br><br><br>-->

	</main>
	</center>
	<footer>
		<p id="fixedend">&copy; 2023 Hospital Staffing Solutions. All rights reserved.</p>
	</footer>
	
</body>
</html>