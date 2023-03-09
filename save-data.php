<?php
// Define MySQL database connection variables
$servername = "localhost";
$username = "root";
$password = "E5nmRBG7@";
$dbname = "user_data";

// Create a new MySQL database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data from the $_POST superglobal array
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

// Prepare a SQL statement to insert the data into the database
$stmt = $conn->prepare("INSERT INTO users (name, email, mobile) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $mobile);

// statement execution is successful
if ($stmt->execute()) {
echo "Data saved successfully!";
} else {
echo "Error: " . $stmt->error;
}

// Close the database connection and statement
$stmt->close();
$conn->close();
?>

<p><a href="index.html">Go back to Signup Page</a></p>
