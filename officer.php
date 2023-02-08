<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    
   
    
    $Name  =$_POST['name'];
    $SID   =$_POST['sid'];
    $Contact   =$_POST['contact'];
    $ID   =$_POST['id'];
    $JD   =$_POST['jd'];
    $PS   =$_POST['ps'];
    $Rank   =$_POST['rank'];

   
		$query = oci_parse($con, "INSERT into officer values('$ID','$Name','$Rank','$JD','$PS','$Contact','$SID')");
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
    <title> Officer </title>
    <link rel="stylesheet" href="yo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Officer Info</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Officer Id</span>
            <input type="text" name="id" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Joinig Date</span>
            <input type="text" name="jd" placeholder="dd-mon-yyyy" required>
          </div>
          <div class="input-box">
            <span class="details">Rank</span>
            <input type="text" name="rank" placeholder="Enter Rank" required>
          </div>

          <div class="input-box">
            <span class="details">Contact</span>
            <input type="number" name="contact" placeholder="phone/mobile" required>
          </div>
         
          <div class="input-box">
            <span class="details">Previous Station</span>
            <input type="text" name="ps" placeholder="Enter Station" required>
          </div>
          <div class="input-box">
             <span class="details">Station ID</span>
            <input type="number" name="sid" placeholder="Enter ID" required>
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
