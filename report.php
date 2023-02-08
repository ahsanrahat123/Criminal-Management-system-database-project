 
<!DOCTYPE html>
<html>





<head>
<script src="pdf.js"></script>
<link rel="stylesheet" type="text/css" href="report.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}

tr  {
  background-color: cornsilk;
}






</style>
</head>





<body >
<div id="invoice">
<img  src="unnamed.png" alt="" class="img1"> 
<button class="btn btn-primary" id="download"> Download PDF</button>
<br>
<h1 style="margin-left:20% ;font-size: 30px;" id="x" >BANGLADESH POLICE</h1>

<h2 style="margin-left:23% ;font-size: 30px;" id="x" >Criminal Report</h2>
<img  src="want.png" alt="" class="img"> 
<br> <br>
<br><br><br>
<h3  id="x" ><b>Criminal Information:</b></h3>
<div>
<br>

<table style="width: 75%;">
<p style="font-size:5px;">
<b>
<?php
    $con = oci_connect("system", "liverpoolboss302", "localhost/XE");
    $name=$_POST["CRIMINAL"];
     
   
   
     
    $query = "SELECT criminal_name||' has violated '||remarks
    from criminal c join lc 
    on c.criminal_id=lc.criminal_id
    join law
    on lc.law_no=law.law_no
    where c.criminal_id='$name'";
    $result = oci_parse($con, $query);
    oci_execute($result);

   

 

    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
        print "<tr>\n";
        foreach ($row as $item) {
            print   ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ;
        }
        print "</tr>\n";
    }
     
    ?>

</b>
<br>
</p>



<b>
<?php
    $con = oci_connect("system", "liverpoolboss302", "localhost/XE");
    $name=$_POST["CRIMINAL"];
     
   
   
     
    $query = "SELECT officer_name ||' was the investigation Officer .Officer ID: '|| officer_id
    from criminal c join cvc 
    on c.criminal_id=cvc.criminal_id
    join station
    on cvc.case_no=station.case_no
    join officer
    on station.station_id=officer.station_id
    where c.criminal_id='$name'";
    
    
    $result = oci_parse($con, $query);
    oci_execute($result);

   

 

    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
        print "<tr>\n";
        foreach ($row as $item) {
            print   ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ;
        }
        print "</tr>\n";
    }
     
    ?>

</b>
<br>
</p>

















 
  <tr>
  <br>
     <td style="width: 8%;"> <b>Name</b> </td>
     <td style="width: 15%">
     
     
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT criminal_name  FROM criminal WHERE criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>

</td>
     <td style="width: 8%;"> <b>NID</b> </td>
     <td style="width: 15%">
     
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT national_id  FROM criminal WHERE criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
     
     
    
    </td>    
     <td style="width: 8%;"> <b>Address</b> </td>
     <td style="width: 15%">
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT criminal_address  FROM criminal WHERE criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
     
     
    
    
    </td>
  </tr>

 
</table>



 

</div>

<table style="width: 75%;">


 
  <tr>
     <td style="width: 8%;"> <b>Age</b> </td>
     <td style="width: 15%"> 
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT criminal_age  FROM criminal WHERE criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
          
    </td>
     <td style="width: 8%;"> <b>Present Status</b> </td>
     <td style="width: 15%">
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT present_status  FROM criminal WHERE criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    
    </td>
      
  </tr>

 
</table>

<br>

<h3  id="x" ><b>Case Information:</b></h3>

<table style="width: 75%;">


 
  <tr>
     <td style="width: 8%;"> <b>Case No</b> </td>
     <td style="width: 15%">
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT case_no FROM cvc WHERE  criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    </td>
     <td style="width: 8%;"> <b>Case Type</b> </td>
     <td style="width: 15%"> 
     <?php

$con = oci_connect("system","liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "       SELECT case_type  FROM case WHERE case_no=(SELECT case_no FROM cvc WHERE  criminal_id='$name') ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    
    
    </td>
      
  </tr>

 
</table>

<br>

<h3  id="x" ><b>Lawyer Information:</b></h3>

<table style="width: 75%;">


 
  <tr>
     <td style="width: 8%;"> <b>Name</b> </td>
     <td style="width: 15%"> 
    
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT Lawyer_name FROM Lawyer WHERE  criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    </td>
     <td style="width: 8%;"> <b>NID</b> </td>
     <td style="width: 15%"> 
    
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT Lawyer_national_id FROM Lawyer WHERE  criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    </td>
     <td style="width: 8%;"> <b>Address</b> </td>
     <td style="width: 15%"> 
    
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT lawyer_address FROM Lawyer WHERE  criminal_id='$name' ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    
    
    </td>
  </tr>

 
</table>



<br>

<h3  id="x" ><b>Victim Information:</b></h3>

<table style="width: 75%;">


 
  <tr>
     <td style="width: 8%;"> <b>Name</b> </td>
     <td style="width: 15%">
    
     <?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "      SELECT victim_name   FROM victim WHERE victim_id=(SELECT victim_id FROM cvc WHERE  criminal_id='$name') ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>
    
    
    </td>
     <td style="width: 5%;"> <b>ADDRESS</b> </td>
     <td style="width: 15%"> POSTAL CODE :  <?php

$con = oci_connect("system","liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT victim_address_postal_code   FROM victim WHERE victim_id=(SELECT victim_id FROM cvc WHERE  criminal_id='$name') ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>;

STREET:<?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT  victim_address_street FROM victim WHERE victim_id=(SELECT victim_id FROM cvc WHERE  criminal_id='$name') ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>;

HOUSE NO:<?php

$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
$name=$_POST["CRIMINAL"];
 
$query = "SELECT  victim_address_house_no FROM victim WHERE victim_id=(SELECT victim_id FROM cvc WHERE  criminal_id='$name') ";
$result = oci_parse($con, $query);
oci_execute($result);

while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print    ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")  ;
    }
  
}


?>

</td>
    
  </tr>

 
</table>
</div>
</body>
</html>
