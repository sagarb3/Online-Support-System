<title>WELOCME</title>
<?php 
if(isset($_COOKIE["user"]))
{
echo "Welcome"."_".$_COOKIE["user"]."</br>";
echo'<p>'."hello {$_COOKIE["user"]} you are here with us".'</br>'.'</p>'.'</br>';
echo'<img src="3d-artist-wallpaper-.jpg" height="400px" width="400px" alt="your pic" />';
}
else
{
 header("Refresh:0;url=login.html");}
?>
<form action="logout1.php"><input type="submit" value="logout" /></form>
<form action="complaint.php" method="post"><input type="submit" value="entry" /></form>