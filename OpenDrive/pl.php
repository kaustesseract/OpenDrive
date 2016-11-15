<html>
<body background="Album_cover_for_Polaris_(Tesseract_album).jpg" height="610" width="1355.5">
<?php
error_reporting(E_ERROR); 
define('DB_NAME' , 'test');
define('DB_USER' , 'root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$link = @mysql_connect( DB_HOST , DB_USER, DB_PASSWORD);

if(!$link)
{
	die('could not connect'.mysql_error());
	
}
$db_selected = mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('cant use'.DB_NAME . ';'.mysql_error());
	
}
	
		
		$multiple = $_POST['checkbox'];
		
		foreach ($multiple as $item_id)
		{
		
		$sql = "DELETE FROM users WHERE ID =" .mysql_real_escape_string($item_id);
		//$sql = "DELETE FROM thor WHERE Id = '$item_id'";
		$result = mysql_query($sql);
		
		}
		
	if($result)
	{
		?>
<html>
<body>
<center>
<h1><u style="font-family: algerian"> YOU FILE WAS DELETED SUCCESSFULLY</u></h1>
<center><a href="display_all.php"><input type="submit" value="BACK" class="button-1" style="height:100px; width:300px"/></a></center>
<style type="text/css">

.button-1{
position:absolute;
transition:5s ease;
top:20%;
left:30%;
background-color:black;
padding:10px;				
font-family:Cursive;
font-size:40px;
text-decoration:none;		
color:white;
border:10px solid white;
border-radius:100px;
}
.button-1:active{				<!--movement-->
padding-bottom:10px;
padding-left:10px;
padding-right:10px;
padding-top:11px;
}
</style>
</center>
</html>
</body>
	<?php
		
	}
	else
	{
			?>
<html>
<body>
<center>
<h1><u style="font-family: algerian"> YOU FILE WAS NOT DELETED SUCCESSFULLY</u></h1>
<center><a href="display_all.php"><input type="submit" value="BACK" class="button-1" style="height:100px; width:300px"/></a></center>
<form action="logout.php" method="POST" enctype="multipart/form-data">
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="Button-3"/></a>
</form>
<style type="text/css">

.button-1{
position:absolute;
transition:5s ease;
top:20%;
left:30%;
background-color:black;
padding:10px;				
font-family:Cursive;
font-size:40px;
text-decoration:none;		
color:white;
border:10px solid white;
border-radius:100px;
}
.button-1:active{				<!--movement-->
padding-bottom:10px;
padding-left:10px;
padding-right:10px;
padding-top:11px;
}

.button-3{
position:absolute;
top:0%;
left:0%;
background-color:black;
padding:10px;
font-family:cursive;
font-size:10px;
text-decoration:none;
color:white;
border:10px solid white;
border-radius:100px;
}
</style>
</center>
</html>
</body>
	<?php	
		
	}
	
	

?>