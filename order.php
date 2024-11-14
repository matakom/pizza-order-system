<?php


spl_autoload_register(function ($class) {
    require_once("{$class}.class.php");
});

session_start();

// var_dump($_SESSION);

loadOrder();

showOrderSummary();

?>
<form action="cancelOrder.php" method="post">
    <button type="submit">Cancel order</button>
</form>

<h1>Contact info</h1>
<?php
if(isset($_SESSION['error'])) {
    echo '---------------------';
    echo '<h2>' . $_SESSION['error'] . '</h2>';
    echo '---------------------';
}
?>
<form action="finishOrder.php" method="post">


    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value=<?php if(isset($_SESSION['fname'])) echo $_SESSION['fname'];?>><br><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value=<?php if(isset($_SESSION['lname'])) echo $_SESSION['lname'];?>><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value=<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>><br><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone" value=<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'];?>><br><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value=<?php if(isset($_SESSION['address'])) echo $_SESSION['address'];?>><br><br>

    <button type="submit">Submit</button>

</form>


<?php

function showOrderSummary()
{
    ?>
    <h1>Order summary</h1>
    <h4>General</h4>
    <p>Base: <?php echo $_SESSION['pizza']->getBase() ?></p>
    <p>Baking: <?php echo $_SESSION['pizza']->getBaking() ?></p>
    <h4>Toppings</h4>

    <?php
    foreach ($_SESSION['pizza']->getToppings() as $topping) {
        ?>
        <form action="removeTopping.php" method="post">
            <label><?php echo $topping?></label>
            <input type="hidden" id="toRemoveTopping" name="toRemoveTopping">
            <button type="submit" name="toRemoveTopping" value="<?php echo $topping?>">Remove</button>
        </form>
        <?php
    }
}

function loadOrder(): void
{
    if (!isset($_POST['base']) || !isset($_POST['baking'])) {
        return;
    }

    $pizza = new Pizza($_POST['base'], $_POST['baking']);

    if (!empty($_POST['mozzarella'])) {
        $pizza->addTopping('Mozzarella');
    }

    if (!empty($_POST['mushrooms'])) {
        $pizza->addTopping('Mushrooms');
    }

    if (!empty($_POST['pepperoni'])) {
        $pizza->addTopping('Pepperoni');
    }

    if (!empty($_POST['pineapple'])) {
        $pizza->addTopping('Pineapple');
    }

    if (!empty($_POST['ham'])) {
        $pizza->addTopping('Ham');
    }

    if (!empty($_POST['olives'])) {
        $pizza->addTopping('Olives');
    }   

    if (!empty($_POST['onions'])) {
        $pizza->addTopping('Onions');
    }

    if (!empty($_POST['peppers'])) {
        $pizza->addTopping('Peppers');
    }

    $_SESSION['pizza'] = $pizza;

}

