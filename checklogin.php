<?php

include"connection.php";

$name=$_POST["mid"];
$email=$_POST["eid"];
$pass=$_POST["pid"];
$s="select * from signuptable where emailid='$email' and password='$pass' and mobile='$name'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_row($result);
if($row==NULL || $email==(NULL)|| $name==(NULL)||$pass==(NULL)){
    echo "Your email or password is not correct";
   // echo $s;

}
else{
    session_start();
    $_SESSION["mainname"]=$name;
    echo "Login Successful";
    header("location: secondpage.php ");
}

