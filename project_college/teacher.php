<?php

include("connection.php");

session_start();

if(!isset($_SESSION["tid"]))
{
	header("location:login.php");
}


$tid = $_SESSION["tid"];

$qry = "select * from teacher where id = '$tid'";		

$result = mysqli_query($connect, $qry);

$data = mysqli_fetch_assoc($result);



 ?>


<?php
include("connection.php");

$db = $connect;
$tableName = "queries";
$columns = ['fullname', 'email','query', 'date&time'];

function fetch_data($db, $table, $columns)
{
    $query = "SELECT * FROM `queries` order by id";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    } else {
        return [];
    }
}

$developers = fetch_data($db, $tableName, $columns);

?>
<?php

if(isset($_POST["response_submit_btn"]))
{
 
   
   $r = $_POST["response"];

   $qry = "INSERT INTO `response`(`id`, `response`) VALUES (NULL,'$r')";

   $result = mysqli_query($connect, $qry);

   if($result)
   {
     ?> <script> alert("Response Submitted successfully"); </script> <?php
   }
   else
   {
     ?> <script> alert("Something went wrong"); </script> <?php
   }
 
}	//query

?>


<?php

if(!isset($_SESSION['tid']))
{
	header("location:login.php");
}
include("connection.php");

$qry = "SELECT * FROM `queries` order by id";
$result = mysqli_query($connect,$qry);

$rows = mysqli_num_rows($result);
?>



<?php

if(isset($_POST["editprof_btn"]))
{
	$fn = $_POST["fullname"];
	$eid = $_POST["email"];
	$cont = $_POST["contact"];

	$qry = "UPDATE `teacher` SET `fullname`='$fn',`email`='$eid',`contact`='$cont' WHERE tid = '$id'";

	$result = mysqli_query($connect, $qry);
	if($result)
	{
		?> <script> alert("Profile Updated"); </script> <?php
	}
	else
	{
		?> <script> alert("Something went wrong"); </script> <?php
	}

}





?>





<?php
if(isset($_POST["changepwdbtn"])){

$connect = mysqli_connect("localhost","root","","user");

$eid = $_POST["email"];
$pwd = $_POST["pwd"];
$npwd = $_POST["npwd"];
$qry =  "SELECT * FROM `teacher` WHERE email='$eid' AND password='$pwd'";
$result = mysqli_query($connect,$qry);
$data = mysqli_fetch_assoc($result);
$id = $data["id"];
$row = mysqli_num_rows($result);
if($row>0){
   $qry =  "UPDATE `teacher` SET `password`='$npwd' WHERE id = '$id'";
  $result =  mysqli_query($connect,$qry);
  if($result){
    ?><script>alert("Password changed successfully");</script><?php
  }
   else{
    ?><script>alert("something went wrong");</script><?php
   }
}
else{
    ?><script>alert("Invalid username or password");</script><?php
}
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <style>
     body {
  margin: 0;
  padding: 0;
  background-color: #f9fafc;
  font-family: "Inter", "Segoe UI", sans-serif;
  color: #2c3e50;
}

/* Global spacing for sections */
.container,
.container-fluid {
  padding-top: 20px;
  padding-bottom: 20px;
}

#home,
#query,
#profile,
#changepwd {
  margin-bottom: 30px;
}

/* Notice bar */
.alert {
  border-radius: 0;
  padding: 12px 20px;
  font-size: 15px;
  background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
  color: #fff;
  font-weight: 500;
  border: none;
}

/* Sidebar */
#sidebar {
  background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
  color: #fff !important;
  font-weight: 500;
  border-radius: 12px;
  margin-bottom: 10px;
  transition: all 0.3s ease;
  text-align: center;
}
#sidebar a {
  color: #fff;
  text-decoration: none;
  display: block;
  padding: 12px;
}
#sidebar:hover {
  background: #fec400;
  color: #000 !important;
  transform: translateX(4px);
}
#sidebar a:hover {
  color: #000 !important;
}

/* Sidebar list items */
.list-group-item {
  padding: 16px;
  background: transparent;
  border: none;
  transition: all 0.3s ease;
}
.list-group-item + .list-group-item {
  margin-top: 8px;
}
.list-group-item::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background: #fec400;
  transition: 0.3s;
  margin: auto;
}
.list-group-item:hover::after {
  width: 60%;
}

