<?php


$connect = mysqli_connect("localhost","root", "", "user");

if(!$connect)
{
	echo "Database not connected, contact to system administrators";
}
?>