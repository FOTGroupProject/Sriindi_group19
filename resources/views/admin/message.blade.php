<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- User List Sidebar -->
                <h4 class="mt-3 mb-3">User List</h4>
                <ul class="list-group">
                    <li class="list-group-item">User 1</li>
                    <li class="list-group-item">User 2</li>
                    <li class="list-group-item">User 3</li>
                    <!-- Add more users dynamically if needed -->
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Chat Interface -->
                <div class="chat-container">
                    <div class="messages-container">
                        <!-- Messages will be dynamically added here -->
                        <div class="message">User 1: Hello!</div>
                        <div class="message text-right">You: Hi there!</div>
                    </div>
                    <form id="chat-form">
                        <div class="input-group mb-3">
                            <input type="text" id="message-input" class="form-control" placeholder="Type your message...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for chat functionality -->
    <script>
        $(document).ready(function() {
            // Submit chat message
            $('#chat-form').submit(function(e) {
                e.preventDefault();
                let message = $('#message-input').val().trim();
                if (message !== '') {
                    $('.messages-container').append('<div class="message text-right">You: ' + message + '</div>');
                    $('#message-input').val('');
                    // Send message to backend via AJAX if needed
                }
            });
        });
    </script>
</body>
</html>