/* Cards */
.card {
  border: none;
  border-radius: 16px;
  box-shadow: 0px 6px 18px rgba(0,0,0,0.08);
  background: #fff;
  transition: all 0.3s ease;
  margin-bottom: 20px;
}
.card:hover {
  transform: translateY(-4px);
  box-shadow: 0px 10px 24px rgba(0,0,0,0.12);
}
.card-header {
  border-radius: 16px 16px 0 0 !important;
  font-weight: 600;
  background: linear-gradient(90deg, #3498db, #2ecc71);
  color: #fff !important;
  padding: 14px 20px !important;
  font-size: 16px;
}
.card-body {
  padding: 20px !important;
}

/* Forms */
#query input,
#query textarea,
#profile input,
#changepwd input {
  margin-bottom: 16px;
  border-radius: 10px;
  border: 1px solid #ddd;
  padding: 14px;
  font-size: 15px;
  transition: all 0.2s ease-in-out;
  background: #fdfdfd;
}
#query input:focus,
#query textarea:focus,
#profile input:focus,
#changepwd input:focus {
  border-color: #3498db;
  box-shadow: 0 0 6px rgba(52,152,219,0.35);
  outline: none;
}
#query form,
#profile form,
#changepwd form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

/* Buttons */
.btn {
  border-radius: 10px;
  font-weight: 500;
  padding: 12px 20px;
  transition: all 0.3s ease;
}
.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0px 4px 10px rgba(0,0,0,0.15);
}
.btn-success {
  background: linear-gradient(90deg, #00c853, #64dd17);
  border: none;
}
.btn-dark {
  background: linear-gradient(90deg, #2c3e50, #34495e);
  border: none;
}

/* Tables */
.table {
  border-radius: 12px;
  overflow: hidden;
  margin-top: 10px;
}
.table th {
  background: #f4f6f8;
  font-weight: 600;
  font-size: 14px;
  color: #555;
}
.table td, .table th {
  vertical-align: middle;
  font-size: 14px;
  padding: 12px 16px;
}

/* Query response scroll */
#contact .card-body {
  max-height: 280px;
  overflow-y: auto;
  scrollbar-width: thin;
}
#contact .card-body::-webkit-scrollbar {
  width: 6px;
}
#contact .card-body::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 10px;
}

/* Welcome heading */
#home h1 {
  font-size: 28px;
  font-weight: 700;
  color: #34495e;
  margin-bottom: 20px;
  text-align: center;
}

/* Responsive */
@media (max-width: 992px) {
  #sidebar {
    margin-bottom: 20px;
  }
  .card {
    margin-top: 15px;
  }
}




</style>
</head>
<body>
    <div>
      <img src="Images/logo7.jpg" id="logo" width="100%"  class="img-fluid">
    </div>
</div>
      
    
    
<div class="alert alert-primary" role="alert">
  <b class="news-list"> NOTICE: </b>
    <marquee>
       My college: Intelligence plus curiosity-that is the root of true education.
    </marquee>
</div>
      
<div class="container-fluid" >
  <div class="row">
    <div class="col-md-3" >
      <ul class="list-group" >
        <li class="list-group-item" id="sidebar"> <a href="#home" data-toggle="tab" style="color: white; text-decoration:none; "> Home </a> </li>
        <li class="list-group-item" id="sidebar"> <a href="#query" data-toggle="tab" style="color: white; text-decoration:none; "> Query & Response  </a> </li>
        <li class="list-group-item" id="sidebar"> <a href="#profile" data-toggle="tab" style="color: white; text-decoration:none; ">Edit-Profile </a> </li>
        <li class="list-group-item" id="sidebar"> <a href="#changepwd" data-toggle="tab" style="color: white; text-decoration:none; "> Change Password  </a> </li>
        <li class="list-group-item" id="sidebar"><button onclick="location.href='login.php'" class="btn btn-outline-danger">Logout</button> </li>
      </ul>
    </div>		

    <div class="col-md-9"> 
      <div class="tab-content" id="home1">
        <div id="home" class="tab-pane active">
          <h1 > Welcome <?php echo $data["fullname"]; ?> </h1><br><br>  
          <div class="card" style="width: 400px;">
            <div class="card-body" >
          <table class="table table-bordered"  >
          <tr >
						<th> Full Name </th>
						<td > <?php echo $data["fullname"]; ?></td>
					</tr>
          <tr>
					  <th> Faculty-Id </th>
						<td> <?php echo $data["facultyid"]; ?> </td>
					</tr>
						<tr>
							<th> E-mail </th>
							<td> <?php echo $data["email"]; ?> </td>
						</tr>
						<tr>
							<th> Contact </th>
							<td> <?php echo $data["contact"]; ?> </td>
						</tr>
            
					</table>
          </div>
</div>
</div>
                
<div id="query" class="tab-pane " id="contact"> 
 <div class="container"> 
  <div class="row">
    <div class="col-md-12 mx-auto" style="margin-top:30px;">                    
