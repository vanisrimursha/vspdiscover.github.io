<?php
if(isset($_POST['submit_rating']))
{
  $host="localhost";
  $username="root";
  $password="";
  $databasename="discover";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  
  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];
  $insert=mysql_query("insert into rating values('','$php_rating','$asp_rating','jsp_rating')");
echo "<script>alert('Sucessfully Given')</script>";
		echo "<script>window.open('homepage.html','_self')</script>";
}
?>