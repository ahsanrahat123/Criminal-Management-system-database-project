<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    
   
    
    $Name  =$_POST['name'];
    $ID   =$_POST['id'];
    $Postal   =$_POST['postal'];
    $Street   =$_POST['street'];
    $House   =$_POST['house'];
    $Vic   =$_POST['vic'];


    
    

   
		$query = oci_parse($con, "INSERT into victim values('$ID','$Name','$Postal','$Street','$House','$Vic')");
		oci_execute($query);
		 
		if($query)
		{
            echo "<script>alert('You have Successfully created account')</script>";
            include_once 'ab.html';
            exit();
		 
		
		}
		else
		{
		
		echo "<script>alert('failed')</script>";
		}
		
		
		              
        
	
 



}
?>



















<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="yo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="topnav">
  
  <a href="#news">Remove</a>
  <a href="#contact">Update</a>
  <a href="login.php">Search</a>
  <a href="report_query.php">Report</a>
  <div style="float:right;"><a class="active" href="inde.php">Sign Out</a></div>
</div>



  <div class="container">
    <div class="title">Victim Info</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Victim ID</span>
            <input type="number" name="id" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
        
          <div class="input-box">
            <span class="details">Postal</span>
            <input type="number" name="postal" placeholder="Enter Postal" required>
          </div>

          <div class="input-box">
            <span class="details">street</span>
            <input type="text" name="street" placeholder="street" required>
          </div>
          <div class="input-box">
            <span class="details">House-No</span>
            <input type="text" name="house" placeholder="House-No" required>
          </div>

         
          <div class="input-box">
            <span class="details">Victim No</span>
            <input type="number" name="vic" placeholder="Enter Number" required>
          </div>                                                             
        </div>
     
        <div class="button">
          <input type="submit" name="apply" value="ADD">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
