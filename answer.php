<?php 
require_once 'db.php';
$admin=$_COOKIE["admin"];
$id=$_POST['id'];
echo "Admin name:"." ".$admin;
$sql="select * from complaint where c_id='$id'";
if($z=mysqli_query($con,$sql))
{ 
$row=mysqli_fetch_array($z);
echo '<table height="80%" width="100%" style="border:1px solid black;" >';
echo '<tr>'.'<td valign="top">'.'<b>'."Complaint Details:".'</b>'.$row['complaint_details'].'</td>'.'</tr>';
echo '<form action="adminreply.php" method="post">'.'<tr>'.'<td>'.'<textarea cols="118" name="replytext" id="replytext" cols="30" rows="10"></textarea></br>'.'</td>'.'</tr>'.'<input type="hidden" name="id" value="'.$id.'" />';
echo '<tr>'.'<td>'.'<input type="submit" value="GO" />'.'</td>'.'</tr>';
echo '</form>'.'</table>';
}
else
echo "problem with table";


?>