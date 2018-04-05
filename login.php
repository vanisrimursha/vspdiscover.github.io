<?php
session_start();
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
    if($username=='')
	{
		echo "<script>alert('ENTER THE USERNAME')</script>";	
	}
	if($password=='')
	{
		echo "<script>alert('ENTER THE PASSWORD')</script>";
		echo "<script>window.open('login.html','_self')</script>";
	}
	else{
$query="SELECT * FROM student_login WHERE username='$username' AND password='$password'";
		$run=(mysqli_query($con,$query)) or die("error");
		if(mysqli_num_rows($run)>0)
		{
		$_SESSION['uname'] = $username;
		$_SESSION['course_count'] = 0;
		echo "<script>window.open('frames.html','_self')</script>";
		echo"<script>window.open('logo.php','_blank')</script>";
		echo"<script>window.open('content.php','_blank')</script>";
		echo "<script>window.open('logout.php','_blank')</script>";
		echo "<script>window.open('profile.php','_blank')</script>";
		echo "<script>window.open('pending.php','_blank')</script>";
		echo "<script>window.open('update_profile.php','_blank')</script>";
		echo"<script>window.open('favourites.php','_blank')</script>";
		echo"<script>window.open('logo.php','frames.html')</script>";
		}
	else{ 
		echo"<script>alert('USERNAME AND PASSWORD ARE INCORRECT')</script>";
		echo "<script>window.open('login.html','_self')</script>";
	}
	}
}
?>