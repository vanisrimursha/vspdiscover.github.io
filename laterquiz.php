<html>
<head>
<title>Quiz Later!</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
session_start();
$uname = $_SESSION['uname'];

$cname = $_GET['cname'];

$sql_u = "SELECT * FROM pending WHERE username = '$uname' AND coursename ='$cname' ";	
$res_u = mysqli_query($con, $sql_u);
if (mysqli_num_rows($res_u) > 0) 
{
  echo "<script> alert('Already in Pending Course')</script>"; 	
}

else{
$ins="INSERT INTO pending(username,coursename) VALUES ('$uname','$cname')";

if(mysqli_query($con, $ins)){
    echo "Records were inserted successfully."; 
echo "<script> alert('Are you sure...???')</script>";
echo "<script> window.open('frames.html','_self') </script>";}

else{
echo "<script> alert('Network Error ocurs...')</script>";}
}
?>
</html>