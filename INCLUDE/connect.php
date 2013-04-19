<?php
/*Variable*/ /*function*/ /*"server", "username", "password""*/
$connect  =  mysql_connect('localhost',   'root',     '');
if($connect != true)
{
   die('Error - Problem connecting to database.' . mysql_error());	
}

/* (step2) Select database*/
                            /* database name */
$db_selected = mysql_select_db("e_commerce");
if($db_selected != true)
{
   die('Error - Problem selecting the database.' . mysql_error());	
}
?>