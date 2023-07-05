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
            <label for="name">Name of the Pharmacy:</label><br>
        </td>
        <td>
            <input type="text" id="name" name="name" required><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="loc">Location: </label><br>
        </td>
        <td>
            <input type="text" id="name" name="loc" required><br><br>
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
    <td><label for="order">Order Availability:</label></td>
                <td><input type="radio" name="order" value="Hindu" id="Hindu" required>
                    <label for="Hindu">Available</label>
                    <input type="radio" name="order" value="Christian" id="Christian" required>
                    <label for="Christian">NOt Available</label>
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
$loc = $_POST['loc'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$ord = $_POST['order'];
$conn = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
$insert_data="insert into pharmacy(Name,Loc,phone,mail,ord) values('$name','$loc','$phone','$mail','$ord');";
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