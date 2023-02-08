<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="header">
<h1>VIEWER </h1>
<h3><img src="admino.jpg" style="width: 50px; height:50px; " alt="">
 <?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");

$username = $_POST['uname'];  

 echo $username;
?> 
 </h3>
</div>
<div style="float: right; width: 400px; height: 400px; background-color:darkgrey" >
<h3>WANTED LIST</h3>

<table class = "table table-responsive-md    table-striped table-dark table-hover" id="bah">
  
    <?php
    //Oracle DB user name
    $username = 'system';

    // Oracle DB user password
    $password = 'liverpoolboss302';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';

    //Connect to an Oracle database
    $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );
   
  
    $query = "SELECT criminal_name,national_id from criminal where  present_status= 'wanted'";
    $result = oci_parse($connection, $query);
    oci_execute($result);

   
    
    print "<table class = \"table table-responsive-md    table-striped table-dark table-hover\">\n";
    print "<th>CRIMINAL NAME</th>      <th>NATIONAL ID</th>    ";

    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
        print "<tr>\n";
        foreach ($row as $item) {
            print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
    //print '</table>';
    ?>
    

</div>

    
<div class="container">
  
 <a href="login.php"> <button  id="go" class="btn btn1">SEARCH</button></a>

<a href="report_query.php"> <button id="go"  class="btn btn4">REPORT</button></a>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
