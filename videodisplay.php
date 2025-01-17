<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'discover'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
session_start();
$uname= $_SESSION['uname'];

$sql = "SELECT * FROM video ";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
			.dropbtn {
   			 background-color: royalblue;
    			color: white;
    			padding: 14px;
    			font-size: 14px;
    			border: none;
    			cursor: pointer;
    			font-weight: bold;
				}

			.dropbtn:hover, .dropbtn:focus {
    				background-color: azure;
    				font-weight: bold;
    				font-size: 14px;
    				color: brown;
				}
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
                         		transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.title{color: brown;
		       font-weight: bold;
  		       font-size: 20px;}
	</style>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">
	
	<table class="data-table">
		<caption class="title">Vedio Lecture(s)</caption>
		<thead>
			<tr>
				
				<th>Id</th> 
				<th>Author Name</th>
				<th>Course Type</th>
				<th>Course Name</th>
				<th>Video</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					
			<td>'.$row['v_id'].'</td>
			<td>'.$row['author_name'].'</td>
			<td>'.$row['course_type'].'</td>
			<td>'.$row['course_name'].'</td>
			<td>'.$row['file'].'</td>
			<td><video width='400' height='400' controls> <source src='upload/  . $_FILES['file']['name'] .  ' type = 'video/mp4'></video></td> 
			
				</tr>';
			
		}?>


		</tbody>
	</table>
<center><br><form action = "display.php" method = "post">
<input type="submit" name="disp" value="Display All" class="dropbtn"/>
<input type  = "button" name="disp1" value = "Display" onclick="document.location.href='vedio.html'" class="dropbtn"/></form><center>
</div>

</body>
</html>