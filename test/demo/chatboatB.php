<?php

date_default_timezone_set('Asia/Kolkata');

// define your chatbot's responses
$responses = array(
    "hi" => "Hello, how can I help you?",
    "hello" => "Hi there, how can I assist you?",
    "how are you" => "I'm fine, thank you. How can I help you?",
    "what is your name" => "My name is ChatBot. How can I assist you?",
    "what time is it" => "It's currently " . date("h:i A"),
    "bye" => "Goodbye, have a nice day!",
    "thank you" => "You're welcome!"
);

// check if the user has entered a message
if(isset($_POST['message'])) {
    // get the user's message and convert it to lowercase
    $user_message = strtolower($_POST['message']);

    // search for the appropriate response from the chatbot
    foreach($responses as $key => $value) {
        // if the user's message matches a key in the responses array
        if(strpos($user_message, $key) !== false) {
            // output the chatbot's response
            echo $value;
            exit;
        }
    }

    // if the user's message doesn't match any keys in the responses array
    echo "Sorry, I didn't understand your message. Please try again.";
}
?>
