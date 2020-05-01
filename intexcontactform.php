<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $massage = $_POST['massage'];

    $email_from = 'adilhabeebacca@gmail.com';
    $email_subject ='CONTACT FROM $name .\n';
    $email_body = "Username: $name.\n".
                    "User Email: $visitor_email.\n".
                        "Massage: $massage.\n".

    $to ="adilhabeebacca@gmail.com";
    $headers ="form: $email_from \r\n";
    $headers ="Replay-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>