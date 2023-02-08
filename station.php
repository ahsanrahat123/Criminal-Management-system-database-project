<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    
   
    
    $Name  =$_POST['name'];
    $ID   =$_POST['id'];
    $Postal   =$_POST['postal'];
    $Division   =$_POST['division'];
    $Zilla =$_POST['zilla'];
    $Contact   =$_POST['contact'];
    $Case   =$_POST['case'];

   
		$query = oci_parse($con, "INSERT into station values('$ID','$Name','$Contact','$Postal','$Division','$Zilla','$Case')");
		oci_execute($query);
		 
		
    if($query)
		{
            echo "<script>alert('You have Successfully created account')</script>";
            include_once 'add.php';
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
    <title> Station</title>
    <link rel="stylesheet" href="yo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Station Info</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">station Id</span>
            <input type="text" name="id" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Station Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Postal Code</span>
            <input type="number" name="postal" placeholder="Postal" required>
          </div>
          <div class="input-box">
            <span class="details">Division</span>
            <input type="text" name="division" placeholder="Enter Division" required>
          </div>

          
          <div class="input-box">
            <span class="details">Zilla</span>
            <input type="text" name="zilla" placeholder="Enter Zilla" required>
          </div>
          <div class="input-box">
            <span class="details">Contact</span>
            <input type="number"  name="contact" placeholder="phone/mobile" required>
          </div>
         
          <div class="input-box">
            <span class="details">Case-no</span>
            <input type="number" name="case" placeholder="Enter Case-no" required>
          </div>                                                             
        </div>
     
        <div class="button">
          <input type="submit" name="apply" >
        </div>
      </form>
    </div>
  </div>

</body>
</html>
