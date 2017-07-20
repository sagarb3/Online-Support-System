<?php 
require_once 'db.php';
$user=$_COOKIE["user"];
$sql="select * from complaint where user='$user'";
$result=mysqli_query($con,$sql);?>
<head>
	<style type="text/css">td,th{vertical-align:top;text-align:left;}</style>
</head>
<table height="80%" width="100%" style="border:1px solid black;">
	<tr>
		<th>Complaint ID</th>
		<th>Complaint Name</th>
		<th>Action</th>
	</tr>
	<?php 
	while($row=mysqli_fetch_array($result))
	{
	
	$sub='<form action="setcookie.php" method="post">'.'<input type="hidden"  name="id" value="'.$row['c_id'].'"/><input type="hidden"  name="detail" value="'.$row['complaint_details'].'"/><input type="submit" value="Detail" /></form>';
	echo '<tr>' ;
	echo '<td>'.$row['c_id'].'</td>';	
	echo '<td>'.$row['cmpname'].'</td>';
	echo '<td>'.$sub.'</td>';
		
	}
	?>
	<?php 
	

	?>
</table>