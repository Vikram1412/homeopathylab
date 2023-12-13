<?php
header('Content-Type: application/json');

if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $response = array('message' => "Hello, " . $name . "!");
    echo json_encode($response);
} else {
    $response = array('error' => "Name parameter is required.");
    echo json_encode($response);
}
?>
