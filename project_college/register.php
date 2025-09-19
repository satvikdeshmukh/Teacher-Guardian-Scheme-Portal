<?php

include("connection.php");

if(isset($_POST["registerbtn"]))
{
	$fn = $_POST["fullname"];
    $sid=$_POST["id1"];
    $eid = $_POST["email"];	
    $pwd = $_POST["password"]; 
    $cont = $_POST["contact"];
	$tg= $_POST["roletg"];


	$qry = "INSERT INTO `student1`(`id`, `fullname`, `student-id`, `email`, `Password`, `contact`, `TG`) VALUES (NULL,'$fn','$sid','$eid','$pwd','$cont','$tg')";
    $result = mysqli_query($connect, $qry);

    if($result)
	{
	    ?> <script> alert("Registration Successfull"); </script> <?php
	}
    else
	{
	    ?> <script> alert("Something went wrong, try again later"); </script> <?php
	}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title> Register | Project </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/style.css" rel="stylesheet">
	<style>
        body{
          
			background-color: #4158D0; background-image: linear-gradient(to right, #9dc2a7 0%,  #FFCC70  46%, #FFCC70 100%);
        }
		.row {
			height: 100vh;
			align-items: center;
		}
        .card{
            border: 2px solid black; 
        }
	</style>
</head>
<body >

    <div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card" >
					<div class="card-header bg-success text-light">
				    <h3> Register Form </h3></div>
				    <div class="card-body">
				        <form method="post" enctype="multipart/form-data" >
					        <div class="form-group">
					            <label>Fullname</label>
					                <input type="text" name="fullname" placeholder="Fullname" class="form-control">
					            <label>Student-ID</label>
					                <input type="text" name="id1" placeholder="Student-ID" class="form-control">
					            <label>Email</label>
					                <input type="email" name="email" placeholder="Email ID" class="form-control">
					            <label>Password</label>
					                <input type="password" name="password" placeholder="Password" class="form-control">
					            <label>Contact</label>
									<input type="tel" name="contact" placeholder="Mobile Number" class="form-control"><br>
								<label for="role" >TG:</label>
									<select id="role" name="roletg" >
										<option value="NEK">N.E.KARALE</option>
                        				<option value="TRM">T.R.MAHORE</option>
                        				<option value="VSG">DR.VS.GULHANE</option>

                    				</select><br>
				    				<br><br>
							</div>
					<button type="submit" class="btn btn-success" id="btnsubmit" name="registerbtn"> Register </button>
					<p> Already Have an Account? <a href="login.php"> Sign In </a> </p>
					<!-- <p> <a href="index.php"> Go to Home Page <i class="bi bi-house-add"></i> </a></p> -->
				
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>