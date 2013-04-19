<!-- Connect -->
<?php
	session_start(); //for errors
	include("../../INCLUDE/header.php");
?>


<!-- top menu and image-->
<div id = 'bg_middle2'>
	<div class = 'apparel_top_title'>
    	<h3><a href='../../index.php'>Home</a> > <a href='#'>Apparel</a> > <a href='#'>Men</a></h3> 
	</div>
    <div id = 'male_image_wrapper'>
		<img src='../../IMAGE/menu_graphics/apparel.png'>
	</div>  <hr id='hr'/>
</div>  <!-- bg_middle2 --->

     

<!----- full content area --------->
<div id="apparel_content_page_wrapper">
	<!---------------------------------------------------------->
    <!--------- left content area - sub menu ------------------->
    <!---------------------------------------------------------->
		<div id='left_menu'><br/>
    	<ul>
        	<li id='lin'>MEN CLOTHES</li>
        <br/>
        </ul>
        <ul>
        	<li id='lin'>Categories</li>
            <a href='?wlink=Men' class='active'><li>Appends</li></a>
            <a href='?wlink=Men_Hoodies'><li>Hoddies</li></a>
    		<a href='?wlink=Men_T-Shirts'><li>T-Shirts</li></a>
            <a href='?wlink=Men_Jewelry'><li>Jewelery</li></a>
            <a href='?wlink=Men_Jeans'><li>Jeans</li></a>
            <a href='?wlink=Men_Shoes'><li>Shoes</li></a>
            <a href='?wlink=Men_Swim'><li id='lil'>Swim</li></a>
   		</ul>
        <ul>
        	<li id='lin'>New Appends</li>
            <a href='?wlink=new'><li>New Appends</li></a>
            <a href='?wlink=like'><li id='lil'>Most Liked</li></a>
      	</ul>
        <ul>
        	<li id='lin'>Popular Apparels</li>
             <a href='?wlink=Men_Hoodies'><li>Hoddies</li></a>
            <a href='?wlink=Men_Jewelry'><li>Jewelery</li></a>
      	</ul>
	</div>
    
  <!------------------------>
    <!-- right content area -->
    <!------------------------>
<?php 
 if(isset($_GET['wlink'])){$sub_category = $_GET['wlink'];}else{$sub_category = 'Men';} //for form
	echo"
    <div id = 'index_content_page_wrapper2'> ";
    	/********* sort form **********/
		echo"
		<div id='apparel_form'><br/>
        <form action='men.php' method='GET'>
        	<label>Sort By:</label> 
            <select  name='order_by'>
            	<option value='newest'>Newest</option>
                <option value='oldest'>Oldest</option>
                <option value='low_heigh'>Price: Low to Heigh</option>
                <option value='heigh_low'>Price: Heigh to Low</option>
          	</select>
           	<input type='hidden' name = 'wlink' value='$sub_category'>
            <button type='submit' id='male_button' class='small_button'>go</button>
      	</form>
        </div>";/**** apparel_form ***/
        /*********************************************/
        /*********** table - images ******************/
        /*********************************************/
        echo"
		<table>
        	<tr>";
				/*** SET UP pagination  ***/ 
				$item_per_page = 9; 
				if(isset($_GET['wlink'])){$sub_category= $_GET['wlink'];}else{$sub_category='Men';}
				$page_query = mysql_query("SELECT COUNT('item_id') FROM item WHERE sub_category LIKE '$sub_category%'"); //count rows, return number
				$pages = ceil(mysql_result($page_query, 0) / $item_per_page); //print only 8 reco per page
				//if top variable is set ex: page = 4 --> user cant change in url --> i user go to index set page =1  
				$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
				$start= ($page - 1) * $item_per_page;
		
				/*** display images ***/
				if((isset($_GET['wlink'])) || (isset($_GET['order_by'])))//if url has a variable
				{
					if(isset($_GET['wlink'])){$sub_category = $_GET['wlink'];}else { $sub_category = 'Men';}
					
					if($sub_category == 'new') {$sub_category = 'Men'; $order = 'item_id DESC'; }
					if($sub_category == 'like'){$sub_category = 'Men'; $order = 'thumb_up DESC'; }
					
					if(isset($_GET['order_by'])){
					$order_by_p  = $_GET['order_by'];
						if($order_by_p == 'newest'){ $order = 'item_add_date DESC';}
					 	else if($order_by_p == 'oldest'){ $order = 'item_add_date ASC';}
					 	else if($order_by_p == 'low_heigh'){$order = 'price ASC';}
					  	else if($order_by_p == 'heigh_low'){ $order = 'price DESC';}
					}else { $order_by_p = 'heigh_low'; $order='price DESC';}
					
				
					$men_query = mysql_query("SELECT * FROM item WHERE sub_category LIKE '$sub_category%' ORDER BY $order 
													LIMIT $start, $item_per_page"); 
				}
				else//no url variable and no sumbit button
				{
					$order_by_p = 'heigh_low';
					$men_query = mysql_query("SELECT * FROM item WHERE sub_category LIKE '$sub_category%' ORDER BY price DESC LIMIT $start, $item_per_page");  
				}
				
				$count = 0;
				while($row = mysql_fetch_assoc($men_query))
				{	
					$item_id_db = $row['item_id'];
					$image_user_name_db = $row['image_user_name'];
					$image_folder_name_db = $row['image_folder_name'];
					$price_db = $row['price'];
				
					
					echo"<td >";
					
						echo"<a href='../zoom.php?item_id=$item_id_db'>
								<img src='http://localhost/eCommerce/IMAGE/STORE_ITEMS_DB/$image_folder_name_db' width='150' height='160'/>
							</a><br/>";
						echo"<a href='../zoom.php?item_id=$item_id_db'>
								<p id='name'>$image_user_name_db</p>
							 </a>";
						echo"<p id='price'>Our Price $$price_db</p>";
						
					echo "</td>";
					
					 $count++;
					 if($count == 3)       //3 cols
					 {
						echo "</tr><tr>"; // Start a new row at 3 cols
					  $count = 0;
					}
				}//end of while loop
				
           echo"</tr>";
   		echo"</table>";
    
	
		///////////////////////////////
		/****** pagination **********/
		//////////////////////////////
		if($pages >= 1 && $page <= $pages)
		{
			echo"<div id='container2'>";
				echo"<div class='pagination dark'>";
					echo'<a href="?page=1&wlink='.$sub_category.'&order_by='.$order_by_p.'" class="page dark">first</a>';
					for($x=2; $x< $pages; $x++) //botom pages link
					{
						echo'<a href="?page='.$x.'&wlink='.$sub_category.'&order_by='.$order_by_p.'" class="page dark">'. $x .'</a> '; 	
					}
					echo'<a href="?page='. $x .'&wlink='.$sub_category.'&order_by='.$order_by_p.'" class="page dark">last</a>';
				echo"</div>";
			echo"</div>";
		}
	?>
      </div><!-- index_content_page_wrapper2 -->
</div><!-- apparel_content_page_wrapper -->


<!-- FOOTER -->
<?php
	include("../../include/footer.php");
?>