<div class="card">
					<div class="card-header bg-dark text-light" >Queries</div>
					
						<div class="card-body">
            <table border="1">
        <tr>
            <?php foreach ($columns as $column) : ?>
                <th><?= ucfirst($column) ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($developers as $queries) : ?>
            <tr>
                <?php foreach ($columns as $rows) : ?>
                    <td><?= $queries[$rows] ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
                </table>
						</div>
            </div>
            </div>
            <div class="col-md-12" >
            <div class="card " id="responsebox" style="margin-top:20px;">
              <div class="card-header bg-dark text-light"> Response Box </div>
              <div class="card-body">
					  <form method="post" >
            <textarea style="width: 100%;" type="text " rows="6" placeholder="Type your response here" name="response" class="form-control"></textarea>
          <button type="submit" name="response_submit_btn" class="btn btn-success mt-2"> Submit </button>
				</form>
        
			</div>
		</div>
    </div>
				</div>
        </div>
			</div>
 
<!-- Edit Profile -->
<div id="profile" class="tab-pane">
  <div id="editprofile" class="tab-pane">
		<div class="row">
			<div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-header bg-info">
				<h4> Edit Profile </h4>
        </div>
        <div class="card-body">
				<form method="post">
					<input type="text" class="form-control" name="fullname" value="<?php echo $data['fullname'] ?>">
					<input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">
					<input type="tel" class="form-control" name="contact" value="<?php echo $data['contact'] ?>">
					<button type="submit" name="editprof_btn" class="btn btn-success"> Update </button>
				</form>
        </div>
        </div>
			</div>
		</div>
	</div>			
</div>

<!-- Change Password -->
<div id="changepwd" class="tab-pane">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto" style="margin-top:30px;">
        <div class="card">
          <div class="card-header bg-dark text-light" >
            Change Password
          </div>
        
          <form method ="post" class="form-control">
            <div class="form-group">
              <label>E-mail</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label>current Password</label>
                <input type="password" name="pwd" class="form-control">
            </div>
            <div class="form-group">
              <label>New password</label>
                <input type="password" name="npwd" class="form-control">
            </div>
            <div class="form-group">
              <button class ="btn btn-dark" name="changepwdbtn">Change Password</button> 
            </div>
            
          </form>
        

      </div>
    </div>
  </div>
</div>

        
        
        
        
       	
        
   <!-- Footer   start   -->
<!-- <div class="bg-theme" style="margin-top: 100px;padding:0px;" id="footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-3" id="endings">
            <h4> Student Section</h4>
       <ul>
        <li><a href="#" id="end">Result</a></li>
        <li><a href="#"id="end"> Pay Fee</a></li>
        <li><a href="#"id="end"> Training</a></li>
        <li><a href="#"id="end"> Placements</a></li>
      </ul>
          </div>
      
          <div class="col-md-3"id="endings">
            <h4> QUICK LINKS </h4>
            <ul >
              <li><a href="#"id="end">Home </a> </li>
              <li><a href="#"id="end">  About us</a> </li>
              <li><a href="#"id="end">Gallery </a> </li>
              <li><a href="#"id="end"> Contact us <i class="bi bi-arrow-up-right"></i></a> </li>
              
              
            </ul>
      
          </div>
      
          <div class="col-md-3"id="endings">
            <h4> Information Link</h4>
            <ul so>
              <li><a href="#"id="end"> News</a> </li>
              <li><a href="#"id="end">R&D Policy</a> </li>
              <li><a href="#"id="end"> Anti-Ragging</a> </li>
              <li><a href="#"id="end"> Admission</a> </li>
            </ul>
      
          </div>
      
          <div class="col-md-3"id="endings">
            <h4> GET IN TOUCH </h4>
            <div id="iconss">
        <ul id="socialicons"> 
          <li><a href="https://www.facebook.com/bmwindia" target="_blank"> <i class="bi bi-facebook" style="color: #ffff;" ></i></a> </li>
          <li><a href="https://www.instagram.com/bmwindia_official/" target="_blank"> <i class="bi bi-instagram" style="color: #ffff;"></i></a></li>
          <li> <a href="https://www.youtube.com/user/bmwindia" target="_blank"><i class="bi bi-youtube" style="color: #ffff;"></i> </a></li>
          <li><a href="https://in.linkedin.com/showcase/bmw-india/"target="_blank"><i class="bi bi-linkedin" style="color: #ffff;"></i></a> </li>
          <li><a href="https://twitter.com/bmwindia"target="_blank"><i class="bi bi-twitter-x" style="color: #ffff;"></i></a></li>
        </ul>
</div>
</div>     
</div>	
</div>
</div> -->

 <!-- Footer end -->









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>$('.carousel').carousel({
      interval: 3000
    })</script>
	<Script>
	function deleteacc()
	{
		var confirmation = confirm("Are you sure you want to delete your account?");
		if (confirmation) {
                window.location.href = "deleteaccount.php?id=<?php echo $id ?>"; 
            }
	}
</Script>

    
</body>
</html>






