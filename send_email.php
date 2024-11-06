<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);

    $to = "dobryananas19@gmail.com"; // Замените на свой email
    $subject = "Новая заявка с сайта SAKE";
    $message = "Имя: $name\nТелефон: $phone\nУслуга: $service";
    $headers = "From: dobryananas19@gmail.com"; // Замените на нужный адрес

    if (mail($to, $subject, $message, $headers)) {
        echo "Ваше сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>
