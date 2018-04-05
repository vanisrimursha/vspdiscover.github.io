<html>
<head>
  <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
  <script>
    var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
        test: true, // test documents are free, but watermarked
        type: "pdf",
        document_content: document.querySelector('html').innerHTML, // use this page's HTML
        // document_content: "<h1>Hello world!</h1>",               // or supply HTML directly
        // document_url: "http://example.com/your-page",            // or use a URL
        // javascript: true,                                        // enable JavaScript processing
        // prince_options: {
        //   media: "screen",                                       // use screen styles instead of print styles
        // }
      })
    }
  </script>
<?php
$con=mysqli_connect("localhost","root","","discover") or die("not connected");
session_start();
$uname=$_SESSION['uname'];
$name= strtoupper($uname);
$course = $_SESSION['course'];
$_SESSION['course_count']++;

if($_SESSION['course_count'] >3)
{
echo "<script> alert('you have reached maximum course completion level for this LOGIN session...<br>So Re-LOGIN to take new Course or Re-COMPLETE the Course')</script>"; 
echo "<script> window.open('logout.php','_self') </script>";
}

$sql_r = "SELECT * FROM pending WHERE username = '$uname' AND coursename ='$course' ";	
$res_r = mysqli_query($con, $sql_r);
if (mysqli_num_rows($res_r) > 0) 
{
  $inn="DELETE FROM pending WHERE username='$uname' AND coursename='$course' ";
  $inss=(mysqli_query($con,$inn)) or die("error"); 	
}

$sql_u = "SELECT * FROM completed WHERE username = '$uname' AND coursename ='$course' ";	
$res_u = mysqli_query($con, $sql_u);
if (mysqli_num_rows($res_u) > 0) 
{
  echo "<script> alert('Course Already Completed')</script>"; 	
}

else{
$ins="INSERT INTO completed(username,coursename) VALUES ('$uname','$course')";

if(mysqli_query($con, $ins)){
    /*echo "Records were inserted successfully."; */
/*echo "<script> window.open('ccertificate.php','_self') </script>";*/}

else{
echo "<script> alert('Network Error ocurs...')</script>";}
}
?>
  <style>
    @media print {
      #pdf-button {
        display: none;
      }
    }

.certificate
{
width: 100%;
height: 10%;
background: skyblue;
font-color: #234;
text-align: center;
}
.box
{
border-style: double;
border-width: 10px;
border-color: skyblue;
}

.dropbtn {
    background-color: royalblue;
    color: white;
    padding: 15px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: green;
}
  </style>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">
<div class="box"><b>
<h1 class="certificate"> <left><img src="discover.png" width="100px"> </left>Certification of Course Completion </h1>
<center><i><h2> Design your Life With Discover</h2></i>
<p> This certifies that <font size="5px"> <?php echo $name;?> </font>  has Successfully Completed the course <font size="5px"><?php echo $course; ?> </font></p>
<p> On <font size="5px"> <?php echo date("l jS \of F Y "); ?> </font> Under the guidance of</p>
</center>
<center><img src="Vani.png" alt="VanisriMuralisankar""> &nbsp <img src="Sandy.png" alt="Sandhya Ramesh"> &nbsp <img src="Pavi.png" alt="Pavithra Lingam">
 <h2> & </h2>
<img src="sign.png" alt="Authors & Instructors of "> &nbsp <h2> DISCOVER </h2> </center>
</div>
</b>
  <input id="pdf-button" type="button" value="Download PDF" onclick="downloadPDF()" class="dropbtn"/>

</div>
</body>
</html>