<?php

    if(!isset($_POST['email'], $_POST['message'])) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
        exit();
    }

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $subject = "New inquiry for Ferrance Analytics";
    $content = "Phone: " . $phone . "\r\nEmail: " . $email . "\r\n" . $message;
    $recipient = "fjvanwaart@gmail.com";
    $sender = "fransvanwaart@ferranceanalytics.nl";
    $headers = array();
    $headers[ ] = "MIME-Version: 1.0";
    $headers[ ] = "Content-type: text/plain; charset=utf-8";
    $headers[ ] = "From: Ferrance Analytics <{$sender}>";
    $headers[ ] = "Reply-To: {$name} <{$email}>";
    $headers[ ] = "X-Mailer: PHP/".phpversion();
    if(mail($recipient, $subject, $content, implode("\r\n", $headers), "-f".$sender)) {
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully']);    
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Failed to send message']);
    }
?>