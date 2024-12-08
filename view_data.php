<!DOCTYPE html>
<hrad>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
</hrad>
<body  >
        <header>
            <h1>Harshith PG for Gents  </h1>
            <nav>
            <div class="navi">
                <a href="index.html">Home</a>
                <a href="login.html">Login</a>
                <a href="re.html">Registration</a>
            </div>
            </nav>
        </header>
</body>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harshith_pg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display data
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

echo "<h1>Registered Users</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Joining Date</th>
                <th>Sharing Type</th>
                <th>Payment Option</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["phone_number"] . "</td>
                <td>" . $row["dob"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["joining_date"] . "</td>
                <td>" . $row["sharing_type"] . "</td>
                <td>" . $row["payment_option"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
