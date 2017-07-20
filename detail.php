<?php 
require_once 'db.php';
$detail=$_POST['detail'];
$id=$_POST['id'];
$sql="select * from rtable where id='$id'";
$result=mysqli_query($con,$sql);?><head>
	<style type="text/css">td,th{vertical-align:top;text-align:left;border-collapse:collapse;}</style>
</head>

<table height="80%" width="100%" style="border:1px solid black;">
	<tr>
		<td><h1><b>Complaint details:<b></h1></td>
		<td><h1><i><?php echo $detail;?></i></h1></td>
	</tr>
<tr>
		
		<td style="border:2px solid black;"><h1>Admin</h1></td>
		<td style="border:2px solid black;" width="52%"><h1>Reply</h1></td>
  </tr>
	
	<?php 
	while($row=mysqli_fetch_array($result))
	{
	
	
	echo '<tr>' ;
	echo '<td width="20%;" style="border:2px solid black;">'.$row['admin'].'</td>';	
	echo '<td width="80%" style="border:2px solid black;">'.$row['reply'].'</td>';
	echo '</tr>';
	
	}
	?>
</table>