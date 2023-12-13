

<form method="post">
    <input type="text" name="message" placeholder="Type your message here...">
    <button type="submit">Send</button>
</form>

<?php
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





<?php
/*
// get user input from the chat interface
$user_input = $_GET['msg'];

// define the chat bot responses
$greetings = array(
    "hello" => "Hello there!",
    "hi" => "Hi!",
    "hey" => "Hey there!",
    "greetings" => "Greetings!",
    "good morning" => "Good morning!",
    "good afternoon" => "Good afternoon!",
    "good evening" => "Good evening!"
);

$questions = array(
    "what is your name" => "My name is Chat Bot.",
    "how are you" => "I'm doing well, thank you!",
    "what time is it" => date("h:i A"),
    "what day is it" => date("l, F j, Y")
);

// check user input and generate chat bot response
if (array_key_exists(strtolower($user_input), $greetings)) {
    $response = $greetings[strtolower($user_input)];
} elseif (array_key_exists(strtolower($user_input), $questions)) {
    $response = $questions[strtolower($user_input)];
} else {
    $response = "I'm sorry, I don't understand what you're asking. Can you please ask me something else?";
}

// output the chat bot response
echo $response;
*/