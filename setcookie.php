<?php 
$id=$_POST['id'];
$detail=$_POST['detail'];
echo $id;
setcookie("id",$id,time()+60*60*60*24);
setcookie("detail",$detail,time()+60*60*60*24);
header("Refresh:0;url=cpage.php");
?>