<!------------------------>
<!-- CONNECT AND HEADER -->
<!------------------------>
<?php
	session_start(); //for errors
	include("../INCLUDE/header.php");
	include("function.php");
?>


<!------------------------>
<!--- NO URL VARIABLE ---->
<!------------------------>
<?php
if(!(isset($_GET['item_id']))) 
	{
		header("location: ../index.php");	
	}
?>


<!------------------------>
<!--- get db VARIABLE ---->
<!------------------------>
<?php
	$item_id_g = $_GET['item_id'];
	
	$item_query = mysql_query("SELECT * FROM item WHERE item_id = $item_id_g");  
	$row = mysql_fetch_assoc($item_query);
		$image_user_name_db = $row['image_user_name'];
		$image_folder_name_db = $row['image_folder_name'];
		$main_category_db = $row['main_category'];
		$sub_category_db = $row['sub_category'];
		$price_db = $row['price'];
		$description_db = $row['description'];
		$features_db = $row['features'];
		$key_words_db = $row['key_words'];
		$sold_db = $row['sold'];
		$thumb_up_db = $row['thumb_up'];
		$thumb_down_db = $row['thumb_down'];
		$thumb_total = $thumb_up_db + $thumb_down_db;
		$thumb_sign = $thumb_up_db - $thumb_down_db;
		$item_add_date = $row['item_add_date'];
	
	if($sub_category_db == "Male_T-Shirts"){ $sub_category_db = "Men T-Shirt";}
	if($sub_category_db == "Women_T-Shirts"){ $sub_category_db = "Women T-Shirt";}
?>

<!----------------------------------->
<!--- Add ip address in database ---->
<!----------------------------------->
<?php
	$user_ip = $_SERVER['REMOTE_ADDR']; //get ip_address of user
	
	/////////////////////////////////////
	//function add ip address to database
	add_ip_address($item_id_g, $user_ip);
	/////////////////////////////////////	
?>



<!--------------------------->
<!---- Cart submit button --->
<!--------------------------->
<?php
if(isset($_POST['cart_button']))
{
	$item_id_g = $_GET['item_id'];
	$color_p = $_POST['color'];
	$size_p = $_POST['size'];
	$qty_p = $_POST['qty'];
	$zoom_error = "";
	$error_class = "error_print";

	 
	//check errors
	if(empty($color_p)) 
	{
		$zoom_error .= "Error - Pick a color";
	}
	else if(empty($size_p)) 
	{
		$zoom_error .= "Error - Pick a size";
	}
	else if(empty($qty_p)) 
	{
		$zoom_error .= "Error - Enter qty";
	}
	else if(!(is_numeric($qty_p))) 
	{
		$zoom_error .= "Error - Enter a number in qty";
	}
	else
	{
		$zoom_error .= "Succues - Item has been added to your cart!";
		$error_class = "default_error_print";
		
		/////////////////////////////////////////////////////
		///////// Function add ip address to database ///////
		add_item_cart($item_id_g, $color_p, $size_p, $qty_p);
		/////////////////////////////////////////////////////
	}
		
	$_SESSION['zoom_error'] = $zoom_error;
	$_SESSION['error_class'] = $error_class;
	
//stop from adding double on refresh
header("location: zoom.php?item_id=$item_id_g");	
exit();
}

?>



