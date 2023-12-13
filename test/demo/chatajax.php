<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chatbot Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // handle form submission
            $('form').submit(function(e) {
                e.preventDefault(); // prevent form from submitting

                // get user input
                var message = $('input[name="message"]').val();

                // clear input field
                $('input[name="message"]').val('');

                // send user input to server with AJAX
                $.ajax({
                    url: 'chatboatB.php',
                    method: 'POST',
                    data: {message: message},
                    success: function(response) {
                        // output server response
                        $('#chatbox').append('<p><strong>You:</strong> ' + message + '</p>');
                        $('#chatbox').append('<p><strong>Chatbot:</strong> ' + response + '</p>');
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h1>Chatbot Example</h1>
    <div id="chatbox"></div>
    <form>
        <input type="text" name="message" placeholder="Type your message here...">
        <button type="submit">Send</button>
    </form>
</body>
</html>
