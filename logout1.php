<?php
$expire=time()-3600;
setcookie("user","",$expire);
header("Refresh:0;url=index.html");
?>