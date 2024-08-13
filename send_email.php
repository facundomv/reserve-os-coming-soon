<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "facundomv@gmail.com";
    $subject = "New Email Subscription from Rerserve Os";
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = "New subscription from: " . $email;

    // Headers
    $headers = "From: no-reply@reserveos.com" . "\r\n" .
               "Reply-To: no-reply@reserveos.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'success';
    } else {
        echo 'failure';
    }
} else {
    echo 'failure';
}
?>
