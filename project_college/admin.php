<?php
// admin.php

// Check if user is logged in
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: admin.php");
    exit;
}

$connect = mysqli_connect("localhost","root","","user");



// Check connection


// Retrieve data from teacher table
$teacher_query = "SELECT * FROM teacher";
$teacher_result = $conn->query($teacher_query);

// Retrieve data from student table
$student_query = "SELECT * FROM student1";
$student_result = $conn->query($student_query);

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>

<h2>Teacher Data:</h2>
<?php
if ($teacher_result->num_rows > 0) {
    while($row = $teacher_result->fetch_assoc()) {
        echo "name: " . $row["fullname"]. " - email: " . $row["email"]. "<br>";
    }
} else {
    echo "No teachers found";
}
?>

<h2>Student Data:</h2>
<?php
if ($student_result->num_rows > 0) {
    while($row = $student_result->fetch_assoc()) {
        echo "Name: " . $row["fullname"]. " - Grade: " . $row["grade"]. "<br>";
    }
} else {
    $qry = "SELECT * FROM `teacher` WHERE email='$eid' AND Password='$pwd'";
	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	$data = mysqli_fetch_assoc($result);
}
?>

</body>
</html>