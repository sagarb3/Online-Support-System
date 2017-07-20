<?php 
require_once 'db.php';
$id=$_POST['id'];
$text=$_POST['replytext'];
$admin=$_COOKIE["admin"];
$status="answered";
if(mysqli_query($con,"insert into rtable(id,reply,admin) values('$id','$text','$admin')"))
{ $k=mysqli_query($con,"update complaint set cmpsts='$status' where c_id='$id'");
echo '<center>'."successsfull enter data".'</center>'.'</br>';
echo'<a href="adminpage.php" target="_parent">'."Back To Admin Page".'</a>';
}
else
{echo "failure".'</br>';
echo'<a href="adminpage.php" target="_parent">'."Back To Admin Page".'</a>';
}
?>