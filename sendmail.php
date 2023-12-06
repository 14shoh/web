<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    $to = 'fayzehitus@mail.com';
    $subject = 'Новая заявка с сайта';
    $message = "Телефон: $phone\nEmail: $email";
    $headers = "From: fayzehitus.ee"; 

    if(mail($to, $subject, $message, $headers)) {
        echo "Ошибка отправки";
    } else {
        echo "Ошибка отправки";
    }
}
?>
