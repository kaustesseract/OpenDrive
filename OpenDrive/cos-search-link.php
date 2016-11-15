
<?php
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");
session_start();
echo "<br>";

$value = $_POST['search'];
$var = $_SESSION['username'];



if($var == '')
{
	header("Location: logout.php");
	
}

//echo "All files having the word: $value ";
$sql = "SELECT * FROM users WHERE Paper LIKE '%$value%' OR Author LIKE '%$value%' OR Tag1 LIKE '%$value%' OR Tag2 LIKE '%$value%'";
$result = mysql_query($sql);
?>
<html>
<body background="Album_cover_for_Polaris_(Tesseract_album).jpg" height="610" width="1355.5">
<a href="cos-sear.html"><input type="submit" value="BACK" class="button-4" style="height:80px; width:100px"/></a></center>
<center>
<table width = "600" border="5"  cellpadding = "5" cellspacing = "1" style="border:7px  solid black; background-color:white">
<tr style="background-color:lawngreen; border:5px solid black">
<th style="border:3px solid black">Paper</th>
<th style="border:3px solid black">Author</th>
<th colspan=2 style="border:3px solid black">Tags(user-defined + Predefined)</th>

<th colspan=2 style="border:3px solid black">Files </th>



</tr>
<?php
while($rows = mysql_fetch_assoc($result))
{
if($rows['user'] == $var)
{   
    $name=$rows['name'];
    $type=$rows['Mime'];
	$mime2=$rows['Mime2'];
echo"<tr>";

echo"<td>".$rows['Paper']."</td>";
echo"<td>".$rows['Author']."</td>";
echo"<td>".$rows['Tag1']."</td>";
echo"<td>".$rows['Tag2']."</td>";
echo"<td>".$rows['name']."</td>";
?>


<td><a href='download2.php?nam=<?php echo $rows['name'],$rows['Mime2'];?>'>CLICK  HERE 
  </a></td> 
  <form action="logout.php" method="POST" enctype="multipart/form-data">
<a href="two-buttons-first.html"><input type="submit" value="LOGOUT" name="logout" class="Button-3"/></a>
</form>
 
 <?php

echo "</tr>";
}
}

?>

</table>

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
</body>
</html>
<style type="text/css">
a
{
	text-decoration:none;
	color:blue;
}

