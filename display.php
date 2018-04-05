<?php
$con=mysql_connect("localhost","root","","discover");
 
mysql_select_db("discover",$con);
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Video Lectures</title>

<style>

{
 padding:0;
 margin:0;
}
body
{
 background:#fff;
 font-family:Georgia, "Times New Roman", Times, serif;
 text-align:center;
}
#header
{
 background:darkblue;
 width:100%;
 height:50px;
 color:#fff;
 font-size:36px;
 font-family:Verdana, Geneva, sans-serif;
}
#body
{
 margin-top:100px;
}
#body table
{
 margin:0 auto;
 position:relative;
 bottom:50px;
}
table td,th
{
 padding:20px;
 border: solid #9fa8b0 1px;
 border-collapse:collapse;
}
#footer
{
 text-align:center;
 position:absolute;
 left:0;
 right:0;
 margin:0 auto;
 bottom:50px;
}

</style>

</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">

<div id="header">
<label>Video Lectures</label>
</div>
<div id="body">
 <table width="50%" border="1">
    <tr>
    
    </tr>
    <tr>
    <th>Author Name</th>
    <th>Course Type</th>
    <th>Course Name</th>
    <!--<th>File Name</th>-->
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>View Lecture</th>
    <th>View Certificate</th>
    </tr>
    <?php
 $sql="SELECT * FROM video";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['author_name'] ?></td>
        <td><?php echo $row['course_type'] ?></td>
        <td><?php $_SESSION['vcourse'] = $row['course_name'];  echo $row['course_name'] ?></td>
        <!--<td><?php echo $row['file'] ?></td>-->
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="upload/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        <td><a href="vcertificate.php" target="_blank">Certificate</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>

</div>
</body>
</html>