<!-- Connect -->
<?php
	session_start(); //for errors
	include("../INCLUDE/header.php");
?>


<!-- IF USER IS ALREADY LOGED IN ALREADY-->
<?php
if((isset($_COOKIE['username'])))  /*** user is loged in ***/
{
	header("location: ../index.php");
	exit();
}
?>


<!-- WHEN USE HIT "LOG IN" Button on form -->
<?php
	  if(isset($_POST['login_button']))  
	{
		$username_p = $_POST['username'];
		$password_p = $_POST['password'];
		$remember_p =  isset($_POST['remember']); //need isset for checkbox
		$log_error = "";
		

			
		//check errors
		if(empty($username_p) || empty($password_p)) 
		{
			$log_error .= "Error - Enter all the fields";
		}
		else
		{
			//BINARY for case sensitive
			$sql = mysql_query("SELECT user_id FROM user WHERE user_name='$username_p' AND BINARY password='$password_p'");
				
			//make sure person exists in database---
			$existCount = mysql_num_rows($sql); //count the rows where the sql is ture 
			if($existCount == 1)                //make sure name is only one in database
			{
				$row = mysql_fetch_assoc($sql);
				$user_id_db = $row["user_id"];
				
				//so site can remember who loged in
				if($remember_p == "on")
				{
					//cookies doesnt get destory when window is close
					//setcookie("id", $id, time()+172800); 
					//setcookie("username", $username_p, time()+172800); //seconds - 2 days 
					//header("location: ../index.php");	
				}
				else if($remember_p == "")
				{
					//cookies doesnt get destory when window is close
					setcookie("id", $user_id_db, time()+172800, '/eCommerce/');     //,,cookie will be in e_comerce folder
					setcookie("username", $username_p, time()+172800,'/eCommerce/'); //seconds - 2 days 
					header("location: ../index.php");		
				}
			}
			else
			{
				$log_error .= 'Error - Incorrect username or password!';
			}
		}
		$_SESSION['log_error'] = $log_error;
	}	
?><head>
	<title>Log In</title>      
</head>







<div id = 'bg_middle2'> 
    <div id = 'login_content_page_wrapper'>
    
    
    	<div class='top_title'>
       		<h1>InSecure Checkout</h1> 
            <img id="l_lock_img" src="../IMAGE/lock.png" width="23px" height="23px"/>
        </div>
		
        
        

        <div id = "left_login">
        </div>
        
        <div class = "right_form">
        	<form  id='login' action='login.php' method='POST'>
            	<h1>Log in to your account!</h1>
               	<?php
                    //print errors
                    if(array_key_exists('log_error', $_SESSION) && !empty($_SESSION['log_error']))
                    {
                        $log_error_r = $_SESSION['log_error'];
						echo "<span id='error_print''> $log_error_r </span>";
                       session_destroy();
                    }
                ?>
                <div class="outer_hint">
                    <label>Username:</label> 
                    <input type="text" placeholder="Enter Username" name="username" id="login_username" class="field" 
                      	value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username']);}?>" />
                    <!-- HINT --><span class="hint">6 to 20 characters(letters and numbers only)</span>
                </div>			
    
                <div class="outer_hint">
                    <label>Password:</label>
                    <input type="password" placeholder="Enter Password" name="password" id="login_password" class="field" value=""/>
                    <!-- HINT --><span class="hint">6 to 20 characters(letters and numbers only)</span>
                </div>			
        
                <p class="forgot"><a href="forgotpassword.php">Forgot your password?</a></p>
              
                <div id="submit">
                	<button type="submit" id="login_button" class="button" name="login_button">Log in</button> 
                    	<label>
        					  <input type="checkbox" name="remember" id="login_remember" class="checkbox" value="yes" />
          						<p id ="login_stay">Keep me signed in</p>
        				</label>    
                </div>
             </form>
            </div>
        </div>
</div>



<?php
	include("../include/footer.php");
?>