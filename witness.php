<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");

class Exceptionyo extends Exception{
function errorMessage(){
  return this->getMessage();
}

}


if(isset($_POST['apply']))
{
    
   
    
    $Name  =$_POST['name'];
    
    $Contact   =$_POST['contact'];
    $Address   =$_POST['address'];
    $Case   =$_POST['case'];
    
    $No   =$_POST['fir'];
    $Date   =$_POST['date'];
    $Place   =$_POST['place'];

   
		$query = oci_parse($con, "INSERT into witness values(wit_id_sqe.nextval,'$Name','$Address','$Contact','$Case')");
    $query1 = oci_parse($con, "INSERT into fir values('$No','$Date','$Place','$Case')");
		oci_execute($query);
    oci_execute($query1);
	 
		if($query && $query1)
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
    <title> Witness</title>
    <link rel="stylesheet" href="yo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<br>
<br>
<br>
  <div class="container">
    <div class="title">Witness Info</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Contact</span>
            <input type="number" name="contact" placeholder="phone/mobile" required>
          </div>
         
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter Address" required>
          </div>
          <div class="input-box">
            <span class="details">Case No</span>
            <input type="number" name="case" placeholder="Enter Case-no" required>
          </div>    
          <div class="input-box">
            <span class="details">Fir No</span>
            <input type="number" name="fir" placeholder="Enter Fir-no" required>
          </div>       
          <div class="input-box">
            <span class="details">Date of Incident</span>
            <input type="text" name="date" placeholder="Enter Date" required>
          </div>       
          <div class="input-box">
            <span class="details">Place of Incident</span>
            <input type="text" name="place" placeholder="Enter Place" required>
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
