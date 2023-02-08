<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
   
  </head>
  <body>
  
 



    <div class="header">
<h1>ADMIN </h1>

 
 </h3>
    </div>
<div class="container">
 <a href="add.php"> <button class="btn btn1">ADD</button></a>
 <a href="delete.php"><button class="btn btn2">REMOVE</button></a>
 <a href="update.php"> <button class="btn btn1">UPDATE</button></a>
  <a href="history.php"><button class="btn btn4">UPDATE HISTORY</button></a>
  
  <a href="report_query.php"><button class="btn btn4">REPORT</button></a>
  <a href="view.php"><button class="btn btn4">View Visitors</button></a>
  <a href="table.php"><button class="btn btn4">Tables</button></a>

</div>
  </body>
</html>
