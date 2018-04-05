<?php
include "classes/class.phpmailer.php";
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("discover") or die(mysql_error());
session_start();
$uname = $_SESSION['uname'];
$email = $_SESSION['email'];  
?>
 

<html>
<head>
    <title>Search results</title>
<style>
h1
{
color: blueviolet;
font-weight: bold;
font-family: Helvetica;
font-style: italic;
}
h2
{
color: forestgreen;
font-weight: bold;
font-family: sans-serif;
font-style: oblique;
}
.dropbtn {
    background-color: royalblue;
    width:120px;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    cursor: pointer;
    font-weight:bold;
    font-style:italic;
    font-size: 14px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: lawngreen;
    font-weight: bold;
    font-style: italic;
    color: indigo;}
</style>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">
<?php
    $query = $_GET['query']; 
     
    $min_length = 3;
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
         
        $query = mysql_real_escape_string($query);
         
        $raw_results = mysql_query("SELECT * FROM wishlist
            WHERE (`course_name` LIKE '%".$query."%') OR (`course_type` LIKE '%".$query."%')") or die(mysql_error());  
       
	 if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
                echo "<p><h1>".$results['course_name']."</h1><h2>".$results['course_type']."</h2>";
               echo "<h3><font color='darkvoilet' weight='bold' size='5px'>Course Available...Ready to Discover..</font></h3><br>";
	echo "<a href='".$results['course_name'].".html' target='content'><input type='button' value='Take Course' class='dropbtn'></a>";
	//echo "<p>".$results['course_name'].".html</p>";



$uname= $_SESSION['uname'];



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
$mail->Subject = "Design Your Life With Discover - Regd Search of Course";
$mail->Body = "The Course that you have searching for is available in our website. Discover the Course and make Your life Colorful.<br>Best Regards...<br>Discover Team-VSP";
$mail->AddAddress($email); /*to address*/
if(!$mail->Send())
{echo "Mailer Error: ".$mail->ErrorInfo;}
else
{/*echo "Mail sent";*/}


            }
             
        }
        else{ 
            echo "<h3><font color='darkvoilet' weight='bold' size='5px'>Course Not Available...Will soon Make it avail for u...</font></h3>";


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
$mail->Subject = "Design Your Life With Discover - Regd Search of Course";
$mail->Body = "The Course that you have searching for is now not available in our website. We will soon make it avail for u to discover it..Will send u Conformation mail once we make it avail for u. You can discover as soon as possible.<br>Best Regards...<br>Discover Team-VSP";
$mail->AddAddress($email); /*to address*/
if(!$mail->Send())
{echo "Mailer Error: ".$mail->ErrorInfo;}
else
{/*echo "Mail sent";*/}

        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
</div>
</body>
</html>