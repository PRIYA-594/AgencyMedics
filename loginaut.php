<?php
//(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phoneno'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    /*if($profession=="Doctor")
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
    }*/
    $profession = $_POST['profession'];
    switch($profession)
    {
        case 'Doctor':
            $prof='Doctor';
            echo '<a href="Doctor.php">Doctor</a>';
            break;
        case 'Nurse':
            $prof='Nurse';
            echo '<a href="Nurse.php">Doctor</a>';
            break;
        case 'Pharmacy':
            $prof='Pharmacy';
            echo '<a href="Pharmacy.php">Doctor</a>';
            break;
        case 'Patient':
            $prof='Patient';
            echo '<a href="Patient.php">Doctor</a>';
            break;
        default:
        $prof='other';
           echo '<a href="Patient.php">Doctor</a>';
    }
    $conn = mysqli_connect("localhost:3308" , "root" , "", "agencyhut");
    $insert_data="insert into userdetails(Name,age,mail,password,phoneno,gender,profession) values('$name','$age','$mail','$password','$phone','$gender','$prof');";
    $result=mysqli_query($conn,$insert_data);
    if(!$result){
        echo("The record was not inserted successfully".mysqli_error($conn));
    }
    else{
        echo("The record has been inserted successfully");
    }  

?>
</body>
</html>                                                                                                                                                                       <?php