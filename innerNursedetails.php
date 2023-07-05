<html>
<head>
<title> DETAILS </title>
<script type="text/javascript" src="form.js"></script>

<style>
    fieldset{
         background-image:url('imageback.jpg'); 
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: 100% 100%;
    }
    .data
    {
        background-color: white;
        height:fit-content;
        width: fit-content;
        padding:25px;
        border-spacing: 20px;
        position: relative;
        left:37%;
    }
    a
    {
        text-decoration: none;
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
<center>
<h1 style="color:red;">BIO-DATA</h1>
</center>

<fieldset>
    <div class="data">
<form  method="POST">
    <!--action="innerNursedetails.php" enctype="multipart/form-data"-->
<center>
<table>
    <tr>
        <td>
            <label for="name">Name:</label><br>
        </td>
        <td>
            <input type="text" id="name" name="name" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="age">Age: </label><br>
        </td>
        <td>
            <input type="number" id="name" name="age" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="dob">Date of birth: </label><br>
        </td>
        <td>
            <input type="date" id="name" name="dob" required><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="gender">Gender:</label><br> 
        </td>
        <td>
            <input type="radio" id="name" name="gender" required>
            <label for="gender"> Male</label><br>
            <input type="radio" id="gender" name="gender" required>
            <label for="gender"> Female</label><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for ="nationality"> Nationality:</label><br>
        </td>
        <td>
            <input type="text" id="name" name="nationality" required><br><br>
        </td>
    </tr>
    <tr>
    <td><label for="religion">Religion:</label></td>
                <td><input type="radio" name="religion" value="Hindu" id="Hindu" required>
                    <label for="Hindu">Hindu</label>
                    <input type="radio" name="religion" value="Christian" id="Christian" required>
                    <label for="Christian">Christian</label>
                    <input type="radio" name="religion" value="Muslim" id="Muslim" required>
                    <label for="Muslim">Muslim</label>
                    <input type="radio" name="religion" value="other" id="other" required>
                    <label for="other">Other</label><br><br></td>
    </tr>
    <tr>
        <td>
            <label for="phone">Phone NO:</label><br>
        </td>
        <td>
            <input type ="tel" id="phone" name="phone" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="email">Email ID:</label><br>
        </td>
        <td>
            <input type ="email" id="name" name="email" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for ="address"> Address:</label><br>
        </td>
        <td>
            <textarea name="address" rows="5" cols="31" required></textarea><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for ="experience"> experience:</label><br>
        </td>
        <td>
            <input type="text" id="name" name="experience">
           <br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="qualification">Qualification:</label><br>
        </td>
        <td>
            <input type="text" name="qualification" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="otherqualification">Other Skills</label><br>
        </td>
        <td>
            <input type="text" name="otherqualification" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="school">Name of the school:</label><br>
        </td>
        <td>
            <input type="text" name="school" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="clg">Name of the college:</label><br>
        </td>
        <td>
            <input type="text" name="clg" required><br><br>
        </td>
    </tr>
    <tr><td></td><td><input type="submit" onclick="validateform()" value="Submit"><a href="Nurse.php"></a></td></tr>
</table>
</center>
</form>
</div>
</fieldset>
<?php

if(isset($_POST['submit'])) 
{
$prof="";
$name = $_POST['name'];
$age = $_POST['age'];
$dob=$_POST['dob'];
$gender = $_POST['gender'];
$nation=$_POST['nationality'];
$religion=$_POST['religion'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$lng = $_POST['experience'];
$school=$_POST['school'];
$clg=$_POST['clg'];
$Qual=$_POST['qualification'];
$file=$_POST['otherqualification'];
$conn = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
$insert_data="insert into details(name,age,dob,mail,address,phone,gender,nation,religion,lnk,school,clg,qualification,file) values('$name','$age','$dob','$mail','$address','$phone','$gender','$nation','$religion','$lng','$school','$clg','$Qual','$file');";
$result=mysqli_query($conn,$insert_data);
if(!$result){
    echo("The record was not inserted successfully".mysqli_error($conn));
}
else{
    echo "<a href='Nurse.php'>Sucess</a>";
}  
}
?>
</body></html>