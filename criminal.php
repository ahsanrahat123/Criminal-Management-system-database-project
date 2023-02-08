<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    
   
    
    $Name  =$_POST['name'];
    $NID   =$_POST['NID'];
    $Age   =$_POST['age'];
    $ID   =$_POST['ID'];
    $Address   =$_POST['address'];
    $Dob   =$_POST['dob'];
    $Gender   =$_POST['gender'];
    $Case1   =$_POST['case1'];
    $Case2   =$_POST['case2'];
    
      
    $Name1  =$_POST['name1'];
    $ID1   =$_POST['id1'];
    $Postal   =$_POST['postal'];
    $Street   =$_POST['street'];
    $House   =$_POST['house'];
    $Vic   =$_POST['vic'];
    $Law   =$_POST['law'];

    
    

   
		$query2 = oci_parse($con, "INSERT into victim values('$ID1','$Name1','$Postal','$Street','$House','$Vic')");
		oci_execute($query2);

    
	



   
		$query = oci_parse($con, "INSERT into criminal values('$ID','$Name','$Address','$Gender','$Age','$NID','$Dob')");
    $query1 = oci_parse($con, "INSERT into case values('$Case1','$Case2')");
		oci_execute($query);
    oci_execute($query1);

  



    $query3 = oci_parse($con, "INSERT into cvc values('$ID','$ID1','$Case1')");
		oci_execute($query3);

    $query4 = oci_parse($con, "INSERT into lc values('$Law','$ID')");
		oci_execute($query4);
		 
		if($query && $query1 && $query2 && $query3 && $query4 )
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
    <title>Criminal</title>
    <link rel="stylesheet" href="yo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>



  <div class="container">
    <div class="title">Criminal Info</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Criminal Id</span>
            <input type="text" name="ID" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">NID</span>
            <input type="number" name="NID" placeholder="NID" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" name="age" placeholder="Enter Age" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter Address" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="text" name="dob" placeholder="dd-mon-yyyy" required>
          </div> 
          <div class="input-box">
            <span class="details">Case No</span>
            <input type="text" name="case1" placeholder="Case No" required>
          </div>    
          <div class="input-box">
            <span class="details">Case Type</span>
            <input type="text" name="case2" placeholder="Case Type" required>
          </div>
          <div class="title">Victim Info</div>
          <div class="input-box">
            <span class="details">Victim ID</span>
            <input type="number" name="id1" placeholder="Enter ID" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name1" placeholder="Enter name" required>
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

          <div class="input-box">
            <span class="details">Violation Of Law</span>
            <input type="number" name="law" placeholder="Enter Law Number" required>
          </div> 
         


        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="In Jail" id="dot-1">
          <input type="radio" name="gender" value="Free" id="dot-2">
          <input type="radio" name="gender" value="wanted" id="dot-3">
          <span class="gender-title">Present Status</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">In Jail</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Free</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Wanted</span>
            </label>
            
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
