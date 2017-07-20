<?php
require_once 'db.php';
if(isset($_COOKIE["user"]))
{$user=$_COOKIE["user"];
$pass1=sha1($_POST['pass1']);
$pass2=sha1($_POST['pass2']);
$sql="select password from user where password='$pass1' and user='$user' ";
$res=mysqli_query($con,$sql);
$i=mysqli_num_rows($res);
if($i!=0)
{
$sql1="update user set password='$pass2' where password='$pass1' and user='$user'";
if((mysqli_query($con,$sql1))!=0)
{echo"updated password";
header("Refresh:5;url=login.html");}
else
{echo "not successfull";}

}
else
echo"no row selected";
header("Refresh:5;url=login.html");
}
else
{ 
echo "can't update";
header("Refresh:5;url=index.html");
}
?>

