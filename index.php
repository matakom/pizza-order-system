<!DOCTYPE html>
<html>

<body>

    <form action="order.php" method="post">

        <label for="base">Pizza base:</label>
        <select id="base" name="base">
            <option value="Tomato">Tomato base</option>
            <option value="Cream">Cream base</option>
            <option value="BBQ">BBQ base</option>
        </select>
        <br>

        <label for="toppings">Pizza toppings:</label>
        <br>

        <label for="mozzarella">Mozzarella</label>
        <input type="checkbox" id="mozzarella" name="mozzarella"><br>

        <label for="mushrooms">Mushrooms</label>
        <input type="checkbox" id="mushrooms" name="mushrooms"><br>

        <label for="pepperoni">Pepperoni</label>
        <input type="checkbox" id="pepperoni" name="pepperoni"><br>

        <label for="pineapple">Pineapple</label>
        <input type="checkbox" id="pineapple" name="pineapple"><br>

        <label for="ham">Ham</label>
        <input type="checkbox" id="ham" name="ham"><br>

        <label for="olives">Olives</label>
        <input type="checkbox" id="olives" name="olives"><br>

        <label for="onions">Onions</label>
        <input type="checkbox" id="onions" name="onions"><br>

        <label for="peppers">Peppers</label>
        <input type="checkbox" id="peppers" name="peppers"><br>

        <label for="baking">Baking</label><br>
        <select id="baking" name="baking">
            <option value="Frozen">Frozen</option>
            <option value="Raw">Raw</option>
            <option value="Baked" selected>Baked</option>
            <option value="Burned">Burned</option>
            <option value="Coal burned">Coal burned</option>
        </select>
        <br>

        <button type="submit">Submit</button>

    </form>

</body>

</html>