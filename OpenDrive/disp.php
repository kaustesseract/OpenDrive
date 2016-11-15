<?php 
error_reporting(E_ERROR); 
define('DB_NAME' , 'test');
define('DB_USER' , 'root');
define('DB_PASSWORD' , '');
define('DB_HOST' , 'localhost');
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
$value = $_POST['subm'];
$var = $_SESSION['username'];

if($var == '')
{
	header("Location: logout.php");
	
}
    $fetc = "SELECT * FROM users WHERE user='$var'";
    $result = mysql_query($fetc);
?>
<html>
<body background="Album_cover_for_Polaris_(Tesseract_album).jpg" height="610" width="1355.5">
<center>
<table width = "600" border="5"  cellpadding = "5" cellspacing = "1" style="border:7px  solid black; background-color:white">
<tr style="background-color:lawngreen; border:5px solid black">
<th style="border:3px solid black">Paper</th>
<th style="border:3px solid black">Author</th>
<th colspan=2 style="border:3px solid black">Tags(user-defined + Predefined)</th>
<th colspan=4 style="border:3px solid black">Files </th>



</tr>
<?php
while($rows = mysql_fetch_assoc($result))
{
 
    $name=$rows['name'];
    $type=$rows['Mime'];
	$typo=$rows['Mime2'];
echo"<tr>";

echo"<td>".$rows['Paper']."</td>";
echo"<td>".$rows['Author']."</td>";
echo"<td>".$rows['Tag1']."</td>";
echo"<td>".$rows['Tag2']."</td>";
echo"<td>".$rows['name']."</td>";
?>


<td><a href='download2.php?nam=<?php echo $rows['name'],$rows['Mime2'];?>'>CLICK  HERE 
  </a></td> 
  
 <?php
echo "</tr>";
/*if(isset($_POST['su']))
{
	while($rows = mysql_fetch_assoc($result))
	{
$value = $rows['Paper'];
$sql = "DELETE FROM users WHERE Paper='$value'";
$result = mysql_query($sql);
if($result)
{   
      echo 'Your file below was successfully deleted!';
        
}
}
}*/
}
?>
</table>
<a href="cos-sear.html"><input type="submit" value="BACK" class="button-4" style="height:80px; width:100px"/></a>
<a href="two-buttons-first.html"><input type="submit" value="HOME" class="button-4" style="height:80px; width:110px"/></a>
<form action="logout.php" method="POST" enctype="multipart/form-data">
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="Button-3"/></a>
</form>
</body>
</html>
<style type="text/css">
a
{
	text-decoration:none;
	color:blue;
}

.button-4{
float:right;
background-color:gold;				
font-family:Cursive;
font-size:30px;
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