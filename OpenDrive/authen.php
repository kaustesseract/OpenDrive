<html>
<body background="faded-colors-digital-art-hd-wallpaper-1920x1080-29964.jpg" height="610" width="1355.5">
<?php
error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");
session_start();
if(isset($_POST['submit']))
{
$file = $_POST['username'];
$_SESSION['username'] = $file;
$value1 = $_POST['password']; 
$PasswordHash = md5($value1);
$result = mysql_query("SELECT user,pass FROM login WHERE user='$file'");
$row = mysql_fetch_array($result);
if($row['user']==$file && $row['pass']==$PasswordHash)
	{
	 ?>
<html>
<body>
<center>
<h1><u style="font-family: algerian"> LOGIN SUCCESSFULL</u></h1>
<center><a href="two-buttons-first.html"><input type="submit" value="CONTINUE" class="button-1" style="height:100px; width:300px"/></a></center>
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
<h1><u style="font-family: algerian"> WRONG PASSWORD OR NOT A MEMBER </u></h1>
<center><a href="signin.html"><input type="submit" value="BACK" class="button-1" style="height:100px; width:300px"/></a></center>
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
