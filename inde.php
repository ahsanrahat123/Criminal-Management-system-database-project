<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    $username = $_POST['uname'];  
   
    $pass   =$_POST['pass'];
    $name  =$_POST['name'];
    $NID   =$_POST['NID'];
    $Rank   =$_POST['Rank'];
    $ID   =$_POST['ID'];
    $Contract   =$_POST['Contract'];
    $gender   =$_POST['gender'];
     

    $error = array();

     if(empty($name))
    {
        $error['apply']="Enter Officer's Name";
    }
    else if(empty($NID))
    {
        $error['apply']="Enter NID";
    }
    else if(empty($Rank))
    {
        $error['apply']="Enter Rank";
    }
    
    else if(empty($ID))
    {
        $error['apply']="Enter Officer's ID";
    }
    else if(empty($Contract))
    {
        $error['apply']="Enter Contract";
    }
   
   
    else if(empty($username))
    {
        $error['apply']="Enter Username";
    }
    else if(empty($pass))
    {
        $error['apply']="Enter Password";
    }
  
 

 
 
	$query = oci_parse($con, "SELECT * FROM login_ WHERE log_in_username= '$username'");
	oci_execute($query);
	$row = oci_fetch_array($query, OCI_ASSOC);

	$count=oci_num_rows($query);

    $query1 = oci_parse($con, "SELECT * FROM login_ WHERE  log_in_officers_nid= '$NID'");
	oci_execute($query1);
	$row = oci_fetch_array($query1, OCI_ASSOC);

	$count1=oci_num_rows($query1);

    $query12 = oci_parse($con, "SELECT * FROM login_ WHERE  log_in_officers_id= '$ID'");
	oci_execute($query12);
	$row = oci_fetch_array($query12, OCI_ASSOC);

	$count12=oci_num_rows($query12);
		
	if($count>=1)
		{
            echo "<script>alert('This username is already taken')</script>";
            include_once 'inde.php';
            
		 
		
		}
    else if($count1>=1)
    {
        echo "<script>alert('YOU HAVE ALREADY A ACCOUNT')</script>";
        include_once 'inde.php';
        
     
    
    }
    else if($count12>=1)
    {
        echo "<script>alert('YOU HAVE ALREADY A ACCOUNT')</script>";
        include_once 'inde.php';
        
     
    
    }

    else if($username!=""&&$pass!="")
	{
		$query = oci_parse($con, "INSERT into login_ values('$name','$NID','$Rank','$ID','$Contract','$gender','$username', '$pass')");
		oci_execute($query);
		 
		
		if($query)
		{
            echo "<script>alert('You have Successfully created account')</script>";
            include_once 'login.php';
            exit();
		 
		
		}
		else
		{
		
		echo "<script>alert('failed')</script>";
		}
		              
        
	}
}


    if(isset($error['apply']))
    {
        $s = $error['apply'];
        $show = "<h5 class='text-center alert-danger'>$s</h5>";
    }
    else
    {
        $show ="";
    }










?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css"href=
 "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
 <script type="text/javascript" src=""></script>


 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" 
 integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"href=
"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>
</head>


         
<body>
    
<div class="container-fluid" >
   
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 jumbotron my-3" id="cont">
            
                <div >
                <?php
                
                echo $show;
                
                ?>
               
                <form method="post">
                <div class="header">CREATE ACCOUNT OR SIGN IN</div>
                   <div class="form-group">
                        <label>Oficer's Name</label>
                        <input type="text" name="name" class="form-control"
                        autocomplete="off" placeholder="Enter Oficer's Name">
                    </div>
                    <div class="form-group">
                        <label>Oficer's NID</label>
                        <input type="number" name="NID" class="form-control"
                        autocomplete="off" placeholder="Enter Oficer's NID">
                    </div>
                    <div class="form-group">
                        <label>Oficer's Rank</label>
                        <input type="text" name="Rank" class="form-control"
                        autocomplete="off" placeholder="Enter Oficer's Rank">
                    </div>
                    <div class="form-group">
                        <label>Oficer's ID</label>
                        <input type="text" name="ID" class="form-control"
                        autocomplete="off" placeholder="Enter Oficer's ID">
                    </div>
                    <div class="form-group">
                        <label>Oficer's Email</label>
                        <input type="email" name="Contract"   required class="form-control"
                        autocomplete="off" placeholder="Enter Oficer's email">
                    </div>
                   
                    <div class="form-group">

                    <label>Account Type </label><br>
                    <input type="radio" id="male" name="gender" value="Admin">
                      <label for="male">ADMIN</label><br>
                    <input type="radio" id="female" name="gender" value="Non_Admin">
                  <label for="female">NON_ADMIN</label><br>
                    </div>




                    <div class="form-group">
                        <label>Account's Username</label>
                        <input type="text" name="uname" class="form-control"
                        autocomplete="off" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control"
                        autocomplete="off" placeholder="Enter Password">
                    </div>
                    

                    <input type="submit" name="apply" value="Submit" class="btn btn-success" id="bn">
					<p>I already have an account <a href="demo.php">Click here</a></p>
                </form>
              
            </div>
            <div class="col-md-3"></div>
        
        </div>
    </div>
</div>

</body>
</html>