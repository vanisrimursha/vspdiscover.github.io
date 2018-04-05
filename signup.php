<?php
include "classes/class.phpmailer.php";
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

if($fname=='')
{
echo "<script> alert('Enter first name')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}

if($email=='')
{
echo "<script> alert('Enter email id')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}
$email=filter_var($email, FILTER_SANITIZE_EMAIL);
$email=filter_var($email, FILTER_VALIDATE_EMAIL);
if(!$email)
{
echo "<script> alert('Enter valid Email Id \n like [discover@example.com] ')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}
if($uname=='')
{
echo "<script> alert('Enter user name')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}
if($pwd=='')
{
echo "<script> alert('Enter password')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}

if(strlen(trim($pwd)) < 8  || strlen(trim($pwd))>12 ) 
{
echo"<script> alert('Password must be 8 to 12 characters')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}
if($cpwd=='')
{
echo "<script> alert('Enter Confirmation password')</script>";
echo "<script> window.open('signup.html','_self')</script>";
}

if($pwd!=$cpwd)
{
echo "<script> alert('Password and Cofirm Password should be equal') </script>";
echo "<script> window.open('signup.html', '_self')</script>";
}

$sql_u = "SELECT * FROM student_signup WHERE userid = '$uname'";
$sql_p = "SELECT * FROM student_signup WHERE email = '$email'";
$sql_pro = "SELECT * FROM update_profile WHERE email = '$email'";
	
	$res_u = mysqli_query($con, $sql_u);
  	$res_p = mysqli_query($con, $sql_p);
	$res_pro = mysqli_query($con, $sql_pro);

if (mysqli_num_rows($res_u) > 0) 
{
  echo "<script> alert('Sorry... userid already taken')</script>"; 	
}
else if(mysqli_num_rows($res_p) > 0)
{
  echo "<script> alert('Sorry... email already registered')</script>";
}
else if(mysqli_num_rows($res_pro)>0)
{
  echo "<script> alert('Profile Already Registered') </script>";
}

else
{

$ins= "INSERT INTO student_signup(fname,lname,email,userid,password,cpassword) values('$fname', '$sname' ,'$email' ,'$uname' ,'$pwd' ,'$cpwd')" ;

$inn = "INSERT INTO update_profile(fname,lname, email, mobile, gender, profilepic) VALUES ('$fname','$sname','$email','','','')";
$insss=(mysqli_query($con,$inn)) or die("error");

$in="INSERT INTO student_login(username,password) VALUES ('$uname','$pwd')";
$inss=(mysqli_query($con,$in)) or die("error");
 
if(mysqli_query($con, $ins)){
    echo "Records were inserted successfully.";

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
$mail->SetFrom("donotreply@discovervsp.com");
$mail->Subject = "Design Your Life With Discover - Smart Learning";
$mail->Body = "You have Successfully registered to Discover a Smart Learning Website.  <br><b>Your Username: " .$uname. "<br>Your Login Password: " .$cpwd. "<br></b>Thanks for Registering.  <br>Keep doing well and discover as many courses to design your life with lotzzz of courses and make your learning colorful..<br>Best Regards...<br>Discover Team-VSP";
$mail->AddAddress($email); /*to address*/
if(!$mail->Send())
{echo "Mailer Error: ".$mail->ErrorInfo;}
else
{echo "<script> alert('Confirmation has sent to you in your registered mail')</script>";}
echo "<script>window.open('welcome_student.html','_self')</script>";
} 
else
{
echo"<script> window.open('sign up.html', '_self')</script>";
}
}
}
?>