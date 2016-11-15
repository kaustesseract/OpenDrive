<html>
<body background="Album_cover_for_Polaris_(Tesseract_album).jpg" height="610" width="1355.5">
<?php
error_reporting(E_ERROR); 
  
	//connect to database 
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

if(isset($_POST['subm']))
{

	$split = explode(".",$file);
	$cm = $split[count($split)-1];
	if(strpos($cm,'pdf')!== false)
	{
		$result= mysql_query("INSERT INTO users(`Paper`,`Author`,`Tag1`,`Tag2`,`Mime`,`Mime2`,`Data`,`Rating`,`Date`) VALUES('$value1','$value3','$value4','$value5','$mime','$mime2','$value8','$value6','$insertdate')");
		
    ?>
<html>
<body>
<center>
<h1><u style="font-family: algerian"> YOU FILE WAS ADDED SUCCESSFULLY</u></h1>
<center><a href="final-upload24aug.html"><input type="submit" value="BACK" class="button-1" style="height:100px; width:300px"/></a></center>
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
<h1><u style="font-family: algerian"> YOU FILE WAS NOT ADDED SUCCESSFULLY </u></h1>
<h1><u style="font-family: algerian"> PLEASE CHECK THE URL </u></h1>
<center><a href="final-upload24aug.html"><input type="submit" value="BACK" class="button-1" style="height:100px; width:300px"/></a></center>
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

 }
}
		
 
?>
<br><br><br>
<a href="cos-sear.html"><input type="submit" value="SHOW FILE" class="button-4" style="height:50px; width:150px"/></a></center>
<br><br><a href="two-buttons-first.html"><input type="submit" value="HOME" class="button-5" style="height:50px; width:150px"/></a></center>
<style type="text/css">
.button-4{

background-color:gold;				
font-family:Cursive;
font-size:20px;
text-decoration:none;		
color:black;
border:5px solid black;
border-radius:100px;
}
.button-5{

background-color:gold;				
font-family:Cursive;
font-size:20px;
text-decoration:none;		
color:black;
border:5px solid black;
border-radius:100px;
}
</body>
</html>