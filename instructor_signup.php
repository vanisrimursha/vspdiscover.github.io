<?php
include "classes/class.phpmailer.php";
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$course=$_POST['course'];
$gender=$_POST['gender'];
$instructorid=$_POST['instructorid'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

if($fname=='')
{
echo "<script> alert('Enter First name')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}
if($lname=='')
{
echo "<script> alert('Enter Last/Sur Name ')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}

if($email=='')
{
echo "<script> alert('Enter email ID')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}
$email=filter_var($email, FILTER_SANITIZE_EMAIL);
$email=filter_var($email, FILTER_VALIDATE_EMAIL);
if(!$email)
{
echo "<script> alert('Enter valid Email Id \n like [discover@example.com] ')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}
if($course=='')
{
echo "<script> alert('Enter Course Name Handled By You')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}
if($instructorid=='')
{
echo "<script> alert('Enter Instructor ID')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}
if($pwd=='')
{
echo "<script> alert('Enter password')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}

if(strlen(trim($pwd)) < 8  || strlen(trim($pwd))>12 ) 
{
echo"<script> alert('Password must be 8 to 12 characters')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}

if($cpwd=='')
{
echo "<script> alert('Enter Confirmation password')</script>";
echo "<script> window.open('instructor_signup.html','_self')</script>";
}

if($pwd!=$cpwd)
{
echo "<script> alert('Password and Cofirm Password should be equal') </script>";
echo "<script> window.open('instructor_signup.html', '_self')</script>";
}

$sql_u = "SELECT * FROM instructor_signup WHERE userid = '$instructorid'";
$sql_p = "SELECT * FROM instructor_signup WHERE email = '$email'";
	
	$res_u = mysqli_query($con, $sql_u);
  	$res_p = mysqli_query($con, $sql_p);

if (mysqli_num_rows($res_u) > 0) 
{
  echo "<script> alert('Sorry... Instructor Id is already taken')</script>"; 	
}
else if(mysqli_num_rows($res_p) > 0)
{
  echo "<script> alert('Sorry... Email already registered')</script>";
}

else
{
$ins= "INSERT INTO instructor_signup(fname,lname,email,course,gender,userid,password,cpassword) values('$fname', '$lname' ,'$email' ,'$course' ,'$gender' ,'$instructorid' ,'$pwd' ,'$cpwd')" ;

$inn = "INSERT INTO instructor_profile(fname,lname, email, mobile, gender, profilepic) VALUES ('$fname','$sname','$email','','','')";
$insss=(mysqli_query($con,$inn)) or die("error");

$in="INSERT INTO instructor_login(instructor_id,password) VALUES ('$instructorid','$pwd')";
$inss=(mysqli_query($con,$in)) or die("login error");
 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username = "discovervsp@gmail.com";
$mail->Password = "discover2018";
$mail->SetFrom("donotreply@gmail.com");
$mail->Subject = "Design Your Life With Discover - Smart Tutor";
$mail->Body = "You have Successfully registered to Discover a Smart Teaching Website.  <br><b>Your Username: " .$instructorid. "<br>Your Login Password: " .$cpwd. "<br>Registered Course: " .$course. "</b><br>Thanks for Registering.  <br>Keep doing well and make discover as many courses to learners to design their life with lotzzz of courses and thanks for making their learning colorful..<br>Best Regards...<br>Discover Team-VSP";
$mail->AddAddress($email); /*to address*/

if(!$mail->Send())
{echo "Mailer Error: ".$mail->ErrorInfo;}
else
{ echo "<script> alert('Confirmation has sent to you in your registered mail')</script>";}

if(mysqli_query($con, $ins)){
    echo "Records were inserted successfully.";
echo "<script>window.open('welcome_instructor.html','_self')</script>";
} 
else
{
echo"<script> window.open('sign up.html', '_self')</script>";
}
}
}
?>