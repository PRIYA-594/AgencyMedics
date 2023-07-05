<html>  
<head>  
    <title>login</title>  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <style>

        input{
            border-radius: 25px;
            background-color: bisque;
        }
        #btn
        {
            url("Main1.php");
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
    <h1 style="color:red">LOGIN</h1>
    <div style="height: fit-content;width:fit-content; border: 2px solid black;padding: 10px;word-spacing: 1px;border-spacing: 10px;background-color: gainsboro;">
        <h1>Login</h1>  
        <form name="f1" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" name="submit" value = "Login" />  
            </p>  
        </form>  
    </div>    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html> 
<?php      
if(isset($_POST['submit']))  {
  $con = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    error_reporting(E_ERROR | E_PARSE);
    $Name = $_POST['user'];  
    $password = $_POST['pass'];  
    $prof=$_POST['profession'];
      
        $Name = stripcslashes($Name);  
        $password = stripcslashes($password);  
       //$profession = stripcslashes($profession);  
        $Name = mysqli_real_escape_string($con, $Name);  
        $password = mysqli_real_escape_string($con, $password);  
        //$profession = mysqli_real_escape_string($con, $prof);  
      
        $sql = "select *from userdetails where name = '$Name' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){     
        if($prof=="Doctor")
        {
            echo "<h1><center> <a href='Doctor.php'
            >Login successful</a> </center></h1>";
        }
        if($prof=="Nurse")
        {
            echo "<h1><center> <a href='Nurse.php'
            >Login successful</a> </center></h1>";
        }
        if($prof=="Patient")
        {
            echo "<h1><center> <a href='Main1.php'
            >Login successful</a> </center></h1>";
        }
        if($prof=="Pharmacy")
        {
            echo "<h1><center> <a href='Pharmacy.php'
            >Login successful</a> </center></h1>";
        }
        else
        {
            echo "<h1><center> <a href='Hospital.php'
            >Login successful</a> </center></h1>";
        }
    } 
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
}  
?>   