<html>
	<head>
		<title>PRINT DATABASE</title>
		<style type="text/css">table,td,tr{border:1px solid black;border-collapse: collapse;}</style>
	</head>
	<table height="80%" width="100%" style="border:1px solid black;">
	<?php include_once 'db.php';
	$tbl_name="rtable";	
	?>
	<tr>
		<td style="width:1%; height:10%;"><h2><b>ID<b></h2></td>
		<td style="height:10%;"><h2><b>Complaint Status<b></h2></td>
		<td style="height:1%;"><h2><b>Department<b></h2></td>
		<td style="height:10%;"><h2><b>Complaint Type<b></h2></td>
		<td style="height:10%;"><h2><b>Complaint Details<b></h2></td>
		<td style="height:10%;"><h2><i>Admin</i></h2></td>
		<td style="height:10%;"><h2><i>Reply</i></h2></td>
	</tr>
	<?php
	$sql ="SELECT * FROM $tbl_name";
	$result =mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
		{
	echo '<tr>' ;
	echo '<td width="20%;" style="border:2px solid black;height:10%;">'.$row['id'].'</td>';
	$k=$row['id'];
	if($z=mysqli_query($con,"select * from complaint where c_id='$k'"))
	{$b=mysqli_fetch_array($z);
	echo '<td valign="top"  width="1%;" style="border:2px solid black;height:10%;">'.$b['cmpsts'].'</td>';
	echo '<td valign="top"  width="1%;" style="border:2px solid black;height:10%;">'.$b['Department'].'</td>';
	echo '<td valign="top"  width="10%;" style="border:2px solid black;height:10%;">'.$b['cmpname'].'</td>';
	echo '<td valign="top"  width="15%;" style="border:2px solid black;height:10%;">'.$b['complaint_details'].'</td>';
	}
	echo '<td valign="top"  width="20%;" style="border:2px solid black;height:10%;">'.$row['admin'].'</td>';	
	echo '<td  valign="top" width="52%" style="border:2px solid black;height:10%;">'.'<p>'.$row['reply'].'</p>'.'</td>';
	echo '</tr>';


	
		}



	?>
	
	</table>
<button onclick="myFunction()">Print current page</button>
<script>
function myFunction() {
    window.print();
}
</script>
</div>
	</html>