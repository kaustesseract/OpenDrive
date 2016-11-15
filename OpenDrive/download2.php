<html>
<body>
<?php 
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");


echo "<br>";



$value = $_GET['nam'];
 
$sql = "SELECT * FROM users WHERE name='$value' OR Mime2='$value'";
$result = mysql_query($sql);
while($rows = mysql_fetch_array($result))
{
 $name = $rows['name'];
 $bytes = $rows['Data'];
 $type = $rows['Mime'];
 $size = $rows['Size'];

 
 
switch($type) {
	 
	 case "application/pdf":
	 {
			header("Content-type: application/pdf");
			header('Content-Description: File Transfer');
			header('Content-Disposition: inline; filename="'.$name.'"');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Content-Tranfer-Encoding: binary');
			ob_clean();
			flush();

			echo($bytes);
			
         break;
	 }
  /*   case "image/jpeg":
	 {
		 header("Content-type : image/jpeg");
		 echo'<img src="data:image/png;base64,'.
base64_encode($bytes).'"/>';

//echo"$name<br>$type<br>";
		 
	 
         break;
	 }*/
	      case "image/jpg":
	 {
		 header("Content-type : image/jpg");
		 echo'<img src="data:image/png;base64,'.
base64_encode($bytes).'"/>';

//echo"$name<br>$type<br>";
		 
	 
         break;
	 }
	      case "image/png":
	 {
		 header("Content-type : image/png");
		 echo'<img src="data:image/png;base64,'.
base64_encode($bytes).'"/>';

//echo"$name<br>$type<br>";
		 
	 
         break;
	 }
	 /*case "application/octet-stream":
	 {
			header("Content-type: application/pdf");
			header('Content-Description: File Transfer');
			header('Content-Disposition: inline; filename="'.$name.'"');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Content-Tranfer-Encoding: binary');
			ob_clean();
			flush();

			echo($bytes);
			
         break;
	 }*/
	 default:
         echo "Problem.. NOT AN IMAGE OR PDF FILE <br>";
}
}





?>
<br>
<a href="two-buttons-first.html"><input type="submit" value="HOME" class="button-4" style="height:80px; width:250px"/></a></center>
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
</body>
</html>