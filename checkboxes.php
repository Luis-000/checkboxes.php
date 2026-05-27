<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburguer">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hot Dog">Hot Dog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>
        <input type="submit" name="submit">

    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {

    /*          //Option to use as an array:
    $foods = $_POST["foods"];
    echo $foods[3];

    foreach ($foods as $food) {
        echo $food . "<br>";
    }
        */


    if (isset($_POST["pizza"])) {
        echo "You like pizza!<br>";
    }
    if (isset($_POST["hamburger"])) {
        echo "You like hamburgers!<br>";
    }
    if (isset($_POST["hotdog"])) {
        echo "You like hotdogs!<br>";
    }
    if (isset($_POST["taco"])) {
        echo "You like tacos!<br>";
    }

    if (empty($_POST["pizza"])) {
        echo "You don't like pizza!<br>";
    }
    if (empty($_POST["hamburger"])) {
        echo "You don't like hamburgers!<br>";
    }
    if (empty($_POST["hotdog"])) {
        echo "You don't like hotdogs!<br>";
    }
    if (empty($_POST["taco"])) {
        echo "You don't like tacos!<br>";
    }
}
