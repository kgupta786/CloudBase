<?php
include "connection.php";

$email=$_POST["eid"];
$mobile=$_POST["mid"];
$pass=$_POST["pid"];
$confirmpass=$_POST["cpid"];



if($pass==$confirmpass){

$que="insert into signuptable values('$email','$mobile','$pass');";


mysqli_query($conn,$que);



}
else{

}