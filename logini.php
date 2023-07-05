<html>
<head>
    <title>SignIn</title>
    <link rel="stylesheet" href="style.css">
    <style>

        input{
            border-radius: 25px;
            background-color: bisque;
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
    <script>
        $(document).ready(function(){
            $('.submit').onclick(function(){
                $('.submit').hide(1000);
            });
        });
    </script>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
    <h1 style="color:red">SIGNIN</h1>
    <div style="height: fit-content;width:fit-content; border: 2px solid black;padding: 10px;word-spacing: 1px;border-spacing: 10px; background-color:gainsboro;">
    <form method="post">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name" required><br><br></td>
            </tr>
            <tr>
                <td><label for="age">Age:</label></td>
                <td><input type="number" name="age" id="age" required><br><br></td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td><input type="radio" name="gender" value="male" id="gender-male" required>
                    <label for="gender-male">Male</label>
                    <input type="radio" name="gender" value="female" id="gender-female" required>
                    <label for="gender-female">Female</label><br><br></td>
            </tr>
            <tr rowspan="3" colspan="2">
                <center>
               <td><label for="profession">Role:</label></td>
                <td><input type="radio" name="profession" value="Patient" id="Patient" required>
                    <label for="Patient">Patient</label>
                    <input type="radio" name="profession" value="Doctor" id="Doctor" required>
                    <label for="Doctor">Doctor</label>
                    <input type="radio" name="profession" value="Nurse" id="Nurse" required>
                    <label for="Nurse">Nurse</label>
                    <input type="radio" name="profession" value="Pharmacy" id="Pharmacy" required>
                    <label for="Pharmacy">Phramacy</label>
                    <input type="radio" name="profession" value="Hospital" id="other" required>
                    <label for="Hospital">Hospital</label><br><br></td><br><br><br>
                </center>
            </tr>
            <tr>
                <td><label for="phoneno">Phone No:</label></td>
                <td><input type="tel" name="phoneno" id="phoneno" required><br><br>
                </td>
            </tr>
            <tr><td><label for="mail">email:</label></td><td><input type="email" name="mail" id="mail" required><br><br></td></tr>
            <tr><td><label for="password">PAssword:</label></td>
                <td><input type="password" name="password" id="password" required><br><br></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" class="submit" name="submit" value="Submit">
            </center></td>
            </tr>
        </table>
    </form></div>
    </center>
    <footer>
		<p id="fixedend">&copy; 2023 Hospital Staffing Solutions. All rights reserved.</p>
	</footer>
    <?php

    if(isset($_POST['submit'])) 
    {
    $prof="";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phoneno'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $profession = $_POST['profession'];

    if($profession=="Doctor")
    {
        header('Location:Doctor.php');
    }
    if($profession=="Nurse")
    {
        header('Location:Nurse.php');
    }
    if($profession=="Patient")
    {
        header('Location:Patient.php');
    }
    if($profession=="Pharmacy")
    {
        header('Location:Pharmacy.php');
    }
    else
    {
        header('Location:Main1.php');
    }
    $conn = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
    $insert_data="insert into userdetails(Name,age,mail,password,phoneno,gender,profession) values('$name','$age','$mail','$password','$phone','$gender','$profession');";
    $result=mysqli_query($conn,$insert_data);
    if(!$result){
        echo("The record was not inserted successfully".mysqli_error($conn));
    }
    else{
        alert("The record has been inserted successfully");
        sleep(1);
        echo "<h1><center><a href='Main1.php'>The record has been inserted successfully</a></center></h1>";
    }  
    }
?>
</body></html> 