<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name_input']));
    $email = htmlspecialchars(trim($_POST['email_input']));
    $message = htmlspecialchars(trim($_POST['message_input']));

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
    } else {
        echo json_encode(['error' => 'Please fill out all fields correctly.']);
    }
} else {
    echo json_encode(['error' => 'Invalid request.']);
}

?>
