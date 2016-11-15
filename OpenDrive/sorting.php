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
?>
<html>
<body>
<center>
<p style="color:green ; font-family:Cursive ; font-size=30px;"><u><strong>FILES DISPLAYED BY THE ORDER OF RATING<br></strong></u></p>
</center>
</body>
</html>


<?php
$value = $_POST['submi'];
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}

    $fetc = "SELECT * FROM users WHERE Rating >=3 ORDER BY Rating DESC ";
    $result = mysql_query($fetc);
	?>
	
	
<html>
<body>
<center>
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
	while ($row= mysql_fetch_array ($result)){
if($row['user'] == $var)
{
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
  
 
 <?php

echo "</tr>";
}
}



?>
</table>

<a href="cos-sear.html"><input type="submit" value="BACK" class="button-4" style="height:80px; width:100px"/></a></center>
<a href="two-buttons-first.html"><input type="submit" value="HOME" class="button-4" style="height:80px; width:100px"/></a>
<form action="logout.php" method="POST" enctype="multipart/form-data">
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="Button-3"/></a>
</form>
<style type="text/css">
.button-4{
float:right;
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
</center>


</body>
</html>

</body>
</html>