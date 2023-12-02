<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "tinminzhou@icloud.com"; // Ваша почта для получения сообщений

    $subject = "Новое сообщение с контактной формы";
    $body = "Имя: " . $name . "\n\nEmail: " . $email . "\n\nСообщение: " . $message;

    if(mail($to, $subject, $body)){
        echo "Ваше сообщение успешно отправлено.";
    } else{
        echo "Что-то пошло не так. Попробуйте еще раз.";
    }
}
?>