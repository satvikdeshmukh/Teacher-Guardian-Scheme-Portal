<?php
if(isset($_POST["changepwdbtn"])){

$connect = mysqli_connect("localhost","root","","project5");

$eid = $_POST["email"];
$pwd = $_POST["pwd"];
$npwd = $_POST["npwd"];
$qry =  "SELECT * FROM `student1` WHERE email='$eid' AND password='$pwd'";
$result = mysqli_query($connect,$qry);
$data = mysqli_fetch_assoc($result);
$id = $data["id"];
$row = mysqli_num_rows($result);
if($row>0){
   $qry =  "UPDATE `student1` SET `password`='$npwd' WHERE id = '$id'";
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


