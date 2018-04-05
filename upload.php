<?php
error_reporting(1);
 
$con=mysql_connect("localhost","root","","discover");
 
mysql_select_db("discover",$con);
 
extract($_POST);
 
$target_dir = "upload/";
$author_name=$_POST['authorname'];
$course_type=$_POST['course_type'];
$course_name=$_POST['coursename'];

if($author_name=='')
{
echo "<script> alert('Enter Name fo Author to Display')</script>";
echo "<script> window.open('upload.html','_self')</script>";
}

if($course_type=='')
{
echo "<script> alert('Enter Course Type')</script>";
echo "<script> window.open('upload.html','_self')</script>";
}
if($course_name=='')
{
echo "<script> alert('Enter Course Name')</script>";
echo "<script> window.open('upload.html','_self')</script>";
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);
 
if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 
 
else
{

$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO video(author_name,course_name, course_type, file,type,size) VALUES('$author_name','$course_name','$course_type','$file','$file_type','$file_size')";
 mysql_query($sql); 
 
 
echo "Upload Directory: ".$folder ."<br>";
if(file_exists($folder))
{if(is_writable($folder))
{
$target = $folder;
$target = $target.basename($FILES['file']['name']);
$moved = move_uploaded_file($_FILES['file']['name'], "$target");
echo "<script> alert('File moved to folder')</script>";
}
else
{
echo "<script> alert('File not moved to folder and is not writable')</script>";}}
else
{
echo "<script> alert('directory not found')</script>";
}
/*move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);*/

echo "uploaded Sucessfully";
echo "<script> alert('Uploaded Successfully!!')</script>";
echo "<script> window.open('categories.html','_self')</script>"; 
}
 
}
 
//display all uploaded video
 
if($disp)
 
{
 
$query=mysql_query("select * from video");
 
	while($all_video=mysql_fetch_array($query))
 
	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>