<?php
require_once 'db.php';
$email=$_POST['email'];
$pass=sha1($_POST['pass']);
$sql="select email from user where email='$email' ";
$res=mysqli_query($con,$sql);
$i=mysqli_num_rows($res);
if($i!=0)
{
$sql1="update user set password='$pass' where email='$email'";
if((mysqli_query($con,$sql1))!=0)
{echo"updated password";
header("Refresh:1;url=login.html");}
else
{echo "not successfull";}

}
else
echo "no email in directory";
header("Refresh:1;url=login.html");
?>

