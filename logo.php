<html>
<style>
body { 
background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}

.image {
    float: left;
    width: 120px;
    margin: 0 0 15px 20px;
    padding: 15px;
    text-align: center;
}

.text {
    float: right;
    width: 400px;
    margin: 0 0 15x 20px;
    padding: 15px;
    text-align: left;
    font-size: 20px;
    font-weight: bold;
}
</style>

<?php
session_start();
$uname= $_SESSION['uname'];
$uname= strtoupper($uname);
?>

<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">
<div class="image"> 
<img src="discover.png" width="200" height="60" ></div>
<div class="text">
<font color="white"><p>Welcome <font color="yellow"><?php echo $uname;?> </font>!!!</p></font></div><br>

&nbsp;&nbsp;<h2><font color="white">Design Your Life With Discover</font></h2>
</div>

</body>

</html>
