<!------------------------>
<!-- CONNECT AND HEADER -->
<!------------------------>
<?php
	include("INCLUDE/header.php");
?>
 

 
 
 <!--------------->
<!-- HEAD TITLE -->
<!---------------->
<?php
if(isset($_COOKIE['username']))
{
	$user_name_c = $_COOKIE['username'];
	echo"
	<head>
		<title>Welcome, $user_name_c</title>
	</head>";
}
else
{   echo"
	<head>
		<title>Welcome, to Ecommerce</title>
	</head>";
}
?>





<!------------->
<!-- CONTEXT -->
<!------------->
<?php

	/*** main background image ***/			
	echo"
	<div id = 'bg_middle'>
		<div id = 'main_image_wrapper'>
				<div class='slideshow' id='flavor_1'></div>
		</div>
	</div>";
	
	

	echo"
	<div id = 'index_content_page_wrapper'>
			<br/> <br/>
			<table>
				<tr'>
		";	
				/*** SET UP pagination  ***/
				$item_per_page = 20; 
				$page_query = mysql_query("SELECT COUNT('item_id') FROM item "); //count rows, return number
				$pages = ceil(mysql_result($page_query, 0) / $item_per_page); //print only 8 reco per page
				//if top variable is set ex: page = 4 --> user cant change in url --> i user go to index set page =1  
				$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
				$start= ($page - 1) * $item_per_page;
				

				/**** DISPLAY IMAGES ****/
				$item_query = mysql_query("SELECT * FROM item ORDER BY price DESC LIMIT $start, $item_per_page");  
				$count = 0;
				while($row = mysql_fetch_assoc($item_query))
				{	
					$item_id_db = $row['item_id'];
					$image_user_name_db = $row['image_user_name'];
					$image_folder_name_db = $row['image_folder_name'];
					$price_db = $row['price'];
						
						
				
					echo"<td >";
					
						echo"<a href='MENU_PAGES/zoom.php?item_id=$item_id_db'>
								<img src='http://localhost/eCommerce/IMAGE/STORE_ITEMS_DB/$image_folder_name_db' width='150' height='160'/>
							</a><br/>";
						echo"<a href='MENU_PAGES/zoom.php?item_id=$item_id_db'>
								<p id='name'>$image_user_name_db</p>
							 </a>";
						echo"<p id='price'>Our Price $$price_db</p>";
						
					echo "</td>";
					
					 $count++;
					 if($count == 4)       //3 cols
					 {
						echo "</tr><tr>"; // Start a new row at 3 cols
					  $count = 0;
					}
				}//end of while loop
				
				
		 echo"</tr>";
   		echo"</table>";
			
			
		
	
	///////////////////////////////
	/****** pagination **********/
	//////////////////////////////
	if($pages >= 1 && $page <= $pages)
	{
		echo"<div id='container'>";
			echo"<div class='pagination dark'>";
				echo'<a href="?page=1" class="page dark">first</a>';
				for($x=2; $x< $pages; $x++) //botom pages link
				{
					echo'<a href="?page='.$x.'" class="page dark">'. $x .'</a> '; 	
				}
				echo'<a href="?page='. $x .'" class="page dark">last</a>';
			echo"</div>";
		echo"</div>";
	}
   
	

	echo" 
     	</div>
        "; //end of index_content_page_wrapper
?>



<!------------>
<!-- FOOTER -->
<!------------>
<?php
	include("include/footer.php");
?>