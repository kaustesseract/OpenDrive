<html>
<body background="faded-colors-digital-art-hd-wallpaper-1920x1080-29964.jpg" height="610" width="1355.5">
<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'test';

// Connect to the database, using the predefined database variables in /assets/repository/mysql.php
$dbConnection = new mysqli($db_host, $db_username, $db_password, $db_primaryDatabase);     


								
                $create = "CREATE TABLE USERS(			 	
                          ID int(255) AUTO_INCREMENT,
                          Paper varchar(100) NOT NULL,
                          Author varchar(100) NOT NULL,
						  Tag1 varchar(50) NOT NULL,
						  Tag2 varchar(100) NOT NULL,
						  name varchar(100) NOT NULL,
						  Mime varchar(50) NOT NULL,
						  Mime2 varchar(50) NOT NULL,
                          Size int(100),
			              Data Mediumblob,
                          Rating int(12),
						  Date date,
                          PRIMARY KEY  (ID)
                          )";
                


if($dbConnection->query($create)){      //Because you want the table "users" in the tutorial database .
echo"Your table was successfully created.You're a member now.Press back and GET STARTED";
}
   
 else 
	echo"TABLE ALREADY EXISTS";
?>
<p style="color:black; font-size:20px"> Press BACK and continue
<a href="tables.html"><input type="submit" value="BACK" class="button-1"/></a>
<style type="text/css">
.button-1
{
position:center;
background-color:gold;
border-radius:100px;
border:3px solid black;
color:black;
font-size:30px;
font-family: cursive;
}
 
 </center>
 </body>
 </head>

