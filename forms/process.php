<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $department = $_POST["department"];
    $semester = $_POST["semester"];

    // Connect to your database (replace with your database credentials)
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "student_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO student_database (name, roll, department, semester) VALUES ('$name', '$roll', '$department', '$semester')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
