<?php
header('Content-Type: application/json');

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

// Query the database for user data
$sql = "SELECT id, name, email,password FROM users";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Create an empty array to hold the user data
    $users = array();
    while($row = $result->fetch_assoc()) {
        // Add each user's data to the array
        $user = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => $row['password']
        );
        array_push($users, $user);
    }
    // Return the user data as a JSON response
    echo json_encode($users);
} else {
    $response = array('error' => "No users found.");
    echo json_encode($response);
}

// Close the database connection
$conn->close();
?>
