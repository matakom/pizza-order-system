<?php

spl_autoload_register(function ($class) {
    require_once("{$class}.class.php");
});

session_start();

if(isset($_POST['toRemoveTopping'])) {
    $_SESSION['pizza']->removeTopping($_POST['toRemoveTopping']);
}

header('Location: /pizza-order-system/order.php', true, 303);
die();
    