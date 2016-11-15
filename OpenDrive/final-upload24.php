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
session_start();

	

if(isset($_POST['submit']))
{
	$file=$_POST['urly'];
$value1 = $_POST['paper']; 
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}
$value3 = $_POST['author'];
$value4 = $_POST['tag_name1'];
$value5 = $_POST['tag'];
$mime =  $_POST['typ'];
$mime2= $_POST['paper'];
$value6 = $_POST['do'];
$insertdate = $_POST['Date'];
$insertdate = mysql_real_escape_string($insertdate);
$insertdate = date('Y-m-d', strtotime($_POST['Date']));
$value7=@file_get_contents($file);
touch($var.'_sample3.pdf');
file_put_contents($var.'_sample3.pdf', $value7);
//$value8 = mysql_real_escape_string (file_get_contents ('C:\wamp\www\intern\sample3.pdf'));;
$value8 = mysql_real_escape_string (file_get_contents ('./'.$var.'_sample3.pdf'));;

/*$sql = "SELECT * FROM users WHERE Paper='$value1' OR Author='$value3' OR Tag1='$value5'";
$result1 = mysql_query($sql);
?>
<table width = "800" border = "1" cellpadding = "7" cellspacing = "1"  style="border:7px  solid black ; background-color:white">
<tr style="background-color:yellow">
<th>Paper(user-defined)</th>
<th>Author</th>
<th colspan=2>Tags
(user-defined and pre-defined)</th>
<th>Paper-Name</th>
<th>Rating </th>
<th>Link (To view files) </th>

</tr>
<?php
 if($result1)
 {
 	while ($row= mysql_fetch_array ($result1))
	{
?>
		
		<h1><u style="font-family: algerian"> THESE ARE THE EXISTING PAPERS </u></h1>
<?php
		$name=$row['name'];
		$type=$row['Mime'];
		$typo=$row['Mime2'];
	 
	
		echo"<tr>";

		echo"<td>".$row['Paper']."</td>";
		echo"<td>".$row['Author']."</td>";
		echo"<td>".$row['Tag1']."</td>";
		echo"<td>".$row['Tag2']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['Rating']."</td>";



?>



<td> <a href='download2.php?nam=<?php echo $row['name'],$row['Mime2'];?>'>    CLICK HERE</a> 
  </td> 
  <h1><u style="font-family: algerian"> DO YOU WANT TO CONTINUE?</u></h1>

<a href="final-upload24aug.html"><input type="submit" value="NO" class="button-4" style="height:80px; width:100px"/></a>
<form action="final-upload.php" enctype="multipart/form-data" method="POST">
<input type="submit" value="YES" name="subm" class="button-4" style="height:80px; width:100px"/>
 </form>
 <?php

echo "</tr>";
}
}*/

	$split = explode(".",$file);
	$cm = $split[count($split)-1];
	if(strpos($cm,'pdf')!== false || strpos($cm,'jpeg')!== false || strpos($cm,'jpg')!== false || strpos($cm,'png')!== false) 
	{
		$result= mysql_query("INSERT INTO users(`Paper`,`Author`,`Tag1`,`Tag2`,`Mime`,`Mime2`,`Data`,`Rating`,`Date`,`user`) VALUES('$value1','$value3','$value4','$value5','$mime','$mime2','$value8','$value6','$insertdate','$var')");
		
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
		
 
?>
<br><br><br>
<a href="cos-sear.html"><input type="submit" value="SHOW FILE" class="button-4" style="height:50px; width:150px"/></a></center>
<br><br><a href="two-buttons-first.html"><input type="submit" value="HOME" class="button-5" style="height:50px; width:150px"/></a></center>
<form action="logout.php" method="POST" enctype="multipart/form-data">
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="Button-3"/></a>
</form>
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
</body>
</html>