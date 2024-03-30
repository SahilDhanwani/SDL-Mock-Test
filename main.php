<?php

$registered_emails = array();

function is_email_registered($email, $registered_emails) {
    return in_array($email, $registered_emails);
}

function register_email($email, &$registered_emails) {
    $registered_emails[] = $email;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $submitted_email = $_POST['email'];

    if (is_email_registered($submitted_email, $registered_emails)) {
        echo "Email already registered.";
    } else {
        register_email($submitted_email, $registered_emails);
        echo "Email successfully registered.";
    }
}
?>
