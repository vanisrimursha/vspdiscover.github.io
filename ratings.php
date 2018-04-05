<html>
<head>
  <style>
body
{
	background-color:#0B4C5F;
	font-family:helvetica;
	text-align:center;
}
h1
{
	margin-top:20px;
	font-size:40px;
	color:#E6E6E6;
}
#total_votes
{
	font-size:30px;
	color:#FE2E2E;
	font-weight:bold;
}
.div
{
	border:1px solid #E6E6E6;
	clear:both;
	margin-top:20px;
	height:100px;
	width:400px;
	padding:10px;
	margin-left:300px;
	border-radius:3px;
}
.div p
{
	margin:0px;
	font-size:20px;
	text-align:left;
	color:#E6E6E6;
}
img
{
	margin-top:10px;
	width:50px;
	height:50px;
	float:left;
	
}
input[type="submit"]
{
	border:none;
	background:none;
	background-color:#585858;
	width:100px;
	height:50px;
	color:white;
	border-radius:3px;
	font-size:17px;
	margin-top:20px;
}
</style>
  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="star2.jpg";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="star1.png";
      }
   }

</script>
  
</head>

<body>

<h2><font color="white">Design your life with Discover - RATE Us!</h2></font>

<?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="discover";

$phpar[] = "";
$aspar[] = "";
$jspar[] = "";

$php=5;
$asp=5;
$jsp=10;
    $connect=mysql_connect($host,$username,$password);
    $db=mysql_select_db($databasename);
	
    $select_rating=mysql_query("select content,facility,material from rating");
    $total=mysql_num_rows($select_rating);
  
    while($row=mysql_fetch_array($select_rating))
    {
	  $phpar[]=$php;
	  $aspar[]=$asp;
	  $jspar[]=$jsp;
	  
    }
if($total==0)
{$total=1;}
    $total_php_rating=(array_sum($phpar)/$total);
    $total_asp_rating=(array_sum($aspar)/$total);
    $total_jsp_rating=(array_sum($jspar)/$total);
  
?>

<form method="post" action="insert_rating.php">
  <p id="total_votes">Total RATINGS:<?php echo $total;?></p>
  <div class="div">
	  <p>CONTENT PROVIDED </p>
	  <input type="hidden" id="php1_hidden" value="1">
	  <img src="star1.png" onmouseover="change(this.id);" id="php1" class="php">
	  <input type="hidden" id="php2_hidden" value="2">
	  <img src="star1.png" onmouseover="change(this.id);" id="php2" class="php">
	  <input type="hidden" id="php3_hidden" value="3">
	  <img src="star1.png" onmouseover="change(this.id);" id="php3" class="php">
	  <input type="hidden" id="php4_hidden" value="4">
	  <img src="star1.png" onmouseover="change(this.id);" id="php4" class="php">
	  <input type="hidden" id="php5_hidden" value="5">
	  <img src="star1.png" onmouseover="change(this.id);" id="php5" class="php">
  </div>

  <div class="div">
	  <p>FACILITY AVAILABLE </p>
	  <input type="hidden" id="asp1_hidden" value="1">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp1" class="asp">
	  <input type="hidden" id="asp2_hidden" value="2">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp2" class="asp">
	  <input type="hidden" id="asp3_hidden" value="3">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp3" class="asp">
	  <input type="hidden" id="asp4_hidden" value="4">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp4" class="asp">
	  <input type="hidden" id="asp5_hidden" value="5">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp5" class="asp">
  </div>

  <div class="div">
  	  <p>INSTRUCTOR MATERIALS</p>
	  <input type="hidden" id="jsp1_hidden" value="1">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp1" class="jsp">
	  <input type="hidden" id="jsp2_hidden" value="2">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp2" class="jsp">
	  <input type="hidden" id="jsp3_hidden" value="3">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp3" class="jsp">
	  <input type="hidden" id="jsp4_hidden" value="4">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp4" class="jsp">
	  <input type="hidden" id="jsp5_hidden" value="5">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp5" class="jsp">
  </div>

  <input type="hidden" name="phprating" id="phprating" value="5">
  <input type="hidden" name="asprating" id="asprating" value="5">
  <input type="hidden" name="jsprating" id="jsprating" value="5">
  <input type="submit" value="Submit" name="submit_rating">

</form> 

</body>
</html>