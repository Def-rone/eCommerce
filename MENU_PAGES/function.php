<?php
////////////////////////////////////////////////////////
//////////////////// ZOOM.php //////////////////////////////
///////////////////////////////////////////////////////


function add_item_cart($item_id_g, $color_p, $size_p, $qty_p)
{
	$item_query = mysql_query("SELECT * FROM item WHERE item_id = $item_id_g");
		$row = mysql_fetch_assoc($item_query);
			$image_user_db = $row['image_user_name'];
			$image_folder_db = $row['image_folder_name'];
			$price_db = $row['price'];
			$description_db = $row['description'];
			
			$total = $price_db * $qty_p;
		
		$sql = mysql_query("INSERT INTO item_cart 
			(item_id, item_user_name, item_folder_name, description, color, size, price, quantity, total)
						VALUES('$item_id_g', '$image_user_db', '$image_folder_db', '$description_db', '$color_p', '$size_p', 
						'$price_db', '$qty_p', '$total')") or die(mysql_error());
}




////////////////////////////////////////////////////////
//////////////////// ADD //////////////////////////////
///////////////////////////////////////////////////////


function add_ip_address($item_id_g, $user_ip)
{
	$view_query = mysql_query("SELECT * FROM view WHERE item_id=$item_id_g AND ip_address = ('$user_ip')") or die(mysql_error());
	$query_count_row = mysql_num_rows($view_query);
					
	if($query_count_row == 0)
	{
		$insert_query = mysql_query("INSERT INTO view (item_id, ip_address) VALUES ('$item_id_g', '$user_ip')")or die(mysql_error());
	}
}
	
	







////////////////////////////////////////////////////////
//////////////////// SHOW //////////////////////////////
///////////////////////////////////////////////////////	
function show_view($item_id_g, $user_ip)
{
	$view_query = mysql_query("SELECT * FROM view WHERE item_id=$item_id_g AND ip_address = ('$user_ip')") or die(mysql_error());
	$view_count = mysql_num_rows($view_query);
		
       // echo"<h1>$view_count</h1>";  //show views
}
?>