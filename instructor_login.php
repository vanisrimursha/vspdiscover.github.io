<?php
session_start();
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
if(isset($_POST['login']))
{
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	
	
    if($userid=='')
	{
		echo "<script>alert('ENTER THE INSTRUCTOR ID')</script>";
		echo "<script>window.open('instructor_login.html','_self')</script>";
	}
	if($password=='')
	{
		echo "<script>alert('ENTER THE PASSWORD')</script>";
		echo "<script>window.open('instructor_login.html','_self')</script>";
	}
	else{
		
		$query="SELECT * FROM instructor_login WHERE instructor_id='$userid' AND password='$password'";
		$run=(mysqli_query($con,$query)) or die("error");
		if(mysqli_num_rows($run)>0)
		{
		$_SESSION['uid'] = $userid;
		echo "<script>window.open('instructor_frames.html','_self')</script>";
		echo"<script>window.open('instructor_logo.php','_blank')</script>";
		echo"<script>window.open('instructor_logo.php','instructor_frames.html')</script>";
		
	}
	else{
		 
	echo"<script>alert('INSTRUCTOR ID AND PASSWORD ARE INCORRECT')</script>";
		echo "<script>window.open('instructor_login.html','_self')</script>";
	}
	
	}
}
?>