<html>
<head>
	<link rel="stylesheet" href="stylepage.css" type="text/css" />
	<style type="text/css">
	td,th{text-align:center;border:1px solid black;vertical-align:top;}
	th{vertical-align:top;border:1px solid black;}
	table{border-collapse:collapse;border:1px solid black;}
	</style>
</head>
<?php
	
	/*
		Place code to connect to your DB here.
	*/
	$id=$_COOKIE["id"];
	$detail=$_COOKIE["detail"];
	

	?>
	<a href="resetcookie.php">Back To Complaint Page</a>
<?php


	
	include('db.php');	// include your code to connect to DB.

	$tbl_name="rtable";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM $tbl_name where id='$id'";
	$total_pages = mysqli_fetch_array(mysqli_query($con,$query));
	$total_pages = $total_pages['num'];
	
	/* Setup vars for query. */
	$targetpage = "cpage.php"; 	//your file name  (the name of this file)
	$limit =1; 	
							//how many items to show per page
	if(!empty($_GET['page']))
	{$page = $_GET['page'];}
	else
	{$page=1;}
		
	
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name where id='$id' LIMIT $start, $limit";
	$result = mysqli_query($con,$sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">previous</a>";
		else
			$pagination.= "<span class=\"disabled\">previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next</a>";
		else
			$pagination.= "<span class=\"disabled\">next</span>";
		$pagination.= "</div>\n";		
	}
echo'<table height="80%" width="100%" style="border:1px solid black;">
	<tr>
		<td><h1 height:5%;><b>Complaint details:<b></h1></td>
		<td><h1 height:5%;><i>'.$detail.'</i></h1></td>
	</tr>
<tr>
		
		<td style="height:5%;border:2px solid black;"><h1>Admin</h1></td>
		<td style="height:5%;border:2px solid black;" width="52%"><h1>Reply</h1></td>
  </tr>';

	?>


	
	<?php
		while($row = mysqli_fetch_array($result))
		{
	echo '<tr>' ;
	echo '<td width="20%" height="90%" style="border:2px solid black;">'.$row['admin'].'</td>';	
	echo '<td width="80%" height="90%" style="border:2px solid black;">'.$row['reply'].'</td>';
	echo '</tr>';


	
		}
	?>
<?php 
echo'</div>';
echo '</table>'; ?>
<?=$pagination?>
	</html>