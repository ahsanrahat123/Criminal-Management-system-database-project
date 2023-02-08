
<?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
 


if(isset($_POST['submit']))
{
     
		              
  include_once 'untitled.php';
  exit();

 
  
}


?>



<!DOCTYPE html>
<html>
<head>
<title> SEARCH CREMINAL</title>
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

    <div id="form">
    <form action="Untitled.php" method="post">
      <p class="header">SEARCH</p>
      <p class="text">Enter Criminal Name</p>
    <p class="yo">
   
    <input type="text" id="user" name="CRIMINAL" placeholder="Criminal Name" />
    </p>
    
    <p id="bt">
    <input type="submit" name="submit" id="btn" value="Search" />
    </p>
  </form>
</div>

 
</body>
</html>