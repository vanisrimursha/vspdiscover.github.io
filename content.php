<?php
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
session_start();
$uname= $_SESSION['uname'];

if(isset($_POST['python'])){
$cname = "Python";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Python Successfully Added to Favourites')</script>";
 echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['asp'])){
$cname = "ASP.Net";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('ASP.Net Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['c_ash'])){
$cname = "C#";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('C# Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['MAD'])){
$cname = "MAD";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('MAD Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['sqlite'])){
$cname = "SQLite";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('SQLite Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['c'])){
$cname = "C";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('C Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['cpp'])){
$cname = "C++";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('C++ Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['javascript'])){
$cname = "JavaScript";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('JavaScript Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['css'])){
$cname = "CSS";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('CSS Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['HTML'])){
$cname = "HTML";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('HTML Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['vc'])){
$cname = "video Coverage";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Video Coverage Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['morphing'])){
$cname = "Morphing";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Morphing Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['collage'])){
$cname = "Collage";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Collage Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['3d'])){
$cname = "3D";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('3D Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['drawing'])){
$cname = "Drawing";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Drawing Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['finance'])){
$cname = "Finance";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Finance Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['accounts'])){
$cname = "Accountancy";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Accountancy Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['commerce'])){
$cname = "Commerce";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Commerce Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['mcom'])){
$cname = "M commerce";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('M commerce Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['banking'])){
$cname = "Banking";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Banking Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['pd'])){
$cname = "Personal Development";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Personal Development Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['apptitude'])){
$cname = "Apptitude";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Apptitude Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['logicals'])){
$cname = "Logicals";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Logicals Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['development'])){
$cname = "Development";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Development Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['interview'])){
$cname = "Interview Skills";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Interview Skills Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['ds'])){
$cname = "Data Structures";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Data Structures Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['ct'])){
$cname = "CT";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('CT Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['crowd'])){
$cname = "Crowd Simulation";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Crowd Simulation Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['scrolling'])){
$cname = "Scrolling";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Scrolling Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}

if(isset($_POST['exams'])){
$cname = "Exam Preparation";
$sql_c="SELECT * FROM favourites WHERE username='$uname' AND coursename='$cname'";
	
	$res_c = mysqli_query($con, $sql_c);
  	
if (mysqli_num_rows($res_c) > 0) 
{
  echo "<script> alert('Course already added in your favourite list')</script>"; 	
}
else
{
$ins= "INSERT INTO favourites(username,coursename) values('$uname', '$cname')" ;
if(mysqli_query($con, $ins))
{echo "<script> alert('Exam preparation Successfully Added to Favourites')</script>";
echo "<script> window.open('frames.html') </script>";}
else
{echo "<script> alert(' Error occurs in adding')</script>";}
}
}
?>



