<?php
header("Content-Type: application/json");

// Check the request method
$method = $_SERVER['REQUEST_METHOD'];

// Handle GET requests
if ($method == 'GET') {
  // Get the ID parameter from the query string
  $id = $_GET['id'];

  // Get the data from the database
  // In this example, we'll just return some dummy data
  if ($id) {
    $data = array('id' => $id, 'name' => 'John Doe', 'email' => 'johndoe@example.com');
  } else {
    $data = array(
      array('id' => 1, 'name' => 'John Doe', 'email' => 'johndoe@example.com'),
      array('id' => 2, 'name' => 'Jane Smith', 'email' => 'janesmith@example.com'),
      array('id' => 3, 'name' => 'Bob Johnson', 'email' => 'bobjohnson@example.com')
    );
  }

  // Send the response
  echo json_encode($data);

// Handle POST requests
} else if ($method == 'POST') {
  // Get the data from the request body
  $data = json_decode(file_get_contents('php://input'), true);

  // Save the data to the database
  // In this example, we'll just return the data
  echo json_encode($data);

// Handle other requests
} else {
  // Send a 405 Method Not Allowed response
  header('HTTP/1.1 405 Method Not Allowed');
  header('Allow: GET, POST');
  echo json_encode(array('error' => 'Method Not Allowed'));
}
