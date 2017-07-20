<?php
require_once 'db.php';
$name=$_POST['user'];
if(!empty($_POST['pass']))
{$pass=sha1($_POST['pass']);}
else
{echo "first enter password"; header("Refresh:0;url=login.html");}
if((!empty($name)) && (!empty($pass)))
{ echo "i am here";
 
 $sql="select * from user where username='$name' and password='$pass'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$expire=time()+60*60*24*30;

setcookie("user",$row['fname'],$expire);
header("Refresh:0;url=userlogin.php");
}
else
echo"please enter name in the name field";

?>
