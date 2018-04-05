<html>
<head>
<title>Logout</title>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">
<center>
<?php
session_start();

if(isset($_SESSION['course_count'])){
session_destroy();
}

if(isset($_SESSION['uname'])){
session_destroy();
echo "User Successfully Logged Out!!!";}
?>
<h2><font color="chocolate">ThankYou....<a href="homepage.html" target="_self">Discover again!!!</a></font></h2>
</center>
</div>
</body>
</html>