
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Student Information</h2>
    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "your_database_name";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch student information
        $sql = "SELECT fullname, email, mobile FROM student1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["fullname"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["mobile"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No student information found</td></tr>";
        }
        $conn->close();
        ?>