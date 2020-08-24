<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "New Contact Request";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Message: $message.\n";
    
    $to = 'tahaboty@yahoo.com';
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>

/* https://www.youtube.com/watch?v=4q0gYjAVonI */