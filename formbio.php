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
$mail = $_POST['email'];
$address = $_POST['address'];
$lng = $_POST['languages known'];
$school=$_POST['school'];
$clg=$_POST['clg'];
$Qual=$_POST['qualification'];
$file=$_POST['fileToUpload'];
$conn = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
$insert_data="insert into details(name,age,dob,mail,address,phone,gender,nation,religion,lnk,school,clg,qualification,file) values('$name','$age','$dob','$mail','$address','$phone','$gender','$nation','$religion','$lng','$school','$clg','$Qual','$file');";
$result=mysqli_query($conn,$insert_data);
if(!$result){
    echo("The record was not inserted successfully".mysqli_error($conn));
}
else{
    echo("The record has been inserted successfully");
}  
}
?>