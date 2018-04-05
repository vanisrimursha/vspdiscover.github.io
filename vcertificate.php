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
$vcourse = $_SESSION['vcourse'];


$ins="INSERT INTO vcompleted(username,coursename) VALUES ('$uname','$vcourse')";

if(mysqli_query($con, $ins)){
    /*echo "Records were inserted successfully."; */
/*echo "<script> window.open('certificate.php','_self') </script>";*/}

else{
echo "<script> alert('Network Error ocurs...')</script>";}

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
<p> This certifies that <font size="5px"> <?php echo $name;?> </font>  has Successfully Completed the Video Lecture course <font size="5px"><?php echo $vcourse; ?> </font></p>
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