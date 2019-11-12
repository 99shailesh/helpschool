<?php
session_start();
$con=mysqli_connect("localhost","root","","helpschool");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
    $tname=$_POST["name"];
    $mail=$_POST["mail"];
    $amount=$_POST["amount"];
    $descc=$_POST["description"];
    $uname=$_SESSION["usr"];
    $sql="INSERT INTO `application`(`amount`, `description`, `t_name`, `uname`, `email`) VALUES ('.$amount.','$descc','$tname','$uname','$mail')";
    if(mysqli_query($con,$sql))
    {
         $_SESSION["amsg"]="sucsessfull application for ".$_SESSION["usr"]." for ".$mail." for ".$amount." to ".$tname;
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
