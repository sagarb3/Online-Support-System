<?php
require_once'db.php';
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=sha1($_POST['password']);
$phone=$_POST['phone'];
$sql="insert into user(fname,username,email,password,phone) values('$name','$username','$email','$password','$phone')";
if(mysqli_query($con,$sql))
{echo"database entry successful";
header("Refresh:2;url=index.html");
}
else
echo "not possible true data";
?>