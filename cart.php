<!------------------------>
<!-- CONNECT AND HEADER -->
<!------------------------>
<?php
	include("INCLUDE/header.php");
?>




<!--------------------->
<!--- URL VARIABLE ---->
<!--------------------->
<?php
	if(isset($_GET['del_id']))
	{
		$del_id_g = $_GET['del_id'];
		$grand_total_g = $_GET['grand_total'];
		
		$item_select_query = mysql_query("SELECT total FROM item_cart WHERE cart_id = '$del_id_g'") or die(mysql_error());
		$row = mysql_fetch_assoc($item_select_query);
			$total2_db = $row['total'];
			
		$delete_query = mysql_query("DELETE FROM item_cart WHERE cart_id = '$del_id_g'") or die(mysql_error());

		$grand_total_g -= $total2_db;
	}
?>




<?php
	echo"<head> <title>My Cart</title> </head>";
		echo"
			<div id = 'bg_middle2'>
				<div id = 'cart_content_page_wrapper'>
				";
				
					/**** page title ***/
					echo"
					<div class = 'top_title'>
						<h1>My Shopping Cart</h1> 
					</div>
					";
					
					//cart main content
					echo"
					 <div id='cart_list'>";
					 if((isset($_COOKIE['username'])))  //see if user in loged in
						{
							$user_name_c = $_COOKIE['username'];
							$user_name_c = ucwords($user_name_c); 
							echo"<h1>$user_name_c's Shopping List</h1>";
						}
						else
						{
							echo"<h1>My Shopping list - You have to log in to buy</h1>"; 
						}
						$item_row_query = mysql_query('SELECT * FROM item_cart');  
						$query_item_count_row = mysql_num_rows($item_row_query);
						if($query_item_count_row != 0)
						{
							echo"
								<table id='cart_table'>
								  <tr id='cart_title'>
									<td width='20%'>Name</td>
									<td width='35%'>Description</td>
									<td width='10%'>color</td>
									<td width='10%'>size</td>
									<td width='10%'>Price</td>
									<td width='5%'>Quantity</td>
									<td width='10%'>Total</td>
								  </tr>
								 ";
							
							  //start PayPal Checkedd Button
							   $count = 0;
						       $grand_total = 0;
							   $x = 1;
							   $pp_checkout_btn = '';
							   $pp_checkout_btn .= '
							 		<div id="paypal_form"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="upload" value="1">
										<input type="hidden" name="business" value="ikhlas_06@hotmail.com">
							';

							  /**** DISPLAY IMAGES ****/
								$item_cart_query = mysql_query("SELECT * FROM item_cart ORDER BY cart_id DESC");  
								while($row = mysql_fetch_assoc($item_cart_query))
								{
									$cart_id_db = $row['cart_id'];
									$image_id_db = $row['item_id'];
									$image_user_name_db = $row['item_user_name'];
									$image_folder_name_db = $row['item_folder_name'];
									$description_db = $row['description'];
									$size_db = $row['size'];
									$color_db = $row['color'];
									$price_db = $row['price'];
									$qty_db = $row['quantity'];
									$total_db = $row['total'];
									$grand_total += $total_db;
									
								
							echo"
								   <tr id='test'>
									<td id='hover_button_x'>
											<a href='cart.php?del_id=$cart_id_db&grand_total=$grand_total' id='linkx' name='linkx'>
												<img src='IMAGE/x.png' id='imgx' />
											</a>
											
											<div id='cart_center'>
											<a href='MENU_PAGES/zoom.php?item_id=$image_id_db'>
												<img src='http://localhost/eCommerce/IMAGE/STORE_ITEMS_DB/$image_folder_name_db' width='80' height='90' />
											</a>
											
											<br/>
											
											<a href='MENU_PAGES/zoom.php?item_id=$image_id_db'>
											$image_user_name_db
											</a>
										</div>
									</td>
									<td class='cart_select'>$description_db</td>
									<td class='cart_select'>$color_db</td>
									<td class='cart_select'>$size_db</td>
									<td class='cart_select'>$price_db</td>
									<td class='cart_select'>$qty_db</td>
									<td class='cart_select'>$total_db</td>
								  </tr>
						";
						
						//Dynamic CheckOut Btn Assembly
						 $pp_checkout_btn .= '
						 <input type="hidden" name="item_name_'.$x.'" value="'.$image_user_name_db.'">
						 <input type="hidden" name="amount_'.$x.'" value="'.$price_db.'">
						 <input type="hidden" name="quantity_'.$x.'" value="'.$qty_db.'">
						 ';
						$x++;
							}
							 $pp_checkout_btn .= '
								  <input type="hidden" name="custom" value="product_id_array">
								 <input type="hidden" name="notify_url" value="https://www.yoursite.com/storescripts/my_ipn.php">
								 <input type="hidden" name="return" value="https://www.yoursite.com/checkout_complete.php">
								 <input type="hidden" name="rm" value="2">
								 <input type="hidden" name="cbt" value="Return to The Store">
								 <input type="hidden" name="cancel_return" value="https://yoursite.com/paypal_cancel.php">
								 <input type="hidden" name="lc" value="US">
								 <input type="hidden" name="currency_code" value="USD">
								<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" 
									id="paypal_button" name="submit" alt="Make payments with PayPal">
							 </form></div>';
							 
						echo"
						
								</table>";
								if((isset($_COOKIE['username'])))  //see if user in loged in
									{
										echo"$pp_checkout_btn";     //paypal button
									}
									else
									{
										echo"<form action='index.php' method='POST' id='paypal_form'><button class='button'>Contue Shopping</button></form>";
									}
												
								echo"		
								<label id='grand_total'><b><font color='black'>GRAND TOTAL:</font> <u>$$grand_total</u></b></label>
									
							</div>
						";	
						}
						else
						{
							echo"<h2>Your shopping cart is currently empty.</h2>";
							echo"Choose from the categories above, or type a search term in the search box above to find specific items.";
							echo"<br/><br/><div id='submit'><form action='index.php'><button class='button'>conutine Shopping</button></form></div>";
						}
	echo"</div></div>";
?>

<!------------>
<!-- FOOTER -->
<!------------>
<?php
	include("include/footer.php");
?>
