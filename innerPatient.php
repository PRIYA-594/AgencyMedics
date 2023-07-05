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
<h1 style="color:red;">ABOUT</h1>
</center>

<fieldset>
    <div class="data">
<form  method="POST">
    <!--action="innerDoctorDetails.php" enctype="multipart/form-data"-->
<center>
<table>
    <tr>
        <td>
            <label for="name">Name of the Patient:</label><br>
        </td>
        <td>
            <input type="text" id="name" name="name" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="age">age </label><br>
        </td>
        <td>
            <input type="number" id="name" name="age" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="phone">CONTACT NO: </label><br>
        </td>
        <td>
            <input type="tel" id="name" name="phone" required><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="mail">Mail ID:</label><br> 
        </td>
        <td>
            <input type="mail" id="name" name="mail" required>
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
    <td><label for="disease">Disease:</label></td>
    <td><input type="text" id="name" name="disease" required>
                    <br><br></td>
    </tr>
    <tr><td></td><td><input type="submit" value="Submit"></td></tr>
</table>
</center>
</form>
<?php

if(isset($_POST['submit'])) 
{
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];

$conn = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
$insert_data="insert into patient(Name,age,phone,mail,gender,disease) values('$name','$age','$phone','$mail','$gender','$disease');";
$result=mysqli_query($conn,$insert_data);
if(!$result){
    echo("The record was not inserted successfully".mysqli_error($conn));
}
else{
    echo"<a href='Doctor.php'>Sucess</a>";
}  
}
?>
</div>
</fieldset>


</body></html>