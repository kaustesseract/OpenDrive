<html>
<body background="splanets-8.jpg" height="610" width="1400.5"> 

<?php
$var = $_SESSION['username'];


?>
<center>
<title>Web application</title>

<center><h1><u style="font-family: algerian ; color:white">    WELCOME</u></h1>
<h1><u style=" color:white">    SEARCH A DOCUMENT</u></h1>

<table border=5; style="background-color:greenyellow ; border:7px solid black">
<form action="cos-search-link.php" method="POST" enctype="multipart/form-data">
<br><br>
<tr><td><strong style= "font-family: Cursive ">Search :</strong></td><td><input type="text" name="search" placeholder="Search a file"></label>

<input type="submit" value="Submit" name="sub" class="Button-1"/>

<center>

</form>
</table>
<style type="text/css">



.button-1{
position:middle;
background-color:black;				
font-family:Cursive;
font-size:20px;
text-decoration:none;		
color:white;
border:1px solid white;
border-radius:10px;
}

.button-2{
position:middle;
background-color:black;				
font-family:Cursive;
font-size:30px;
text-decoration:none;		
color:white;
border:1px solid white;
border-radius:10px;
}

.button-3{

background-color:black;				
font-family:Cursive;
font-size:35px;
text-decoration:none;		
color:white;
border:1px solid white;
border-radius:10px;
}

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
.button-5{
position:middle;
background-color:black;				
font-family:Cursive;
font-size:35px;
text-decoration:none;		
color:white;
border:1px solid white;
border-radius:100px;
}

.button-6{
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