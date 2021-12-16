<?php

    include "../Warrior.php";

    if(!empty($_POST['name']))
    {
        $warrior = new Warrior($_POST['name'], $_POST['hp'], $_POST['xp'], $_POST['gender'], $_POST['armor'], $_POST['strength']);
        $connection = @new mysqli('localhost', 'root', '', 'zaliczenie');
        
        $name = $warrior->getName();
        $hp = $warrior->getHP();
        $xp = $warrior->getXP();
        $gender = $warrior->getGender();
        $armor = $warrior->getArmor();
        $strength = $warrior->getStrength();

        $connection->query("INSERT INTO warrior_objects VALUES(NULL, '$name', $hp, $xp, '$gender', $armor, $strength)");
        $connection->close();

        session_start();
        $_SESSION['result'] = "Obiekt Warrior [name = ".$name.", gender = ".$gender.", hp = ".$hp.", xp = ".$xp.", armor = ".$armor.", strength = ".$strength."]";
        header("Location: ..");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warrior</title>
</head>
<body>
    <h1>Warrior</h1>
    <form method="post">
        <label for="name">Imię:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="gender">Płeć:</label><br>
        <input type="text" name="gender" id="gender"><br><br>
        
        <label for="hp">Punkty życia:</label><br>
        <input type="number" name="hp" id="hp"><br><br>

        <label for="xp">Punkty doświadczenia:</label><br>
        <input type="number" name="xp" id="xp"><br><br>

        <label for="armor">Punkty pancerza:</label><br>
        <input type="number" name="armor" id="armor"><br><br>

        <label for="strength">Punkty siły:</label><br>
        <input type="number" name="strength" id="strength"><br><br>

        <button type="submit">Utwórz obiekt</button>
    </form>
    <br>
    <a href="..">Do strony głównej</a>
</body>
</html>