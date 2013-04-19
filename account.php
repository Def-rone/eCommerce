

<?php
$city = '712 23rd watervliet';
$country='usa';
$state= 'ny';
?>




<!------------------------>
<!-- CONNECT AND HEADER -->
<!------------------------>
<?php
	session_start(); //for errors
	include("INCLUDE/header.php");
?>






<div id = 'bg_middle2'> 
    <div id = 'login_content_page_wrapper' style='height:700px;'>
    
    <!-- background -->
    	<div class='top_title'>
       		<h1>Get started with ECOMMERCE</h1> 
        </div>

		<!-- left register -->
        <div id = "left_login">
        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;q=<?php echo"$city,+$state,+$country";?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo"$city,+$state,+$country";?>&amp;gl=us&amp;t=m&amp;z=14&amp;output=embed"></iframe>
        </div>
        
        
        <!-- right register -->
         <div class = "right_form" >
        	<div id='login'>
            <?php 
			$user_name_p = $_COOKIE['username'];
			
			echo"<h1>Welcome, $user_name_p</h1>";

				$user_query = mysql_query("Select * FROM user WHERE user_name = '$user_name_p'");
				$row = mysql_fetch_assoc($user_query);
					$first_name_p = $row['first_name'];
					$last_name_p = $row['last_name'];
					$email_p = $row['email'];
					$password_p = $row['password'];
					$user_add_date_p = $row['user_add_date'];
					
				echo"
					 <p>
					 	<b>First Name:</b>
					   	<input type='text' name='first_name' id='first_name' class='field' value='$first_name_p' />
					</p>
							
					 <p>
					 	<b>Last Name:</b> 
					 	 <input type='text' name='first_name' id='first_name' class='field' value='$last_name_p' />
					</p>
					
					<p>
						<b>Email:</b>
						<input type='text' name='email' id='email' class='field' value='$email_p' />
					</p>
					
					<p>
						<b>Register Date:</b>
						<input type='text' name='date' id='date' class='field' value='$user_add_date_p' />
					</p>
				";
		?>
             </div>
            </div>
      </div>
    </div>  

<!------------>
<!-- FOOTER -->
<!------------>
<?php
	include("include/footer.php");
?>