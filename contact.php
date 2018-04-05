<?php
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
if(isset($_POST['contact']))
{
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$query=$_POST['query'];

if($name=='')
{
echo "<script> alert('Enter your name')</script>";
echo "<script>window.open('contact.html','_self')</script>";
}

if($mobile=='')
{
echo "<script> alert('Enter mobile number')</script>";
echo "<script>window.open('contact.html','_self')</script>";
}
if($email=='')
{
echo "<script> alert('Enter email id')</script>";
echo "<script>window.open('contact.html','_self')</script>";
}
if($subject=='')
{
echo "<script> alert('Enter Subject of your Query')</script>";
echo "<script>window.open('contact.html','_self')</script>";
}

else
{
$ins= "INSERT INTO contact_us(Name,Email,Mobile,Query_Subject,Query) values('$name' , '$email' ,'$mobile' ,'$subject' ,'$query')" ;
 
if(mysqli_query($con, $ins)){
    echo "<script> alert('Your Queries Posted....You will be intimated within 24 hours....')</script>";
echo "<script>window.open('contact.html','_self')</script>";
} 
else
{
echo"<script> window.open('sign up.html', '_self')</script>";
}
}
}
?>