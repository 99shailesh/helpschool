<?php
session_start();
$con=mysqli_connect("localhost","root","","helpschool");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
    $t_name=$_POST["name"];
    $email=$_POST["mail"];
    $amount=$_POST["amount"];
    $description=$_POST["description"];
    $uname=$_SESSION["usr"];
    $sql="insert into application (t_name, uname, email, amount, description) values ('$t_name','$uname','$email','$amount','$description')";
    if(mysqli_query($con,$sql))
    {
         $_SESSION["amsg"]="sucsessfull application for ".$_SESSION["usr"]." for ".$email." for ".$amount." to ".$t_name;
         header('location:student.php');
         exit();
    }
    else
    {
        $_SESSION["amsg"]="Error: " . $sql . "<br>" . mysqli_error($con);
        header('location:student.php');
        exit();
    }

    
}
?>
