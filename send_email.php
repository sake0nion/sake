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
        echo json_encode(["status" => "success", "message" => "Ваше сообщение отправлено!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Ошибка при отправке сообщения."]);
    }
}
?>
