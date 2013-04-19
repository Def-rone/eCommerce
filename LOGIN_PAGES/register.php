<!------------------------>
<!-- CONNECT AND HEADER -->
<!------------------------>
<?php
	session_start(); //for errors
	include("../INCLUDE/header.php");
?>


<!-------------------------------------->
<!-- CANT COME TO THIS PAGE IF LOG IN -->
<!-------------------------------------->
<?php
if((isset($_COOKIE['username'])))  /*** user is loged in ***/
{
	header("location: ../index.php");
	exit();
}
?>



<!---------------------------->
<!-- USER HIT SUMBIT BUTTOM -->
<!---------------------------->
<?php
	 if(isset($_POST['reg_button']))  
	{
		$first_name_p = $_POST['first_name'];
		$last_name_p = $_POST['last_name'];
		$email_p = $_POST['email'];
		$user_name_p = $_POST['user_name'];
		$password_p = $_POST['password'];
		$re_password_p = $_POST['re_password'];
		$reg_error = "";	
		$error_class = "error_print";
		
		
		//check errors
		if(empty($first_name_p) || empty($last_name_p) || empty($email_p) || empty($user_name_p) || empty($password_p) || empty($re_password_p)) 
		{
			$reg_error .= "Error - Enter all the fields";
		}
		else if(strlen($first_name_p) < 1)
		{
			$reg_error .= "Error - First name is too short!";
		}
		else if(strlen($first_name_p) > 20)
		{
			$reg_error .= "Error - Last name is too long!";
		}
		else if(strlen($user_name_p) < 6)
		{
			$reg_error .= "Error - Username is too short!";
		}
		else if(!(filter_var($email_p, FILTER_VALIDATE_EMAIL)))   // else if(preg_match("/[a-zA-Z0-9]@[a-zA-Z0-9].[a-zA-Z]/", $email_p) < 0) 
		{
			$reg_error .= "Invalid e-mail address";
		}
		else if(strlen($email_p) < 6)
		{
			$reg_error .= "Error - Email is too short!";
		}
		else if(strlen($email_p) > 30)
		{
			$reg_error .= "Error - Email is too short!";
		}
		else if(strlen($user_name_p) > 20)
		{
			$reg_error .= "Error - Username is too long!";
		}
		else if(strlen($password_p) < 6)
		{
			$reg_error .= "Error - Password is too short!";
		}
		else if(strlen($password_p) > 20)
		{
			$reg_error .= "Error - Password is too long!";
		}
		else if($password_p != $re_password_p)
		{
			$reg_error .= "Error - Password do not match!";
		}
		else
		{
			//check for existing email and user name??
			$email_query = mysql_query("Select * FROM user WHERE email = '$email_p'");		
			$user_query = mysql_query("Select * FROM user WHERE email = '$email_p'");		
			if(mysql_num_rows($email_query) >= 1)
			{
				$reg_error .= "That Email is already taken";
			}
			else if(mysql_num_rows($user_query) >= 1)
			{
				$reg_error .= "That User name is already taken";
			}
			else
			{
				
				$register = mysql_query("INSERT INTO user (first_name, last_name, email, user_name, password, user_add_date)
												VALUES('$first_name_p', '$last_name_p', '$email_p', '$user_name_p', '$password_p', now())")
												 or die(mysql_error());
				$reg_error .= "Account<b><u>($user_name_p)</u></b> has been created!";
				$error_class = "default_error_print";
			}
		}
		
	$_SESSION['reg_error'] = $reg_error;
	$_SESSION['error_class'] = $error_class;
	}
?>



<div id = 'bg_middle2'> 
    <div id = 'login_content_page_wrapper' style='height:700px;'>
    
    <!-- background -->
    	<div class='top_title'>
       		<h1>Get started with ECOMMERCE</h1> 
        </div>

		<!-- left register -->
        <div id = "left_login">
        </div>
        
        <!-- right register -->
         <div class = "right_form" >
        	<form  id='login' action='register.php' method='POST'>
            	<h1>New to ECOMMERCE.com? Register Below!</h1>
               	<?php
                    //print errors
                    if(array_key_exists('reg_error', $_SESSION) && !empty($_SESSION['reg_error']))
                    {
                        $reg_error_r = $_SESSION['reg_error'];
						$error_class_s = $_SESSION['error_class'];
						echo "<span id='$error_class_s'> $reg_error_r </span>";
						session_destroy();
                    }
                ?>
                
                <!-- first name -->
                <div class="outer_hint">
                    <label>First Name:</label> 
                    <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" class="field" 
                      	value="<?php if(isset($_POST['first_name'])){echo htmlentities($_POST['first_name']);}?>" />
                    <!-- HINT --><span class="hint">2 to 20 characters(letters and numbers only)</span>
                </div>			
    			
                <!-- last name -->
     			<div class="outer_hint">
                    <label>Last Name:</label> 
                    <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" class="field" 
                      	value="<?php if(isset($_POST['last_name'])){echo htmlentities($_POST['last_name']);}?>" />
                    <!-- HINT --><span class="hint">2 to 20 characters(letters and numbers only)</span>
                </div>		
               
               <!-- email -->
                <div class="outer_hint">
                    <label>Email Address:</label>
                    <input type="text" placeholder="Enter Email Address" name="email" id="email" class="field" 
                  	  value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email']);}?>" />
                    <!-- HINT --><span class="hint" style="width:350px;">Valid email address is needed to complete this sign up!</span>
                </div>	
                 
                 <!-- user name -->
                <div class="outer_hint">
                    <label>User Name:</label>
                    <input type="text" placeholder="Enter User Name" name="user_name" id="user_name" class="field"  
                    value="<?php if(isset($_POST['user_name'])){echo htmlentities($_POST['user_name']);}?>" />
                    <!-- HINT --><span class="hint">6 to 20 characters(letters and numbers only)</span>
                </div>			
        
        		<div class="outer_hint">
                    <label>Password:</label>
                    <input type="password" placeholder="Enter Password" name="password" id="login_password" class="field" value=""/>
                    <!-- HINT --><span class="hint">6 to 20 characters(letters and numbers only)</span>
                </div>	
                
                <!-- re password -->
                <div class="outer_hint">
                    <label>Re-Password:</label>
                    <input type="password" placeholder="Enter Re-Password" name="re_password" id="re_password" class="field" value=""/>
                    <!-- HINT --><span class="hint">6 to 20 characters(letters and numbers only)</span>
                </div>	
                
                <!-- list -->
                <p class="list">
                    <ul type="square"><br/>
                        <b>By clicking "Submit" I agree that:</b><br/><br/>
                        <li>I have read and accepted the <a href='#'>User Agreement</a> and <a href='#'>Privacy Policy</a>.</li>
                        <li>I am at least 18 years old.</li>
                    </ul>
				</p>

              	<!-- button -->
                <div id="submit">
                	<button type="submit" id="reg_button" class="button" name="reg_button">Sumbit</button>    
                </div>
             </form>
            </div>
      </div>
    </div>  

<!------------>
<!-- FOOTER -->
<!------------>
<?php
	include("../include/footer.php");
?>