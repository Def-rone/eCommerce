<!------------->
<!-- CONNECT -->
<!------------->
<?php
include("../include/connect.php");
?>


<?php
if(isset($_POST['item_id_s']))
{
	
	$item_id_s_p = $_POST['item_id_s'];
	
	$item_query = mysql_query("SELECT * FROM item WHERE item_id = $item_id_s_p")or die(mysql_error());  
	$row = mysql_fetch_assoc($item_query);
		$thumb_up_db = $row['thumb_up'];
		$thumb_down_db = $row['thumb_down'];
		$thumb_total = $thumb_up_db + $thumb_down_db;
		$thumb_sign = $thumb_up_db - $thumb_down_db;
		
		
		$rating_color;
		$percent = 0;
		$rating_color = 'green';
		if($thumb_total >= 1)
		{
			if($thumb_sign >= 0)
			{
				$rating_color = "green";
				$percent = $thumb_up_db / $thumb_total;
			}
			else
			{
				$rating_color = "red";
				$percent = $thumb_down_db / $thumb_total;
			}
		}
				
		$percent = $percent * 100;
		$per = 100 - $percent;

		echo"
   					<span id='color' style='background-color: $rating_color;  width: $percent%;'></span>
   					<span id='gray'  style='width: $per%;'></span>
			";
		
}
?>