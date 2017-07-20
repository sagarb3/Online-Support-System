<?php 
$expire=time()-3600;
setcookie("id","",$expire);
header("Refresh:0;url=userreg.php");
?>