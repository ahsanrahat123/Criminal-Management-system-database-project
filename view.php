<html>
                                      
<head>
<style>
body{
    background-image:url("delet.jpg");
}
</style>

    <title>NON ADMIN INFORMATION</title>
    <link   href="login.css">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body  >

<DIV style="width:70%; margin-left:15%; margin-top:4%" >



<table class = "table table-responsive-md    table-striped table-dark table-hover">
   <BR> 
   <h2 style="MARGIN-LEFT:35%" >BANGLADESH POLICE</h2>
   <h5 style="MARGIN-LEFT:37%">NON ADMIN INFORMATION</h5>
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
   
 
    $query = "SELECT * from huh";
    $result = oci_parse($connection, $query);
    oci_execute($result);

    

    print "<table class = \"table table-responsive-md    table-striped table-dark table-hover\">\n";
    print "<th>OFFICER'S NAME</th>  <th>OFFICER'S NID</th>   <th>OFFICER'S RANK</th>  <th  >OFFICER'S EMAIL</th>    <th>OFFICER'S USER ID </th>  ";

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

 

 

  </DIV>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

