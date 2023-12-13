<?php
header('Content-Type: application/json');

// Get the user data from the request body
$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$email = $data['email'];

// Create a connection to the database
$servername = "localhost";
$username = "homeopat";
$password = "Vikram@276141";
$dbname = "homeopat_test";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    $response = array('error' => "Connection failed: " . $conn->connect_error);
    echo json_encode($response);
    exit;
}

// Insert the user data into the database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    // Return a success message as a JSON response
    $response = array('message' => "User created successfully.");
    echo json_encode($response);
} else {
    $response = array('error' => "Error: " . $sql . "<br>" . $conn->error);
    echo json_encode($response);
}

// Close the database connection
$conn->close();
?>
