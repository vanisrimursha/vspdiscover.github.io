<?php
include "classes/class.phpmailer.php";
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
if(isset($_POST['profile']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];

session_start();
$uname= $_SESSION['uname'];

$email = $_SESSION['email'];

if($fname=='')
{
echo "<script> alert('Enter first name')</script>";
echo "<script> window.open('uprofile.html','_self')</script>";
}


if($mobile=='')
{
echo "<script> alert('Enter Mobile Number')</script>";
echo "<script> window.open('uprofile.html','_self')</script>";
}
if($gender=='')
{
echo "<script> alert('Choose Your Gender')</script>";
echo "<script> window.open('uprofile.html','_self')</script>";
}


else
{
$ins = "UPDATE update_profile SET fname = '$fname', lname = '$lname', mobile = '$mobile', gender = '$gender' , profilepic = '' WHERE email = '$email'";

if(mysqli_query($con, $ins)){
    echo "Records were inserted successfully.";
echo "<script>window.open('profile.php','_self')</script>";
} 
else
{
die('error: '. mysqli_error($con));
/*echo"<script> alert('error occurs')</script>";
echo"<script> window.open('uprofile.html', '_self')</script>";*/
}
}
}
?>