<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
.topnav {
  background-color: #333;
  overflow: hidden;
  
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 23px;
 
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

                                
</style>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


  <div class="topnav">
  
  <a href="crimtable.php">Criminal</a>
 <a href="victable.php">Victim</a>
  <a href="wittable.php">Witness</a>
  <a href="lawtable.php">Lawyer</a>
  <a href="statable.php">Station</a>
  <a href=" offtable.php">Officer</a>
  <a href="admin.php">ADMIN</a>
  
</div>








  <DIV style="width:70%;margin-left:15%;  margin-top:4%;" >



<table class = "table table-responsive-md    table-striped table-dark table-hover">
   <BR> 
   <h2 style="MARGIN-LEFT:35%;color:white;" >BANGLADESH POLICE</h2>
   <h5 style="MARGIN-LEFT:38.5%;color:white;">STATION INFORMATION</h5>
<BR method="post"> 


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
   
    

    $query = "SELECT * from station
    order by station_id";
    $result = oci_parse($connection, $query);
    oci_execute($result);

    

    print "<table class = \"table table-responsive-md    table-striped table-dark table-hover\">\n";
    print " <th>STATION ID</th> <th>NAME</th> <th  >CONTACT NO</th>    <th>POSTAL CODE</th> <th>DIVISION</th>    <th>ZILLA</th> <th>CASE NO</th>";

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




























</body>
</html>   