<head>
	<style type="text/css">td{vertical-align:top;text-align:right;}
	
	table,td{border:2px solid black;border-collapse:collapse;}</style>
</head>

<?php 
$loc="index.html";
$sub='<form action="'.$loc.'"method="post"><input type="submit" value="proceed"/></form>'
?>
<?php 

if($result=mysqli_query($con,$sql))
{

{
echo "<tr><td>$row[c_id]
<td>$row[cmpname]</td>
<td>$sub</td></tr>";


}

}
else
echo "database wrong";
?>

