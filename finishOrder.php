<?php

session_start();

loadContactInfo();

$valid = validateContactInfo();

if ($valid) {
    session_unset();
    session_destroy();
    session_write_close();
    header('Location: /pizza-order-system/', true, 303);
    die();
}
else{
    $_SESSION['error'] = "Please enter a phone number in this format: 123456789";
    header('Location: /pizza-order-system/order.php', true, 303);
    die();
}

function loadContactInfo(): void
{
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address'])) {
        $_SESSION['error'] = "Please fill out all the fields";
        header('Location: /pizza-order-system/order.php', true, 303);
        die();
    }
    unset($_SESSION['error']);
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];
}

function validateContactInfo(): bool
{
    $phoneRegex = '/\\d{9}$/';
    if(!preg_match($phoneRegex, $_POST['phone'])) {
        return false;
    }
    return true;
}