<!--------------------------->
<!-- IF URL HAS A VARiABLE -->
<!--------------------------->
<?php
		echo"<head> <title>$image_user_name_db</title> </head>";
		echo"
		<div id = 'bg_middle2'>
			<div id = 'zoom_content_page_wrapper'>
			";
			
				/**** page title ***/
				echo"
				<div class = 'top_title'>
					<h1>$image_user_name_db</h1> 
				</div>
				";
				
				
				/**zoom left side -- zoomer image ***/
				echo"
				<div id ='zoom_item_left'>
					<a href='../image/STORE_ITEMS_DB/$image_folder_name_db' class='MYCLASS' title='$image_user_name_db'>  
						<img src='../image/STORE_ITEMS_DB/$image_folder_name_db' title='$image_user_name_db' width='400px' height='400px'>  
					</a>  
					"; 
				//like and dislike buttons
				echo"
					 <div id='submit'>
                		<button type='submit' id='like_button' class='button' name='like_button'>Like</button>
						<button type='submit' id='dislike_button' class='button' name='dislike_button'>Dislike</button>
                      </div>
				";
				echo"<br/>";
				
				////////////////////////////////
				// FUNCTION - show views ///////
				show_view($item_id_g, $user_ip);
				////////////////////////////////
				
				//set up bar
				$percent = 0;
				$rating_color = 'green';
				if($thumb_total >= 1)
				{
					if($thumb_sign >= 0)
					{
						$rating_color = "green";
						$percent = $thumb_up_db / $thumb_total;    //get green bar
					}
					else
					{
						$rating_color = "red";
						$percent = $thumb_down_db / $thumb_total;   //get red bar
					}
				}
				
				$percent = $percent * 100; //convert dec to percent
				$per = 100 - $percent;     //get gray bar
				
				
				echo"
				<div id='ratingsbar'>
   					<span id='color' style='background-color: $rating_color;  width: $percent%;'></span>
   					<span id='gray'  style='width: $per%;'></span>
				</div>";

				
				
				//show likes, dislikes
				echo"	  
					 <div id='showLD'>
						<span>
							<img src='../IMAGE/thumb_up_stay.png' width='20px' height='20px'/>
							<span id='div_1'><b>$thumb_up_db</b></span>
						</span>
						<span> 
					     	<img src='../IMAGE/thumb_down_stay.png' width='20px' height='20px'/>
							<span id='div_2'><b>$thumb_down_db</b></span>
						</span>
					</div>
				</div>";//end of zoom_content_page_wrapper div
				
				
				/** zoom right information ***/
				echo"	
				 <div class='zoom_right_form'>
          			<form id='zoom_login' method='POST' action='zoom.php?item_id=$item_id_g'>
						<h1>$sub_category_db</h1>";
						
							//print errors
							if(array_key_exists('zoom_error', $_SESSION) && !empty($_SESSION['zoom_error']))
							{
								$zoom_error_s = $_SESSION['zoom_error'];
								$error_class_s = $_SESSION['error_class'];
								echo "<span id='$error_class_s'> $zoom_error_s </span>";
							   session_destroy();
							}
                
						echo"
						<div>
						  <label>Our Price: <font color='#cc0000'>$$price_db</font></label>
						</div>
						
						<div>
							<select class='color_select' title='Choose your color...' name = 'color'>
									  <option value=''></option>
									  <option value='black'>Black</option>
									  <option value='gray'>Gray</option>
									  <option value='white'>White</option>
									  <option value='red'>Red</option>
									  <option value='blue'>Blue</option>
									  <option value='yellow'>Yellow</option>
									  <option value='pink'>Pink</option>
									  <option value='purple'>Purple</option>
									  <option value='green'>Green</option>
								</select>

							 <select class='size_select' title='Choose your size...' name='size'>
                                  <option value=''></option>
                                  <option value='Small'>Small</option>
                                  <option value='Medium'>Medium</option>
                                  <option value='Large'>Large</option>
								  <option value='XLarge'>XLarge</option>
								  <option value='XXXLarge'>XXLarge</option>
                            </select>
						</div>
						
						

						<div>
						<label>Quantity:</label>
							<input type='text'  name='qty' id='qty_field' class='field' name='gty' size='5'/>
						</div>
						";
						
						//create pop up window in footer.php
						echo"
						 <div id='submit'>
						 	<button type='submit' id='cart_button' class='button' name='cart_button'>Add To Cart</button>
                         </div>
						  
						<a href='#' id='opener02'> Usually ships in 24 Hours</a> 
						</form>
						
						
					</div>
				</div>
				";

				/** bottom1 info ***/
				echo"
				<div id='zoom_bottom_1'>
					<div id='tabs'>
						<ul>
							<li><a href='#tabs-1'>Description</a></li>
							<li><a href='#tabs-2'>Features</a></li>
						</ul>
						<div id='tabs-1'>
							<p>$description_db.</p>
						</div>
						<div id='tabs-2'>
							<p>";echo nl2br($features_db); /*takes \n from textarea*/  echo"</p>
						</div>
					</div>          
					         


                ";
				
			echo"</div>"; /* index_content_page_wrapper */
		echo"</div>"; /* bg_middle2 */
		
		
		
?>


       
<!------------>
<!-- FOOTER -->
<!------------>
<?php
	include("../include/footer.php");
?>
