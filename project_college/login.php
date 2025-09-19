<?php
// session_start();
// if(isset($_SESSION["sid"]))
// {
// 	header("location:user.php");
// }



include("connection.php");

if(isset($_POST["login_button"]))
{
	$eid = $_POST["emailid"];
	$pwd = $_POST["password"];

	if($eid=="admin@gmail.com" && $pwd =="admin")
	{
		header("location:admin.php");
	}

	if($_POST["role"]=='student')
	{
		

	$qry = "SELECT * FROM `student1` WHERE email='$eid' AND Password='$pwd'";
	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	$data = mysqli_fetch_assoc($result);


	if($rows>0)	
	{

		$id = $data["id"];
		session_start();
		$_SESSION["sid"] = $id;

		header("location:user.php");
	}
	else
	{
		?> <script> alert("Invalid Email OR Password"); </script> <?php
	}
}
else{
	
	
	$qry = "SELECT * FROM `teacher` WHERE email='$eid' AND Password='$pwd'";
	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	$data = mysqli_fetch_assoc($result);


	if($rows>0)	
	{

		$id = $data["id"];
		session_start();
		$_SESSION["tid"] = $id;

		header("location:teacher.php");
	}
	else
	{
		?> <script> alert("Invalid Email OR Password"); </script> <?php
	}
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login | Project </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/style.css" rel="stylesheet">
	<style>
        body{
            /* background-color:#ffff; */
			background-color: #4158D0; background-image: linear-gradient(to right, #9dc2a7 0%,  #FFCC70  46%, #FFCC70 90%);
			border-radius :80px;
			
        }
		.row {
			height: 100vh;
			align-items: center;
		}
		input{
			margin-bottom: 20px;
		}
        .card{
            border: 2px solid black; 
        }
		.card{
			border-radius :10px;
		}
		.card-header{
			border-radius :10px;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card" >
					<div class="card-header bg-primary text-light" >
				<h3>Login form </h3></div>
				<div class="card-body">
				 <form method="post" >
					<div class="form-group">
					<input type="email" name="emailid" placeholder="Email ID" class="form-control">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<label for="role">Role:</label>
      <select id="role" name="role" >
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
      </select><br><br>
					<button type="submit" class="btn btn-primary" id="btnsubmit" name="login_button" onclick="location:u.php"> Login </button>

					<p> Don't Have an Account? <a href="register.php"> Sign Up </a> </p>
					</div>	
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