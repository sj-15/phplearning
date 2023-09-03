<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "student_database"; // Replace with your database name
$table_name = "students"; // Replace with your table name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM $table_name";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$conn->close();

// Encode the data as JSON
echo json_encode($data);
?>
