<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");


if(isset($_POST['apply']))
{
    $username = $_POST['uname'];  
   
    $pass   =$_POST['pass'];
    $NID  =$_POST['NID'];
   

    $error = array();
    if(empty($username))
    {
        $error['apply']="Enter Username";
    }
    else if(empty($pass))
    {
        $error['apply']="Enter Password";
    }
    if($username!=""&&$pass!="")
	{

		$query = oci_parse($con, "SELECT * FROM login_ WHERE log_in_username= '$username' AND log_in_password = '$pass' AND log_in_officers_nid ='$NID' AND log_in_officers_acc_type='Non_Admin' ");
		oci_execute($query);
		$row = oci_fetch_array($query, OCI_ASSOC);

		$count=oci_num_rows($query);
        
        $query123= oci_parse($con, "SELECT * FROM login_ WHERE log_in_username= '$username' AND log_in_password = '$pass'AND log_in_officers_nid ='$NID' AND log_in_officers_acc_type='Admin'");
		oci_execute($query123);
		$row = oci_fetch_array($query123, OCI_ASSOC);

		$count1=oci_num_rows($query123);

		
		if($count>=1)
		{
            

            echo "<script>alert('You have Successfully loged in')</script>";
            include_once 'viewer.php';
            exit();
		 
		
		}
        
		else if($count1>=1)
		{

            echo "<script>alert('You have Successfully loged in')</script>";
            include_once 'admin.php';
            exit();
		 
		
		}

		else
		{	
            echo "<script>alert('Invalid user_name or Password')</script>";
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
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css"href=
 "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
 
 
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" 
 integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"href=
"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>
</head>


<body >
<br>
<br>
<br>
<br>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 jumbotron my-3" id="cont" style="margin-top:300px">
            
                <div >
                <?php
                
                echo $show;
                
                ?>
                <form method="post">
                    
                <div class="header">SIGN IN</div>
                   <div class="form-group">
                        <label>Officer's NID</label>
                        <input type="number" name="NID" class="form-control"
                        autocomplete="off" placeholder="Enter Officer's NID">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" class="form-control"
                        autocomplete="off" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control"
                        autocomplete="off" placeholder="Enter Password">
                    </div>
                    

                    <input type="submit" name="apply" value="Sign In" class="btn btn-success" id="bn">
                    
                </form>

            </div>
            <div class="col-md-3"></div>
        
        </div>
    </div>
</div>

</body>
</html>
