<?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
 
 

if(isset($_POST['submit']))
{
     
     
 
  
        include_once 'delete_conformation.php';
        exit();
     
    
 
 

 
}


?>



<!DOCTYPE html>
<html>
<head>
<title> REPORT</title>
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

    <div id="form">
    <form action="delete_conformation.php"  method="post">
      <p class="header">SEARCH FOR REMOVE INFO</p>
    <p class="yo">
   
    <input type="text" id="user" name="CRIMINAL" placeholder="Criminal ID" />
    </p>
    
    <p id="bt">
    <input type="submit" name="submit" id="btn" value="Enter" />
    </p>
  </form>
</div>

 
</body>
</html>

