<?php
$expire=time()-3600;
setcookie("admin","",$expire);
header("Refresh:0;url=index.html");
?>