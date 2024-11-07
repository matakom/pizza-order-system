<?php


session_start();

$_SESSION['toppings'] = [];

loadOrder();

showOrderSummary();

?>
<form action="cancelOrder.php" method="post">
    <button type="submit">Cancel order</button>
</form>


<h1>Contact info</h1>
<form action="finishOrder.php" method="post">


    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value=""><br><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value=""><br><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone" value=""><br><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value=""><br><br>


    <button type="submit">Submit</button>

</form>


<?php

function showOrderSummary()
{
    echo '<h1>Order summary</h1>';
    echo '<h4>General</h4>';
    echo '<p>Base: ' . $_SESSION['base'] . '</p>';
    echo '<p>Baking: ' . $_SESSION['baking'] . '</p>';
    echo '<h4>Toppings</h4>';
    foreach ($_SESSION['toppings'] as $topping) {
        echo '<p>' . $topping . '</p>';
    }
}

function loadOrder(): void
{

    if (!empty($_POST['base'])) {
        $_SESSION['base'] = $_POST['base'];
    }

    if (!empty($_POST['baking'])) {
        $_SESSION['baking'] = $_POST['baking'];
    }

    if (!empty($_POST['mozzarella'])) {
        $_SESSION['toppings'][] = 'Mozzarella';
    }

    if (!empty($_POST['mushrooms'])) {
        $_SESSION['toppings'][] = 'Mushrooms';
    }

    if (!empty($_POST['pepperoni'])) {
        $_SESSION['toppings'][] = 'Pepperoni';
    }

    if (!empty($_POST['pineapple'])) {
        $_SESSION['toppings'][] = 'Pineapple';
    }

    if (!empty($_POST['ham'])) {
        $_SESSION['toppings'][] = 'Ham';
    }

    if (!empty($_POST['olives'])) {
        $_SESSION['toppings'][] = 'Olives';
    }

    if (!empty($_POST['onions'])) {
        $_SESSION['toppings'][] = 'Onions';
    }

    if (!empty($_POST['peppers'])) {
        $_SESSION['toppings'][] = 'Peppers';
    }

}

