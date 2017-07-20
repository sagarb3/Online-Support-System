<?php
require_once 'db.php';
$name=$_POST['user'];
if(!empty($_POST['pass']))
{$pass=sha1($_POST['pass']);}
else
{echo "first enter password"; header("Refresh:0;url=adminlogin.html");}
if((!empty($name)) && (!empty($pass)))
{ echo "i am here";
 
 $sql="select * from admin where adminuser='$name' and adminpassword='$pass'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$expire=time()+60*60*24*30;

setcookie("admin",$row['adminname'],$expire);
header("Refresh:0;url=adminpage.php");
}
else
echo"please enter name in the name field";

?>
