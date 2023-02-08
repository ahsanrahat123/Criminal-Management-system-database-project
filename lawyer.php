<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    
   
    
    $Name  =$_POST['name'];
    $NID   =$_POST['NID'];
    $Contact   =$_POST['contact'];
    $ID   =$_POST['id'];
    $Address   =$_POST['address'];
  
    

   
		$query = oci_parse($con, "INSERT into Lawyer values('$NID','$Name','$Contact','$Address', '$ID')");
		oci_execute($query);
    
    $query1 = oci_parse($con, "SELECT * FROM Lawyer where Lawyer_national_id='$NID'");
    oci_execute($query1);
    $row = oci_fetch_array($query1, OCI_ASSOC);

		$count=oci_num_rows($query1);
		 
    if($count>=1)
		{
            echo "<script>alert('You have Successfully added the information')</script>";
            include_once 'add.php';
            exit();
		 
		
		}
		else
		{
		
		echo "<script>alert('failed')</script>";
    include_once 'add.php';
            exit();
		}
		              
		
		              
        
	
 



}
?>










<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Lawyer</title>
    <link rel="stylesheet" href="yo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Lawyer Info</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">NID</span>
            <input type="number" name="NID" placeholder="Enter NID" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
        
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter Address" required>
          </div>

          <div class="input-box">
            <span class="details">Contact</span>
            <input type="number" name="contact" placeholder="phone/mobile" required>
          </div>
          

         
          <div class="input-box">
            <span class="details">Criminal  ID</span>
            <input type="number" name="id" placeholder="Enter Criminal-ID" required>
          </div>                                                             
        </div>
     
        <div class="button">
          <input type="submit" name="apply">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
