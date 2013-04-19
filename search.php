<!------------------------>
<!-- CONNECT AND HEADER -->
<!------------------------>
<?php
	include("INCLUDE/header.php");
?>
 


 <!--------------->
<!-- NO POST -->
<!---------------->
 <?php
 if(!(isset($_POST['search_value'])))
		{
			header("location: index.php");	
			exit();
		}
		
 ?>
 
 <!--------------->
<!-- HEAD TITLE -->
<!---------------->
<?php
	echo"
	<head>
		<title>Welcome</title>
	</head>";
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
	
	
if(isset($_POST['search_value']))
		{
			$search_value_p = $_POST['search_value'];
		}
		$items = mysql_query("SELECT * FROM item WHERE image_user_name LIKE '%$search_value_p%' ||  key_words LIKE '%$search_value_p%'"); 
		$item_row = mysql_num_rows($items);

		
	echo"
	<div id = 'index_content_page_wrapper'>
	<br/><br/>";
	
			if($item_row < 1)
			{
			echo" <font size='5px'><span id='error_print'>No result found for <u>$search_value_p</u></span></font>";
			}
			else
			{
				echo" <font size='5px'><span id='default_error_print'> result found for <u>$search_value_p</u></span></font>";
			}
			echo"
			<table>
				<tr'>
		";	

				/***  recods  ***/
				

				/**** DISPLAY IMAGES ****/
				$count = 0;
				while($row = mysql_fetch_assoc($items))
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