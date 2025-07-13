<?php
if (isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Виконайте збереження даних у базу даних або інше місце збереження

    // Надішліть дані на пошту
    $to = 'your-email@example.com'; // Замініть на вашу адресу електронної пошти
    $subject = 'Нове замовлення';
    $message = "Кількість товару: $quantity\nІм'я: $name\nНомер телефону: $phone";
    $headers = "From: your-email@example.com"; // Замініть на вашу адресу електронної пошти

    // Надіслати лист
    mail($to, $subject, $message, $headers);

    // Перенаправити користувача на сторінку підтвердження або іншу сторінку
    header('Location: confirmation.php');
    exit;
}
?>
