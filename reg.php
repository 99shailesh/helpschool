<?php
session_start();
$con=mysqli_connect("localhost","root","","helpschool");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
    $uname=$_POST["uname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $psw=$_POST["psw"];
    $type=$_POST["type"];
    $sql1="INSERT INTO  reg (uname, email, phone, psw, type) VALUES ('$uname','$email','$phone','$psw','$type')";
    $sql2=" INSERT INTO user (uname,psw,type) VALUES ('$uname','$psw','$type')";
    $result=mysqli_query($con,$sql2);
    // echo '<script>alert("'.$sql.'");</script>';
        
    if(mysqli_query($con,$sql1))
    {
        $_SESSION["msg"]="sucsessfull ".$uname." on ".$email." and ".$phone;
        $_SESSION["new_usr"]=$uname;
        header('location:dashbord.php');
        exit();
    }
    else
    {
        $_SESSION["msg"]="Error: " . $sql1 ."" . mysqli_error($con);
        echo '<script>alert("'.$_SESSION["msg"].'");</script>';
        exit();
    }

    
}
?>
