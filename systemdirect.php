<?php 
if(isset($_COOKIE["admin"]))
{ header("Refresh:0;url=formadmin.html");
}
else
if(isset($_COOKIE["user"]))
{ echo "Sagar";
}
else
{header("Refresh:0;url=index.html");}
?>