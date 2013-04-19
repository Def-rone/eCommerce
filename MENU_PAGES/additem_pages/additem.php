<!-- CONNECT AND HEADER -->
<?php
	session_start(); //for errors
	include("../../INCLUDE/header.php");
?>

 
 <!-- USER HAS TO BE LOGED IN -->
<?php
 if(!(isset($_COOKIE['username']))) /*** HAS TO BE LOGED IN ***/
	{
		header("location: ../../index.php");	
		exit();
	}
?>




 <!-- ONLY IKHLAS CAN COME TO THIS PAGE -->
<?php	
	$user_name_c = $_COOKIE['username'];
	if(!(strcasecmp($user_name_c, 'ikhlas')) == 0)          //*** only ikhlas can come here ***/
	{
		header("location: ../../index.php");	
		exit();
	}
?>




 <!-- SUBMIT BUTTON -->
<?php 
    echo"<head><title>Add item!</title></head>";
	if(isset($_POST['additem_button'])) //if user hit submit button 
	 {
			$user_name_c     = $_COOKIE['username'];
			$image_user_name_p    = $_POST['image_user_name'];
			$main_category_p = $_POST['main_category']; 
			$sub_category_p  = $_POST['sub_category'];
			$price_p         = $_POST['price'];
			$description_p   = $_POST['description'];
			$feature_p       = $_POST['feature'];
			$key_word_p      = $_POST['key_word'];
			$add_item_error  = "";
			$error_class = "error_print";
			
			
			//check for errors
			if(empty($image_user_name_p) || empty($main_category_p) || empty($sub_category_p) || empty($price_p) ||
		      empty($description_p) || empty($feature_p) || empty($key_word_p))
			{
				$add_item_error .= "Error - Enter all the fields";
			}
			//if()
			//{
				//$add_item_error .= "Error - Image name has to start with letter";
			//}
			 else if(strlen($image_user_name_p) > 99)
			{
				$add_item_error .= "Error - Image name is too long!";
			}
			else if(!preg_match("/^[a-zA-Z]/",$image_user_name_p))
			{
				$add_item_error .= "Error - Image name has to start with letter";
			}
			else if(!(is_numeric($price_p)))
			{
				$add_item_error .= "Price has to be in number form. For example 0.00";
			}
			else if(strlen($description_p) > 400)
			{
				$add_item_error .= "Error - Image description is too long!";
			}
			else if(strlen($feature_p) > 400)
			{
				$add_item_error .= "Error - Image features are too long!";
			}
			else
			{
				$sql = mysql_query("SELECT * FROM item WHERE image_user_name = 'user_name_c'");
				$existCount = mysql_num_rows($sql); //count the rows where sql query is true 
				if($existCount >= 1)
				{
					$add_item_error .= "That image name is already taken";
				}
				else
				{
					
				$image_user_name_p = ucwords($image_user_name_p);   // upper case begining of every word
				$price_p = number_format($price_p, 2);                  //2 decimal. ex (1.0, 1)= 1.00
					
				//place image in the folder
				$ext = pathinfo($_FILES['image_file']['name'], PATHINFO_EXTENSION); //return png,jpg,etc
				$image_folder_name = $main_category_p . '_' . $sub_category_p. '_' .  time()  . '.' . $ext; //create unife image name
				
				move_uploaded_file($_FILES['image_file']['tmp_name'], "../../IMAGE/STORE_ITEMS_DB/$image_folder_name"); //place image in folder
				
				 
			//add this product into the database now
			$sql = mysql_query("INSERT INTO item 
			(image_user_name, image_folder_name, main_category, sub_category, price, description, features, key_words, sold,thumb_up,thumb_down,item_add_date)
						VALUES('$image_user_name_p', '$image_folder_name', '$main_category_p', '$sub_category_p', '$price_p', '$description_p', 
						'$feature_p', '$key_word_p', '0', '0', '0', now())") or die(mysql_error()); //date() = type date/date-time/timestamp..etc..
				
				$add_item_error .= "Succues - <u>$image_user_name_p</u> has been uploadled";
				$error_class = "default_error_print";
				}
			}
			$_SESSION['add_item_error'] = $add_item_error;
			$_SESSION['error_class'] = $error_class;
	
	
			//stop from adding double on refresh
			header("location: additem.php");	
			exit();
		} 
?>


<div id = 'bg_middle2'>
	<div id = 'additem_content_page_wrapper'>
    				
    	<div class = 'top_title'>
       		<h1>Add an Item</h1> 
            	<img id="add_img" src="../../IMAGE/add_item.png" width="23px" height="23px"/>
		</div>
                    
                    
        <div id ='add_item_left'>
        </div>
                    
         
         <div class='right_form'>
         	<!-- to upload image need enctype -->
          	<form  id='login' action='additem.php' enctype="multipart/form-data" method='POST'>
            	<h1>Before you add your item!</h1>
					<?php 
					 
                        //print errors
                    	 if(array_key_exists('add_item_error', $_SESSION) && !empty($_SESSION['add_item_error']))
						{
                        	$add_item_error_r = $_SESSION['add_item_error'];
							$error_class_s = $_SESSION['error_class'];
                            echo "<span id='$error_class_s'> $add_item_error_r </span>";
							session_destroy();
                        }
                     ?>
               <div class="outer_hint">
               		<label>Image Name:</label> 
                   		<input type="text" placeholder="Enter Image Name" name="image_user_name" id="image_user_name" class="field" 
                        	value="<?php if(isset($_POST['image_user_name'])){echo htmlentities($_POST['image_user_name']);}?>" />
                         <!-- HINT --><span class="hint">6 to 20 characters(letters and numbers only)</span>
                        </div>		
                        
                       
                        
                     <div class="outer_hint" >
                   		 	 <label>Main Category:</label> 
                              <select name = 'main_category' >
                                  <option value="">Choose...</option>
                                  <option value="Apparel">Apparel</option>
                                  <option value="Home_Decor">Home Deco</option>
                                  <option value="Beauty">Beauty</option>
                            </select>

                		</div>
                        
                        <div class="outer_hint" >
                   		 	 <label>Sub Category:</label> 
                            <select  name="sub_category">
                              <option value="">Choose...</option>
                              <option value="Women_Dresses">Women's Dresses</option>
                              <option value="Women_Tops">Women's Tops</option>
                              <option value="Women_T-Shirts">Women's T-Shirts</option>
                              <option value="Women_Pants">Women's Pants</option>
                              <option value="Women_Skirts">Women's Skirts</option>
                              <option value="Women_Active-wear">Women's Active wear</option>
                              
                              <option value="Men_Hoodies">Men's Hoodies</option>
                              <option value="Men_T-Shirts">Men's T-Shirts</option>
                              <option value="Men_Jewelry">Men's Jewelry</option>
                              <option value="Men_Jeans">Men's Jeans</option>
                              <option value="Men_Shoes">Men's Shoes</option>
                              <option value="Men_Swim">Men's Swim</option>

            
                              <option value="Furniture">Furniture</option>
                              <option value="Accessories">Accessories</option>
                              <option value="Bath_and_Body">Bath and Body</option>
                              <option value="hair_care">Hair Care</option>
                            </select>
                		</div>

                        <div class="outer_hint">
                   		 	 <label>Price:</label> 
                            <input type="text" placeholder="Enter Price" name="price" id="price" class="field" 
                                value="<?php if(isset($_POST['price'])){echo htmlentities($_POST['price']);}?>" />
                            <!-- HINT --><span class="hint">Do not add the '$' character</span>
                		</div>
                        
                        <div class="outer_hint">
                   		 	 <label>description:</label> 
                             <textarea type="text" placeholder="Enter Description" name="description" id="description" class="field" rows="8"></textarea>
                            <!-- HINT --><span class="hint">Give a description of your item.(dont add ' )</span>
                		</div>
                        		
                         <div class="outer_hint">
                   		 	 <label>features:</label> 
                             <textarea type="text" placeholder="Enter Features" name="feature" id="feature" class="field" rows="5"></textarea>
                           		 <!-- HINT --><span class="hint">List feature of your item.</span>
                		</div>
                        
                         <div class="outer_hint">
                            <label>Key Words:</label> 
                            <input type="text" placeholder="Enter Key Words" name="key_word" id="key_word" class="field" 
                                value="<?php if(isset($_POST['key_word'])){echo htmlentities($_POST['key_word']);}?>" />
                            <!-- HINT --><span class="hint">Enter as many key words you like.</span>
                        </div>
                        
                         <div class="outer_hint">
                             <input type ="file" name="image_file" id="image_file" class='file'/>
                		</div>
                        
                          <div id="submit">
                			<button type="submit" id="additem_button" class="button" name="additem_button">Add Item</button>
                          </div>	
                        </form>
                    </div>
	    </div>
	</div>
    
    	

<!-- FOOTER -->
<?php
	include("../../include/footer.php");
?>