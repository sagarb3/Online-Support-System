<html>
	<head>
		<title>Complaint Register</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<table height="80%" width="100%" style="border:1px solid black;">
		<tr>
			<td>Complaining User:</td>
			<td><?php $user=$_COOKIE["user"];echo $user; ?></td>
		</tr>
		<tr>
			<td valign="top">Enter Department Name</td>
			<td valign="top"><input type="text" name="dept" /></td>
		</tr>
		<tr>
			<td>Complaint Type</td>
			<td><select name="title" id="title">
				<option value="Network Related">Network Related</option>
				<option value="Email">Email</option>
				<option value="Web Services">Web Services</option>
				<option value="Computing Service">Computing Service</option>
				
			</select></td>
		</tr>
		<tr>
			<td valign="top">Enter Complaint Details</td>
			<td valign="top"><textarea name="comp_details" rows="5" cols="100" ></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" " value="Enter" /></td>
			
		</tr>
		</table>
		</form>
	</body>
</html>
<?php
if((!empty($_POST['title']))&&(!empty($_POST['comp_details'])))
{$ctitle=$_POST['title'];
$cdetails=$_POST['comp_details'];
$department=$_POST['dept'];
$status="NOT ANSWERED";
require_once 'db.php';
$sql="insert into complaint(user,cmpname,complaint_details,cmpsts,Department) values('$user','$ctitle','$cdetails','$status','$department')";
if(mysqli_query($con,$sql))
{
echo "Suceess";
header("Refresh:1;url=userc.php");}
else
{echo "failure";
header("Refresh:1;url=userc.php");
}
}
else
echo "enter data";
 ?>