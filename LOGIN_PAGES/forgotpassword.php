<!-- Connect -->
<?php
	session_start(); //for errors
	include("../include/header.php");
	require_once('../require/class.phpmailer.php');   //include mail file to send email
	require_once('../require/class.smtp.php');        //include mail file to send email
?>


<!-- IF USER IS ALREADY LOGED IN -->
<?php
if((isset($_COOKIE['username'])))  /*** user is loged in ***/
{
	header("location: ../index.php");	
	exit();
}
?>


<!-- WHEN USE HIT "SUMBIT EMAIL" Button on form -->
<?php
	if(isset($_POST['forgot_button']))  
	{	
		$email_p = $_POST['email']; //get email from form$forgot_error = "";
		$forgot_error = "";
		
		
		//check errors
		if(empty($email_p)) 
		{
			$forgot_error .= "Error - Enter your email address";
		}
		else if(!(filter_var($email_p, FILTER_VALIDATE_EMAIL)))   // else if(preg_match("/[a-zA-Z0-9]@[a-zA-Z0-9].[a-zA-Z]/", $email_p) < 0) 
		{
			$forgot_error .= "Invalid e-mail address";
		}
		else
		{
			//get email from database
			$user_query = mysql_query("SELECT * FROM user WHERE email = '$email_p'");
			$row = mysql_fetch_assoc($user_query);	
			$email_db = $row['email']; 
		
			//check email == database email match
			if($email_p != $email_db)
			{
				$forgot_error .= "There is no user by that name";
			}
			else
			{
				
				$first_name_db = $row['firstname'];   //get user name from table	
				$user_name_db = $row['username']; //get user name from table
				$password_db = $row['password'];   //old_passworrddb = get from table
				
				/****** send mail (SMT will be different if you go LIVE) *******/
				$mail = new PHPMailer();
				$mail->IsSMTP(); 
				$mail->SMTPAuth   = true;                  // enable SMTP authentication
				$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
				$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
				$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
				$mail->Username = "ikhlasah06@gmail.com";    //yourname@yourdomain
				$mail->Password = "gotohellbitch";           //password
				
				//to
				$mail->AddAddress($email_p, $user_name_db);
				//subject
				$mail->Subject = "Forgot password";
				//html body
				$mail->IsHTML(true);
				$mail->Body = "Hello $first_name_db,<br/><br/>
								Your Username is <u>$user_name_db</u> and your password is <u>$password_db</u><br/><br/>
									Thanks,<br/>Ikhlas Ahmed";
				//from
				$mail->From = "ikhlasah06@gmail.com";
				$mail->FromName = "ikhlas";
				$mail->wordWrap = 50;
				//send
				if(!$mail->send())
				{
					$forgot_error .= "Mail error ".$mail->ErrorInfo;
				}
				else
				{
					$forgot_error .= "E-mail has be sent to <b><u>$email_p</u></b>";
				}
			}
		}
		$_SESSION['forgot_error'] = $forgot_error;
	}
	
?><head>
	<title>Forgot password?</title>      
</head>








<div id = 'bg_middle2'> 
    <div id = 'login_content_page_wrapper'>
    
    
    	<div class='top_title'>
       		<h1>Forgot Password?</h1> 
            <img id="f_lock_img" src="../IMAGE/lock.png" width="23px" height="23px"/>
        </div>
		
          

        <div id = "left_login">
        </div>
        
        <div class = "right_form">
        	<form  id='login' action='forgotpassword.php' method='POST'>
            	<h1>Identify Your Account</h1>
               	<?php
                	//print errors
             	   if(array_key_exists('forgot_error', $_SESSION) && !empty($_SESSION['forgot_error']))
                	{
                		$forgot_error_r = $_SESSION['forgot_error'];
						echo "<span id='error_print' style='background-color:#D00000;'> $forgot_error_r <br/></span>";
                   	 	session_destroy();
              		}
              ?>

                <div class="outer_hint">
                    <label>Email Address:</label> 
                    <input type="text" placeholder="Enter Your Email" name="email" id="forgot_email" class="field" 
                      	value="" />
                    <!-- HINT --><span class="hint">Please enter your valid email address.</span>
                </div>			
              
                <div id="submit">
                	<button type="submit" id="forgot_button" class="button" name="forgot_button">Submit Email</button> 
                </div>
             </form>
            </div>
        </div>
</div>


<?php
	include("../include/footer.php");
?>