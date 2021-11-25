<?php
if(isset($_POST["theme"]) && isset($_POST["name"]) && 
    isset($_POST["email"]) && isset($_POST["message"]) && isset($_POST["tour_date"]) && isset($_POST["login"]) && isset($_POST["password"])) 
{
    $theme = $_POST["theme"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $tour_date = $_POST["tour_date"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $output ="
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $name<br />
    Интересующий регион: $theme<br />
    Ваша почта: $email<br />
    Личные пожелания: $message <br />
    Дата поездки: $tour_date <br />
    Логин: $login <br />
    Пароль: $password <br />;";
    echo $output;
}

?>