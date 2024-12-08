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
// $query=mysqli_query($conn,"select * from registration");
// $data=mysqli_fetch_all($query,MYSQLI_ASSOC);

// var_dump($data);


// Insert data into the table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_na'];
    $last_name = $_POST['last'];
    $phone_number = $_POST['pho'];
    $dob = $_POST['bir'];
    $address = $_POST['add'];
    $joining_date = $_POST['join'];
    $sharing_type = $_POST['share'];
    $payment_option = $_POST['payment'];

    $sql = "INSERT INTO registration (first_name, last_name, phone_number, dob, address, joining_date, sharing_type, payment_option) 
            VALUES ('$first_name', '$last_name', '$phone_number', '$dob', '$address', '$joining_date', $sharing_type, '$payment_option')";

    if ($conn->query($sql) === true) {
        echo "Registration successful. ";
        echo '<br><a href="index.html">Back to Home</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
