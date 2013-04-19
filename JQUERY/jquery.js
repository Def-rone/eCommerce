// JavaScript Document
$(document).ready(function() 
{
	/*****************************/
	/******* SLIDER SCRIPT *******/
	/*****************************/
	$.getJSON('http://localhost/eCommerce/JQUERY/SLIDER/agile_carousel_data.php', function(data) {
			$(document).ready(function(){
				$('#flavor_1').agile_carousel({
					carousel_data: data,
					carousel_outer_height: 288,
					carousel_height: 288,
					slide_height: 288,
					carousel_outer_width: 960,
					slide_width: 960,
					transition_time: 500,
					timer: 5000,
					continuous_scrolling: true,
					control_set_1: 'numbered_buttons',
					no_control_set: 'hover_previous_button, hover_next_button'
				});
			});
		});
	
	

	/*****************************/
	/******* ZOOMER SCRIPT *******/
	/*****************************/
  $('.MYCLASS').jqzoom({ zoomType: 'reverse' }); 


   /******************************/
   /******* TABS *****************/
   /******************************/
$( "#tabs" ).tabs();


   /***********************************/
   /******* SELECT BOX *****************/
   /************************************/
    if (!$.browser.opera) {
        $('select.color_select').each(function(){
            var title = $(this).attr('title');
            if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
            $(this)
                .css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
                .after('<span class="color_select">' + title + '</span>')
                .change(function(){
                    val = $('option:selected',this).text();
                    $(this).next().text(val);
                    })
        });
    };
	 if (!$.browser.opera) {
        $('select.size_select').each(function(){
            var title = $(this).attr('title');
            if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
            $(this)
                .css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
                .after('<span class="size_select">' + title + '</span>')
                .change(function(){
                    val = $('option:selected',this).text();
                    $(this).next().text(val);
                    })
        });
    };
	
	
});

//////////////////////////////////////////////////////////////
/////////////////////////// DIALOG BOX ////////////////////////
//////////////////////////////////////////////////////////////
$.fx.speeds._default = 500;
$( "#dialog01" ).dialog({
    autoOpen: false,   //don't auto open
    show: "blind",    //how to open window
    hide: "explode",  //how to exit window
	width: 400,
	resizable: false,
    modal: true,
	buttons: {
    	Cancel: function() {
        	$( this ).dialog( "close" );
         }
    }
});
 
$( "#opener01" ).click(function() {
      $( "#dialog01" ).dialog( "open" );
      return false;
});


$.fx.speeds._default = 500;
$( "#dialog02" ).dialog({
    autoOpen: false,   //don't auto open
    show: "blind",    //how to open window
    hide: "explode",  //how to exit window
	width: 400,
	resizable: false,
    modal: true,
	buttons: {
    	Cancel: function() {
        	$( this ).dialog( "close" );
         }
    }
});
 
$( "#opener02" ).click(function() {
      $( "#dialog02" ).dialog( "open" );
      return false;
});

$( "#opener04" ).click(function() {
      $( "#dialog02" ).dialog( "open" );
      return false;
});



$.fx.speeds._default = 500;
$( "#dialog03" ).dialog({
    autoOpen: false,   //don't auto open
    show: "blind",    //how to open window
    hide: "explode",  //how to exit window
	width: 400,
	resizable: false,
    modal: true,
	buttons: {
    	Cancel: function() {
        	$( this ).dialog( "close" );
         }
    }
});
 
$( "#opener03" ).click(function() {
      $( "#dialog03" ).dialog( "open" );
      return false;
});


///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
////////////////////////// AJAX ///////////////////////////////
///////////////////////////////////////////////////////////////
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}





//like button
$('#like_button').click(function()
{ 
	var item_id = getUrlVars()["item_id"]; //get var from url

	$('#div_1').html('<img src="../IMAGE/loader.gif" width="20px" height="20px"/>'); //loading wheel animated
	$.ajax({
		type: 'POST',
		url: 'like.php',       //run url file
		data: 'item_id_s=' + item_id,  //send variable to url file
		//data: 'name=' + name + '&name2=' + name2,
		statusCode: { 404: function() {  $('#div_1').html('page not found'); } },
		success: function(data) { $('#div_1').html(data); }//put dislike.php result here
			
	}).complete(function(){
		//alert('ajax request complete - might be error ex value string has numbers?'); 
	}).success(function(){
		//alert('ajax request success - Every thing works');
	});	
});


//dislike button
$('#dislike_button').click(function()
{ 
	var item_id = getUrlVars()["item_id"]; //get var from url

	$('#div_2').html('<img src="../IMAGE/loader.gif" width="20px" height="20px"/>'); //loading wheel animated
	$.ajax({
		type: 'POST',
		url: 'dislike.php',       //run url file
		data: 'item_id_s=' + item_id,  //send variable to url file
		//data: 'name=' + name + '&name2=' + name2,
		statusCode: { 404: function() {  $('#div_2').html('page not found'); } },
		success: function(data) { $('#div_2').html(data); } //put dislike.php result here
			
	}).complete(function(){
		//alert('ajax request complete - might be error ex value string has numbers?'); 
	}).success(function(){
		//alert('ajax request success - Every thing works');
	});	
});




$('#like_button, #dislike_button').click(function()
{
	var item_id = getUrlVars()["item_id"]; //get var from url

	$.ajax({
		type: 'POST',
		url: 'view.php',      
		data: 'item_id_s=' + item_id,
		success: function(data) { $('#ratingsbar').html(data); }
	}).complete(function(){
		//alert('ajax request complete - might be error ex value string has numbers?'); 
	}).success(function(){
		//alert('ajax request success - Every thing works');
	});	
});




$('a').click(function()
{
		//var geturl = getUrlVars()['wlink'];
		
		//alert(geturl);
		    $(this).addClass('active'); // Mark link as active
});
