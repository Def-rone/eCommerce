<!-- Connect AND SEE IF ITS SESSION OR COOKIE -->
<?php
	include("connect.php");
?>


<!DOCTYPE html>
	<html lang='en'>
		<head>
			<link rel='stylesheet' type='text/css' href='http://localhost/eCommerce/css/main.css' />
			<link rel='stylesheet' type='text/css' href='http://localhost/eCommerce/css/form.css' />
            <link rel='stylesheet' type='text/css' href='http://localhost/eCommerce/css/top_menu.css' />
            <link rel='stylesheet' type='text/css' href='http://localhost/eCommerce/css/pagination.css' />
			<link rel='stylesheet' type='text/css' href='http://localhost/eCommerce/JQUERY/SLIDER/agile_carousel.css' />
            <link rel="stylesheet" type="text/css" href="http://localhost/eCommerce/ZOOMER/css/jquery.jqzoom.css">  
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
			<link rel='icon' type='imageico' href='http://localhost/eCommerce/image/favicon (6).ico' /> 
		</head>
        <body>
            
<?php
//check, if user is loged in or not
if((isset($_COOKIE['username'])))  /*** user is loged in ***/
{	
	echo"
		<div id = 'header_wrapper'>
				<div id = 'logo_wrapper'>
					<h1><a href='http://localhost/eCommerce/index.php'>ECOMMERCE SITE</a></h1>
				</div>
				
				<div id = 'top_menu_wrapper'>
					<form  id='search_bar' action='http://localhost/eCommerce/search.php'' method='POST' name='SearchBoxForm'>
						<ul>
							<li><a href='http://localhost/eCommerce/account.php'>My Account</a></li>
							<li><a href='http://localhost/eCommerce/cart.php'>My Cart</a></li>
							<li><a href='http://localhost/eCommerce/LOGIN_PAGES/logout.php'>Log Out</a></li>
							<li><input type='text' placeholder='Search...' id='search_input' name='search_value' /></li>
						</ul>
					 </form>
				 </div>
			</div>"; //########header_wraper	
	
}
else/******************************* user is loged out ****************************/
{
	echo "
			<div id = 'header_wrapper'>
				<div id = 'logo_wrapper'>
					<h1><a href='http://localhost/eCommerce/index.php'>ECOMMERCE SITE</a></h1>
				</div>
				
				<div id = 'top_menu_wrapper'>
					<form  id='search_bar' action='http://localhost/eCommerce/search.php'' method='POST' name='SearchBoxForm'>
						<ul>
							<li><a href='http://localhost/eCommerce/LOGIN_PAGES/login.php'>Log In</a></li>
							<li><a href='http://localhost/eCommerce/LOGIN_PAGES/register.php'>Register</a></li>
							<li><a href='http://localhost/eCommerce/cart.php'>My Cart</a></li>
							<li><input type='text' placeholder='Search...' id='search_input' name='search_value' /></li>
						</ul>
				 	</form>
				 </div>
			</div>"; //########header_wraper			
}
?>




	<!----------------------
	----- BOTTOM MENU ------
	------------------------>		

		<div id = 'bottom_menu_wrapper'>
			<ul id='navbar'>
				<li><a href='#'>Apparel</a>
					<ul>
						<li><a href='http://localhost/eCommerce/menu_pages/apparel_pages/women.php'>Women</a></li>
						<li><a href='http://localhost/eCommerce/menu_pages/apparel_pages/men.php'>Men</a></li>
					</ul>
				</li>
						
				<li><a href='#'>Home Decor</a>
					<ul>
						<li><a href='#'>Furniture</a></li>
						<li><a href='#'>Home Accessories</a></li>
					</ul>
				</li>
						
				<li><a href='#'>Beauty</a>
					<ul>
						<li><a href='#'>Bath and Body</a></li>
						<li><a href='#'>Hair Care</a></li>
					</ul>
				</li>

        	    <li><a href='#'>Game</a>
				  	<ul>
					 	<li><a href='http://localhost/eCommerce/menu_pages/game_pages/java_game_1/java_game_1.php'>Game 1</a></li>
					  	<li><a href='http://localhost/eCommerce/menu_pages/game_pages/java_game_2/java_game_2.php'>Game 2</a></li>
						<li><a href='http://localhost/eCommerce/menu_pages/game_pages/java_game_3/java_game_3.php'>Game 3</a></li>
					</ul>
				</li>
                
                <?php   /**************** IF ITS OWNER ****************************/
					if((isset($_COOKIE['username'])))  //see if user in loged in
					{
						$user_name_c = $_COOKIE['username'];
						if((strcasecmp($user_name_c, 'ikhlas')) == 0)  //check to see if admin is ikhlas
						{
					  		echo"<li><a href='#'>Admin's page</a>
									<ul>
										<li><a href='http://localhost/eCommerce/menu_pages/additem_pages/additem.php'>Add Item</a></li>
										<li><a href='#'>Delete Item</a></li>
									</ul>
								</li>";
						}	
					}
				?>
			</ul>
		</div>
		


		<!-- jquery script goes at eng of code --> <!-- path of script is src="js/jquery.js" -->
		<script type = "text/javascript" src="http://localhost/eCommerce/JQUERY/jquery_script.js"> </script> 
        